@extends('backend.v_layouts.app')
@section('content')
    <!-- contentAwal -->
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ $judul }}</h3>
        <p class="text-gray-600">
            <span class="font-medium text-indigo-600">WEB PROGRAMMING II 50</span>
            <br>Selamat Datang, <span class="font-bold text-gray-800">{{ Auth::user()->nama }}</span> pada aplikasi Toko Online
            dengan hak akses yang anda miliki sebagai 
            <b class="text-indigo-600">
                @if (Auth::user()->role == 1)
                    Super Admin
                @elseif(Auth::user()->role == 0)
                    Admin
                @endif
            </b>.
            <br>Ini adalah halaman utama dari aplikasi ini.
        </p>
    </div>    
    <!-- contentAkhir -->
@endsection
