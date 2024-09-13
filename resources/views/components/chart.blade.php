<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Optional: Style adjustments for input field width */
        .quantity-input {
            width: 60px;
        }

        body {
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-black">Keranjang Belanja</h1>

        <!-- Keranjang Item -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Produk
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nomor Telepon
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Pemesanan
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <!-- Empty header for actions -->
                        </th>
                    </tr>
                </thead>
                <tbody id="cart-items" class="bg-white divide-y divide-gray-200">
                    <!-- Items will be inserted here by JavaScript -->
                </tbody>
            </table>
        </div>

        <!-- Total -->
        <div class="mt-6 bg-white p-6 rounded-lg shadow-lg">
            <div class="flex justify-between text-lg font-bold">
                <span>Total</span>
                <span id="total-amount">Rp0</span>
            </div>
            <div class="mt-4 flex justify-end p-2">
                <button onclick="goback()" class="bg-transparent border border-red-600 text-black px-4 py-2 rounded-lg hover:bg-red-700 hover:text-white mr-2">
                    <a href="">Back</a>
                </button>
                <button class="bg-transparent border border-indigo-600 text-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-700 hover:text-white">
                    <a href="">Checkout</a>
                </button>
            </div>
        </div>
    </div>

    <script>
        function updateTotals() {
            let total = 0;
            const rows = document.querySelectorAll('#cart-items tr');
            rows.forEach(row => {
                const quantityInput = row.querySelector('input[type="number"]');
                const quantity = Math.max(parseInt(quantityInput.value), 0);
                quantityInput.value = quantity;
                const priceText = row.querySelector('td:nth-child(6)').textContent.replace('Rp', '').replace('.', '');
                const price = parseInt(priceText);
                const totalPrice = quantity * price;
                row.querySelector('.total-price').textContent = 'Rp' + totalPrice.toLocaleString();
                total += totalPrice;
            });
            document.getElementById('total-amount').textContent = 'Rp' + total.toLocaleString();
        }

        function goback() {
            window.history.back();
        }

        function removeItem(button) {
            const row = button.closest('tr');
            row.remove();
            updateTotals();
        }

        function loadCartItems() {
            const cartItem = JSON.parse(localStorage.getItem('cartItem'));

            if (cartItem) {
                const cartItemsContainer = document.getElementById('cart-items');
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <img src="{{ asset('storage/images/wisata1.jpg') }}" alt="Product Image" class="w-20 h-20 object-cover mr-4">
                            <div class="text-sm font-medium text-gray-900">${cartItem.productName}</div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${cartItem.name}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${cartItem.phone}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${cartItem.orderDate}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <input type="number" class="quantity-input border border-gray-300 rounded-md px-2 py-1" value="${cartItem.quantity}" min="0" onchange="updateTotals()">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${cartItem.price}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 total-price">${cartItem.price}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button onclick="removeItem(this)" class="text-purple-600 hover:text-purple-800">Hapus</button>
                    </td>
                `;
                cartItemsContainer.appendChild(row);
                updateTotals();
            }
        }

        window.onload = loadCartItems;
    </script>
</body>
</html>
