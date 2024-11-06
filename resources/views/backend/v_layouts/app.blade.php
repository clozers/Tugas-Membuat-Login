<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tokoonline</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-indigo-600 p-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-white text-lg font-semibold">
                <!-- Logo atau judul -->
                <a href="{{ route('backend.beranda') }}" class="hover:text-indigo-200">Beranda</a>
            </div>
            <div class="space-x-4 text-white text-sm font-medium">
                <a href="{{ route('backend.beranda') }}" class="hover:text-indigo-200">Beranda</a>
                <a href="#" class="hover:text-indigo-200">User</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('keluar-app').submit();"
                    class="hover:text-indigo-200">Keluar</a>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mx-auto p-6">
        <!-- @yieldAwal -->
        @yield('content')
        <!-- @yieldAkhir-->
    </div>

    <!-- Logout Form (Hidden) -->
    <form id="keluar-app" action="{{ route('backend.logout') }}" method="POST" class="hidden">
        @csrf
    </form>

</body>

</html>
