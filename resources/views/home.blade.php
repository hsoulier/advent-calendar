<x-layout>
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
            {{-- <button class="reset-calendar-state font-bold py-2 px-4 rounded">Reset</button> --}}
            <div class="flex flex-wrap gap-4">
                @each('components.product.card', $products, 'product')
            </div>
        @else
            <h2 class="text-5xl text-center mb-8">🤫 Ce n'est pas encore <br />l'heure du calendrier</h2>
            <p class="text-center text-xl">Revenez plus tard pour en voir plus.</p>
        @endif

    </section>
    <circle-text size="8rem" extra letter-spacing="2px">vive la drogue • Vive la drogue • Vive la drogue •</circle-text>
</x-layout>
