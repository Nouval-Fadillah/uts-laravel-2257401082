<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body class="h-screen">
    <section class="bg-gray-900 text-white h-full flex items-center">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-full lg:items-center">
            <div class="mx-auto max-w-3xl text-center">
                <h1
                    class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                    Halo ManiezZz
                </h1>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
                        href="{{ route('login') }}">
                        Login
                    </a>

                    <a class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
                        href="{{ route('register') }}">
                        Daftar
                    </a>
                </div>

                <p class="mt-6 text-sm text-gray-400">Created By {{ $nama }}, {{ $nim }},
                    {{ $kelas }}</p>
            </div>
        </div>
    </section>
</body>



</html>
