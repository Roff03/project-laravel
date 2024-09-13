<!-- resources/views/components/order-modal.blade.php -->
<div id="orderModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden ">
    <div class="bg-white p-6 rounded-md shadow-lg w-full max-w-lg">
        <h2 class="text-xl font-semibold mb-4">Form Pesanan Barang</h2>
        <form action="#" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-purple-500 sm:text-sm" />
            </div>
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Jumlah</label>
                <input type="number" id="quantity" name="quantity" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-purple-500 sm:text-sm" />
            </div>
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Alamat Pengiriman</label>
                <textarea id="address" name="address" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-purple-500 sm:text-sm"></textarea>
            </div>
            <div class="flex justify-end gap-4">
                <button type="button" id="closeModal" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-700">Tutup</button>
                <button  type="submit" class="bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-800">Kirim</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');
        const modal = document.getElementById('orderModal');

        if (openModalButton) {
            openModalButton.addEventListener('click', (event) => {
                event.preventDefault();
                modal.classList.remove('hidden');
            });
        }

        if (closeModalButton) {
            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        }

        // Optional: Close modal when clicking outside of the modal content
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
</script>
