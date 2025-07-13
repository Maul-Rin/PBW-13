<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelola Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-xl">
            <h1 class="text-3xl font-bold mb-6 text-center">Aplikasi Pengelola Post</h1>
            
            @yield('content')
            
            <div class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                Tambah Post
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full bg-gray-50 border border-gray-200">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider w-3/4">Judul</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider w-1/4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200"></td>
                            <td class="py-2 px-4 border-b border-gray-200"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</body>
</html>