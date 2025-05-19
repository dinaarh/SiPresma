<div class="flex justify-between items-center bg-gray-900 text-white p-4">
    <div class="text-lg font-semibold">Selamat Datang, @yield('username', 'User')</div>
    <div class="flex items-center space-x-4">
        <div class="text-gray-600">@yield('user_id', 'User ID')</div>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Logout</button>
    </div>
</div>
