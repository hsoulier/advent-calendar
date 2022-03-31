<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://api.fontshare.com/css?f[]=cabinet-grotesk@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased">
    <main>
        <section class="h-max p-16 grid place-content-center bg-palette-orange relative text-white">
            <a href="{{route("home")}}" class="absolute left-4 top-4 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H6M12 5l-7 7 7 7"/></svg>
                <span>Retourner à la page d'accueil</span>
            </a>
            <p class="uppercase text-center tracking-widest text-2xl font-light">les drogues sympas</p>
            <h1 class="text-8xl m-6 mt-3 font-extrabold text-center">
                {{ $product->name }}
            </h1>
            <p class="text-center tracking-widest">
                <span>Origine : </span>
                <span class="italic font-bold">{{ $product->origin }}</span>
            </p>
        </section>
        <section class="product__description my-12 w-5/12 max-w-xl mx-auto">
            {!!$product->description !!}
        </section>

    </main>


</body>

</html>
