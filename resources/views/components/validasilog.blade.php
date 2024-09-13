<dialog id="my_modal_1" class="modal rounded-xl">
    <div class=" p-6">
    <div class="modal-box">
      <h3 class="text-lg font-bold mb-6">Kamu yakin mau keluar?</h3>
      <div class="modal-action flex justify-end ">
        <form id="logoutForm" method="get" action="{{ route('actionlogout') }}">
          <button type="submit" class="bg-red-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-red-600 focus:outline-none ">Yes, Log Out</button>
        </form>
        <button id="closeModal" class="btn bg-green-500 text-white font-semibold py-2 px-4 ml-4 rounded-md hover:bg-green-600 focus:outline-none">Cancel</button>
      </div>
      </div>
    </div>
  </dialog>

  <script>
    // Get references to the modal and buttons
    const logoutButton = document.getElementById('logoutButton');
    const modal = document.getElementById('my_modal_1');
    const closeModalButton = document.getElementById('closeModal');

    // Show the modal when the logout button is clicked
    logoutButton.addEventListener('click', (event) => {
      event.preventDefault(); // Prevent the default action (navigating to logout)
      modal.showModal();     // Show the modal
    });

    // Close the modal when the close button is clicked
    closeModalButton.addEventListener('click', () => {
      modal.close(); // Close the modal
    });

    // Optionally, you can also close the modal when the user presses ESC key
    modal.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        modal.close();
      }
    });
  </script>
