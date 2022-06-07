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
        </section>

        <section class="product__description text-container-nice-reading">
            <img src=" {{ $product->thumbnail }}" alt="{{ $product->name }}">
            <article class="mt-12">
                {!! $product->description !!}
            </article>
        </section>
        <section class="text-container-nice-reading">
            <h3 class="heading-3">Espace commentaires</h3>
            @if (count($comments) == 0)
                <p class="mt-8 text-center text-gray-400">Ce produit n'a pas de commentaires</p>
            @else
                @foreach ($comments as $comment)
                    {{ $comment->date }}
                    {{ $comment->text }}
                @endforeach
            @endif


            <form action="{{ route('send-comment') }}" method="POST" class="w-full py-8 mt-24 mb-0 border-t">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div>
                    <label for="comment" class="text-sm font-medium">Ecrire un commentaire</label>
                    <textarea name="comment" id="comment" class="w-full p-3 text-sm border-gray-200 rounded-lg"></textarea>
                </div>

                <button type="submit" class="button inline-flex items-center mt-4">
                    <span class="font-medium"> Envoyer </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </form>
        </section>

    </main>
</x-layout>
