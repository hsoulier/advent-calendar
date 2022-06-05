<x-layout>
    <main>
        <section class="h-max p-16 grid place-content-center bg-palette-orange relative text-white">
            <a href="{{ route('home') }}" class="absolute z-50 left-4 top-10 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7" />
                </svg>
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
            {!! $product->description !!}
        </section>

    </main>
</x-layout>
