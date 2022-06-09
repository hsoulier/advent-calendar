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
            {{-- <a href="{{ route('single-checkout', [$product->id]) }}" class="button">Acheter le produit</a> --}}
        </section>
        <section class="text-container-nice-reading">
            <h3 class="heading-3">Espace commentaires</h3>
            @if (count($comments) == 0)
                <p class="mt-8 text-center text-gray-400">Ce produit n'a pas de commentaires</p>
            @else
                @foreach ($comments as $comment)
                    <div class="flex justify-between">
                        <div>
                            <div class="text-gray-400 text-sm">
                                <span class="italic">{{ $comment->date }}</span> -
                                <span class="font-bold">{{ $comment->user->name }}</span>
                            </div>
                            <div class="mt-2">{{ $comment->text }}</div>

                        </div>
                        @if (Auth::check() && (Auth::user()->role == 1 || Auth::user()->id == $comment->user_id))
                            <a href="{{ route('delete-comment-product', ['product_id' => $product->id, $comment->id]) }}"
                                class="p-2 text-gray-400 transition-colors duration-200 ease-in hover:text-palette-orange"
                                title="Delete comment"><svg width="20" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="none" class="stroke-current" stroke-width="1.5"
                                    stroke-linecap="butt" stroke-linejoin="bevel">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </a>
                        @endif
                    </div>
                @endforeach
            @endif


            @if (Auth::check())
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
            @endif
        </section>

    </main>
</x-layout>
