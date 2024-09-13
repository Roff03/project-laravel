<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Pariwisata</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<style>
    body{
    background: url({{ asset('storage/images/gapura.jpg')}});
    background-position:center;
    backdrop-filter:blur(5px);
    background-size:cover;
    }

</style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-xl  p-6 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-4">Login Admin<br class="font-semibold"></h2>
        <hr class="my-4">
        @if(session('error'))
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <b>Opps!</b> {{session('error')}}
        </div>
        @endif
        <form action="{{ route('admin.loginadmin') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Password" required>
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-purple-600 text-white font-semibold rounded-md shadow-sm hover:bg-purple-800 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50">Log In</button>
            <hr class="my-4">
        </form>
    </div>
</body>
</html>
