<x-layout>
    <section style="min-height: 50vh;" class="bg-palette-green py-12 grid place-items-center place-content-center gap-8">
        <h1 class="text-6xl text-center font-bold">Nous contacter</h1>
    </section>

    <section>
        <!-- Success message -->
        <!-- @if (Session::has('success'))
<div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
@endif -->




        <form action="{{ route('send-contact') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom</label>
                <input type="text" name="name" id="name" value="{{ Auth::user()->name ?? '' }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Téléphone</label>
                <input type="text" name="tel" id="tel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Adresse</label>
                <input type="text" name="adress" id="adress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Message</label>
                <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
            </div>



            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit"
                class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Envoyer</button>
        </form>


    </section>

    <section class="bg-gray-100">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto">
                <form action="{{ route('send-contact') }}" method="POST" class="space-y-4 p-8 mt-6 mb-0 rounded-lg shadow-2xl bg-white">
                    @csrf
                    <div>
                        <label for="name" class="text-sm font-medium">Name</label>
                        <input type="text" name="name" id="name" value="{{ Auth::user()->name ?? '' }}" class="w-full p-3 text-sm border-gray-200 rounded-lg"/>
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="email" class="text-sm font-medium">Email</label>
                            <input class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="Email" type="email" id="email" />
                        </div>

                        <div>
                            <label for="email" class="text-sm font-medium">Phone number</label>
                            <input class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="Phone number"
                                type="tel" id="phone" />
                        </div>
                    </div>

                    <div>
                        <label for="email" class="text-sm font-medium">Address</label>
                        <input class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="Address" type="text"
                            id="name" />
                    </div>

                    <div>
                        <label for="email" class="text-sm font-medium">Message</label>
                        <textarea class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="Message" rows="8" id="message"></textarea>
                    </div>

                    <div class="mt-4">
                        <button type="submit"
                            class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                            <span class="font-medium"> Send </span>
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

    <!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->




</x-layout>
