<x-layout>
    <section style="min-height: 50vh;" class="bg-palette-green py-12 grid place-items-center place-content-center gap-8">
        <h1 class="text-6xl text-center font-bold">Nous contacter</h1>
    </section>

    <!-- Success message  -->
    <section id="info-sucess" class="bg-gray-100" style="padding-top: 4rem;">
        @if(Session::has('success'))

            <div class="max-w-lg mx-auto flex items-center justify-between gap-4 p-4 text-green-700 border rounded border-green-900/10 bg-green-50" role="alert">
                <div class="flex items-center gap-4">
                    <span class="p-2 text-white bg-green-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </span>
                    <p>
                        <strong class="text-sm font-medium"> Envoyé ! </strong>
                        <span class="block text-xs opacity-90">{{Session::get('success')}}</span>
                    </p>
                </div>
                <button class="opacity-90" type="button" id="fermer">
                    <span class="sr-only"> Close </span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
        @endif
    </section>

    <section class="bg-gray-100">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto">
                <form action="{{ route('send-contact') }}" method="POST" class="space-y-4 p-8 mt-6 mb-0 rounded-lg shadow-2xl bg-white">
                    @csrf
                    <div>
                        <label for="name" class="text-sm font-medium">Nom</label>
                        <input type="text" name="name" id="name" value="{{ Auth::user()->name ?? '' }}" class="w-full p-3 text-sm border-gray-200 rounded-lg"/>
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="email" class="text-sm font-medium">E-mail</label>
                            <input type="email" name="email" id="email" value="{{ Auth::user()->email ?? '' }}" class="w-full p-3 text-sm border-gray-200 rounded-lg"/>
                        </div>

                        <div>
                            <label for="tel" class="text-sm font-medium">Téléphone</label>
                            <input type="text" name="tel" id="tel" value="{{ Auth::user()->tel ?? '' }}" class="w-full p-3 text-sm border-gray-200 rounded-lg" />
                        </div>
                    </div>

                    <div>
                        <label for="adress" class="text-sm font-medium">Adresse</label>
                        <input type="text" name="adress" id="adress" value="{{ Auth::user()->address ?? '' }}" class="w-full p-3 text-sm border-gray-200 rounded-lg"/>
                    </div>

                    <div>
                        <label for="message" class="text-sm font-medium">Message</label>
                        <textarea name="message" id="message" class="w-full p-3 text-sm border-gray-200 rounded-lg"></textarea>
                    </div>

                    <div class="mt-4">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button type="submit" class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                            <span class="font-medium"> Envoyer </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>

<script>

    let buttonClose = document.getElementById("fermer");
    let infoSucess = document.getElementById("info-sucess");
    buttonClose.addEventListener("click", () => {
    if(getComputedStyle(infoSucess).display != "none"){
        infoSucess.style.display = "none";
    }
    })

</script>
