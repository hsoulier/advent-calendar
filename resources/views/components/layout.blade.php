<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? "☃️ Calendrier de l'Avent" }}</title>
    <!-- Fonts -->
    <link href="https://api.fontshare.com/css?f[]=cabinet-grotesk@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    @include('layouts.navigation.header')
    <main class="min-h-screen">
        {{ $slot }}
    </main>
    @include('layouts.navigation.footer')
</body>

</html>
