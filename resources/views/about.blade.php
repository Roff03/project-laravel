<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Optional: Style adjustments for input field width */
        .quantity-input {
            width: 60px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Pemesanan</h1>

        <!-- Order Form -->
        {{-- <form action="{{ route('place-order') }}" method="POST">
            @csrf --}}
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4">Detail Pesanan</h2>
                <div class="bg-gray-50 p-4 rounded-md">
                    <!-- Order Items -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Produk
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Harga
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="order-items" class="bg-white divide-y divide-gray-200">
                                <!-- Example Order Items -->
                                <!-- Repeat for each item in the cart -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img src="{{asset('sukamulya.jpeg')}}" alt="Product Image" class="w-20 h-20 object-cover mr-4">
                                            <div class="text-sm font-medium text-gray-900">Produk 1</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <input type="number" name="quantities[1]" class="quantity-input border border-gray-300 rounded-md px-3 py-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" value="1" min="0" readonly>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp100.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rp100.000</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img src="https://4.bp.blogspot.com/-o9aO9xQCRMg/V9yeEchgbSI/AAAAAAAAOQY/-PuIl8HwpM84t6vbyQvrHG7SniJXZru1ACLcB/s1600/pantai-nglambor-1.jpeg" alt="Product Image" class="w-20 h-20 object-cover mr-4">
                                            <div class="text-sm font-medium text-gray-900">Produk 2</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <input type="number" name="quantities[2]" class="quantity-input border border-gray-300 rounded-md px-3 py-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" value="2" min="0" readonly>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp50.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rp100.000</td>
                                </tr>
                                <!-- Add more items dynamically as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Shipping Address -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4">Alamat Pengiriman</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" id="address" name="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" placeholder="Masukkan alamat lengkap" required>
                    </div>
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">Kota</label>
                        <input type="text" id="city" name="city" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" placeholder="Masukkan kota" required>
                    </div>
                    <div>
                        <label for="postcode" class="block text-sm font-medium text-gray-700">Kode Pos</label>
                        <input type="text" id="postcode" name="postcode" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" placeholder="Masukkan kode pos" required>
                    </div>
                </div>
            </div>

            <!-- Payment Method -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4">Metode Pembayaran</h2>
                <div class="flex flex-col gap-4">
                    <label class="flex items-center">
                        <input type="radio" name="payment_method" value="credit_card" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" required>
                        <span class="ml-2 text-sm font-medium text-gray-700">Kartu Kredit/Debit</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="payment_method" value="paypal" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" required>
                        <span class="ml-2 text-sm font-medium text-gray-700">PayPal</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="payment_method" value="bank_transfer" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" required>
                        <span class="ml-2 text-sm font-medium text-gray-700">Transfer Bank</span>
                    </label>
                </div>
            </div>

            <!-- Summary -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex justify-between text-lg font-bold">
                    <span>Total</span>
                    <span id="order-total">Rp200.000</span>
                </div>
                <div class="mt-4 flex justify-end p-2">
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Konfirmasi Pesanan</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
