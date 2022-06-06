<x-layout>
    <main>
        <section class="h-max p-16 grid place-content-center bg-palette-orange relative text-white">
            <a href="{{ route('home') }}" class="absolute left-4 top-4 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7" />
                </svg>
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
            {!! $product->description !!}
        </section>

    </main>



    <h3>Commentaires</h3>
    @foreach ($comments as $comment)
        {{ $comment->date }}
        {{ $comment->text }}
    @endforeach


    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto">
            <form action="{{ route('send-comment') }}" method="POST" class="space-y-4 p-8 mt-6 mb-0 rounded-lg shadow-2xl bg-white">
                @csrf

                <input type="hidden" name="product_id" value="{{ $product->id}}">

                <div>
                    <label for="comment" class="text-sm font-medium">Commentaire</label>
                    <textarea name="comment" id="comment" class="w-full p-3 text-sm border-gray-200 rounded-lg"></textarea>
                </div>

                <div class="mt-4">
                    <button type="submit" class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                        <span class="font-medium"> Envoyer </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-layout>
