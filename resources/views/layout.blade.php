<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelola Post</title>
    {{-- Ini akan mengimpor CSS yang telah diproses oleh Mix/Vite (termasuk Tailwind) --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    {{-- Alternatif jika menggunakan CDN Tailwind langsung (tidak disarankan untuk produksi) --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-xl">
            <h1 class="text-3xl font-bold mb-6 text-center">Aplikasi Pengelola Post</h1>
            
            {{-- Ini adalah tempat di mana konten spesifik dari halaman lain akan dimasukkan --}}
            @yield('content')
            
        </div>
    </div> 
</body>
</html>