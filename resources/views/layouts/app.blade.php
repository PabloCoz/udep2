<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->

    <script src="https://kit.fontawesome.com/2537d8fed3.js" crossorigin="anonymous"></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-200/75 md:flex flex-nowrap">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main class="w-full">
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('modals')
    
    @isset($js)
        {{ $js }}
    @endisset
</body>

</html>
