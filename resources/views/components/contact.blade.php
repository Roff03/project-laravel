<div id="contact" class="bg-gray-300">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full">
            <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Contact Us</h1>
            <form action="send_email.php" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" required placeholder="Your Name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Your Email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 text-sm font-medium mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" required placeholder="Your Message" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">Send Message</button>
            </form>
        </div>
    </div>
</div>
