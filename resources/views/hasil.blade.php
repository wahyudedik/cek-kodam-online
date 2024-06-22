<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cek Kodam Online') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <meta name="description" content="Cek Kodam Online, cek khodam online, cek kodam gratis, cek kodam online gratis, cek kodam online, cek kodam online gratis, cek kodam online, cek kodam online gratis">
    <meta name="keywords" content="cek kodam, cek kodam online, cek kodam gratis, cek kodam online gratis, cek kodam online, cek kodam online gratis, cek kodam online, cek kodam online gratis, cek kodam online, cek kodam online gratis">
    <meta name="author" content="cekkodam.my.id">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="nositelinkssearchbox">
    <meta name="google" content="notranslate">

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
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="mx-auto mb-4" width="150" >

                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Cek Kodam Anda</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Megetahui siapakah jati diri anda sebenarnya
                        cobalah cek kodam disini <strong>GRATIS</strong>.</p>
                </div>
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name"
                                    value="{{ $kodamDatas->name }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    required
                                    readonly>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="date" class="leading-7 text-sm text-gray-600">Date</label>
                                <input type="date" id="date" name="date"
                                    value="{{ $kodamDatas->birth_date }}"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    required
                                    readonly>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <a href="{{ url('/') }}"
                                class="flex mx-auto text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg text-center">
                                Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Hasil Cek Kodam Anda</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><strong>Name Kodam</strong> : {{ $kodam->name }}</p>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><strong>Description</strong> : {{ $kodam->description }}</p>
                </div>
            </div>
        </section>
    </div>

    <footer class="text-gray-600 body-font text-center border-t border-gray-200">
        <p><br></p>
        <script type='text/javascript' src='https://cdn.trakteer.id/js/embed/trbtn.min.js?date=18-11-2023'></script>
        <script type='text/javascript'>
            (function() {
                var trbtnId = trbtn.init('Dukung Saya di Trakteer', '#be1e2d', 'https://trakteer.id/wahyu_dedik_dwi_astono',
                    'https://cdn.trakteer.id/images/embed/trbtn-icon.png?date=18-11-2023', '40');
                trbtn.draw(trbtnId);
            })();
        </script>
        <p><br></p>
    </footer>
</body>

</html>
