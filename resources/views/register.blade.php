<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <style>
    body{
    background: url({{ asset('storage/images/Jembatan.jpg')}});
    background-position:center;
    backdrop-filter:blur(5px);
    background-size:cover;
    }

    </style>

</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-xl p-6 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-4">FORM REGISTER USER</h2>
        <hr class="my-4">
        @if(session('message'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{session('message')}}
        </div>
        @endif
        <form action="{{route('actionregister')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">
                    <i class="fa fa-envelope"></i> Email
                </label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Email" required>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">
                    <i class="fa fa-user"></i> Username
                </label>
                <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Username" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    <i class="fa fa-key"></i> Password
                </label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Password" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">
                </label>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700 flex items-center space-x-2">
                    <i class="fa fa-address-book"></i>
                    <span>Role</span>
                </label>
                <input type="text" id="role" name="role" value="User" readonly
              class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-600 cursor-not-allowed focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-purple-600 text-white font-semibold rounded-md shadow-sm hover:bg-purple-800 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                <i class="fa fa-user"></i> Register
            </button>
            <hr class="my-4">
            <p class="text-center text-sm text-gray-600">Sudah punya akun silahkan <a href="/auth/login" class="text-purple-600 hover:text-purple-800">Login Disini!</a></p>
        </form>
    </div>
</body>
</html>
