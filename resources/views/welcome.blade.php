<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>

    <!-- Contoh pakai Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="text-center">
        <h1 class="text-4xl font-bold mb-4 text-gray-800">Welcome to Laravel!</h1>
        <p class="text-gray-600 mb-6">Halaman ini dibuat dari awal, bukan template bawaan.</p>

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 bg-green-600 text-white rounded">Log in</a>
                
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-gray-700 text-white rounded ml-2">Register</a>
                @endif
            @endauth
        @endif
    </div>

</body>
</html>
