<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-width: 250px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->:
        <nav class="sidebar bg-gray-800 text-white p-4">
            <h1 class="text-xl font-bold mb-6">Admin Panel</h1>
            <ul>
                <li><a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard</a></li>
                <li><a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Users</a></li>
                <li><a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Settings</a></li>
                <li><a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Reports</a></li>
                <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg hidden" id="userMenu">
                    <ul class="py-1 text-sm text-gray-700">
                        {{-- <li>
                            {{-- dirubah sebentar --}}
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Level:{{ Auth::user()->role}}</a>

                        </li>
                        <li><hr class="my-1 border-gray-200" /></li>
                        <li>
                            <a href="{{ route('logout') }}" id="logoutButton" class="block px-4 py-2 text-red-600 hover:bg-gray-100"><i class="fa fa-power-off"></i> Log Out</a>
                            <x-validasilog/>
                        </li> --}}
                    </ul>
                </div>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <header class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold">Dashboard</h2>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Logout</button>
            </header>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Total Users</h3>
                    <p class="text-3xl font-bold">1,234</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Active Users</h3>
                    <p class="text-3xl font-bold">567</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Revenue</h3>
                    <p class="text-3xl font-bold">$12,345</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">New Signups</h3>
                    <p class="text-3xl font-bold">89</p>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Activity</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap">Logged in</td>
                            <td class="px-6 py-4 whitespace-nowrap">2024-08-23</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                            <td class="px-6 py-4 whitespace-nowrap">Updated profile</td>
                            <td class="px-6 py-4 whitespace-nowrap">2024-08-22</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>


// tidak bisa manggil name usernya
