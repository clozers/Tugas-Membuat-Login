<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tokoonline</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h3 class="text-center text-2xl font-semibold text-gray-800 mb-4">{{ $judul }}</h3>

        <!-- error -->
        <p class="text-center text-gray-600 mb-6"></p>
        @if (session()->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">{{ session('error') }}</strong>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer"
                    onclick="this.parentElement.style.display='none'">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414 7.066 14.35a1 1 0 11-1.415-1.415L8.586 10 5.651 7.066a1 1 0 011.415-1.415L10 8.586l2.935-2.935a1 1 0 111.415 1.415L11.414 10l2.935 2.935a1 1 0 010 1.414z" />
                    </svg>
                </span>
            </div>
        @endif
        <!-- errorEnd -->

        <form action="{{ route('backend.login') }}" method="post" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-gray-700 font-semibold">User</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}"
                    placeholder="Masukkan Email"
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 
                       @error('email') border-red-500 @enderror">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-semibold">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password"
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 
                       @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">
                Login
            </button>
        </form>
    </div>

</body>

</html>
