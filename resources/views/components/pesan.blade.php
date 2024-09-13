<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pemesanan dengan Gambar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
        background: url({{ asset('storage/images/gapura.jpg') }});
        background-position: center;
        backdrop-filter: blur(5px);
        background-size: cover;
    }
</style>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="flex flex-col md:flex-row w-full max-w-4xl bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Gambar di Samping Kiri -->
        <div id="orderModal" class="md:w-1/2 flex flex-col p-6">
            <h2 id="cardTitle" class="text-2xl font-bold text-gray-800 mb-6 text-center">Gambar</h2>
            <!-- Gambar Besar -->
            <div class="w-full h-64 mb-4 pt-4">
                <img id="mainImage" src="{{ asset('storage/images/wisata2.jpg') }}" alt="Gambar Besar" class="w-full h-full object-cover rounded-md" />
            </div>
            <!-- Gambar Kecil -->
            <div class="flex mb-4 space-x-4">
                <img onclick="changeImage(this)" src="{{ asset('storage/images/wisata3.jpg') }}" alt="Gambar Kecil 1" class="w-24 h-16 object-cover cursor-pointer border-2 border-gray-300 rounded-md" />
                <img onclick="changeImage(this)" src="{{ asset('storage/images/wisata1.jpg') }}" alt="Gambar Kecil 2" class="w-24 h-16 object-cover cursor-pointer border-2 border-gray-300 rounded-md" />
            </div>
        </div>

        <!-- Form Pemesanan -->
        <div class="md:w-1/2 p-6 flex flex-col justify-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Form Pemesanan</h2>
            <form id="orderForm" action="#" method="POST" class="space-y-4">
                <!-- Nama Lengkap -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required />
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required />
                </div>

                <!-- Nomor Telepon -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                    <input type="tel" id="phone" name="phone" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required />
                </div>

                <!-- Tanggal Pemesanan -->
                <div>
                    <label for="order-date" class="block text-sm font-medium text-gray-700">Tanggal Pemesanan</label>
                    <input type="date" id="order-date" name="order-date" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required />
                </div>

                <!-- Jumlah Pesanan -->
                <div>
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Jumlah Pesanan</label>
                    <input type="number" id="quantity" name="quantity" min="1" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required />
                </div>

                <!-- Harga -->
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="text" id="price" name="price" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly />
                </div>

                <!-- Kategori Pesanan -->
                <div class="flex justify-end space-x-4 mt-auto">
                    <button type="button" onclick="goback()" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Kembali</button>
                    <button type="button" onclick="submitForm()" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"><a href="{{route ('chart')}}">Pesan</a></button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Function to change image
        function changeImage(element) {
            const mainImage = document.getElementById("mainImage");
            const tempSrc = mainImage.src;
            mainImage.src = element.src;
            element.src = tempSrc;
        }

        // Function to go back
        function goback() {
            window.history.back();
        }

        // Function to handle form submission
        function submitForm() {
            const form = document.getElementById('orderForm');
            const formData = new FormData(form);

            const cartItem = {
                productName: 'Sample Product', // Replace with dynamic product name if needed
                name: formData.get('name'),
                phone: formData.get('phone'),
                orderDate: formData.get('order-date'),
                quantity: formData.get('quantity'),
                price: formData.get('price')
            };

            // Store in localStorage
            localStorage.setItem('cartItem', JSON.stringify(cartItem));

            // Redirect to cart page
            window.location.href = 'cart.html';
        }

        // Function to update main image, card title, and price based on URL parameters
        function updatePageFromUrl() {
            const urlParams = new URLSearchParams(window.location.search);
            const imageName = urlParams.get('image');
            const cardName = urlParams.get('name');
            const cardPrice = urlParams.get('price');

            if (imageName) {
                const mainImage = document.getElementById("mainImage");
                mainImage.src = `{{ asset('storage/images/') }}/${imageName}`;
            }

            if (cardName) {
                const cardTitle = document.getElementById("cardTitle");
                cardTitle.textContent = cardName;
            }

            if (cardPrice) {
                const priceInput = document.getElementById("price");
                priceInput.value = `Rp ${cardPrice}`;
            }
        }

        // Call function to update page content on page load
        window.onload = updatePageFromUrl;
    </script>
</body>
</html>
