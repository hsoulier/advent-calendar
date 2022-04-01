<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>☃️ Calendrier de l'Avent</title>

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
        <section class="min-h-screen grid place-content-center bg-palette-lavender relative">
            <h1 class="text-8xl m-6 font-bold text-center">
                {{-- TODO: Dynamic Render of calendar name --}}
                Le Calendrier<br />de l'Avant <span class="underline italic">de la drogue</span>
            </h1>

            <button class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex flex-col items-center"
                id="scroll-to-next-screen">
                <span class="uppercase">Scroll</span>
                <div class="mt-2 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 5v13M5 12l7 7 7-7" />
                    </svg>
                </div>
            </button>
        </section>



        <section
            class="min-h-screen py-8 px-4 grid {{ count($products) === 0 ? 'place-content-center' : '' }} place-content-center">
            @if (count($products) > 0)
                <h2 class="text-5xl text-center mb-8">Qu'avons-nous là ?</h2>
                <div class="flex flex-wrap gap-4">
                    @foreach ($products as $product)
                        <div class="grow w-1/5 min-w-48 grid gap-2 place-items-center cursor-pointer">
                            <a href="{{ route('product', ['id' => $product->id]) }}"
                                class="group w-full h-32 flex items-center justify-center bg-cover bg-center text-center bg-opacity-0 bg-gray-300 transition-all hover:bg-opacity-80 text-white"
                                style="background-image: url({{ $product->thumbnail }});"
                                title="{{ $product->name }}">
                                <span
                                    class="opacity-0 transition-opacity text-xl font-bold group-hover:opacity-100">{{ $product->name }}</span>
                            </a>
                            <span class="font-xl font-extrabold">{{ $product->order }}</span>
                        </div>
                    @endforeach
                </div>
            @else
                <h2 class="text-5xl text-center mb-8">🤫 Ce n'est pas encore <br />l'heure du calendrier</h2>
                <p class="text-center text-xl">Revenez plus tard pour en voir plus.</p>
            @endif

        </section>
    </main>
    <circle-text size="8rem" extra letter-spacing="2px">vive la drogue • Vive la drogue • Vive la drogue •</circle-text>
</body>

</html>
