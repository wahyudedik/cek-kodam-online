<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white">
        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Cek Kodam Anda</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Megetahui siapakah jati diri anda sebenarnya
                        cobalah cek kodam disini <strong>GRATIS</strong>.</p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <form action="{{ route('kodam.cek.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-wrap -m-2">
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                    <input type="text" id="name" name="name"
                                        value="{{ old('name', $name ?? '') }}"
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                        required>
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="date" class="leading-7 text-sm text-gray-600">Date</label>
                                    <input type="date" id="date" name="date"
                                        value="{{ old('date', $date ?? '') }}"
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                        required>
                                </div>
                            </div>
                            <div class="p-2 w-full">
                                <button
                                    class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Cek
                                    Kodam</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
