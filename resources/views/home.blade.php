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
        <section class="min-h-screen grid place-content-center bg-palette-lavender relative">
            <h1 class="text-8xl m-6 font-bold text-center">
                Le Calendrier<br />de l'Avant <span class="underline italic">de la drogue</span>
            </h1>


            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex flex-col items-center">
                <span class="uppercase">Scroll</span>
                <div class="animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 5v13M5 12l7 7 7-7" />
                    </svg>
                </div>
            </div>
        </section>
        <section class="min-h-screen py-8 grid place-content-center">
            <h2 class="text-5xl text-center mb-8">🤫 Ce n'est pas encore <br />l'heure du calendrier</h2>
            <p class="text-center text-xl">Revenez plus tard pour en voir plus.</p>
        </section>
    </main>


</body>

</html>
