<x-layout>
    <section style="min-height: 50vh;" class="bg-palette-green py-12 grid place-items-center place-content-center gap-8">
        <h1 class="text-6xl text-center font-bold">Nous contacter</h1>
    </section>

    {{-- <section>
        <!-- Success message -->
        <!-- @if (Session::has('success'))
<div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
@endif -->


    </section> --}}

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
                            <input type="email" name="email" id="email" value="{{ Auth::user()->email ?? '' }}" class="w-full p-3 text-sm border-gray-200 rounded-lg"/>
                        </div>

                        <div>
                            <label for="tel" class="text-sm font-medium">Phone number</label>
                            <input type="text" name="tel" id="tel" value="{{ Auth::user()->tel ?? '' }}" class="w-full p-3 text-sm border-gray-200 rounded-lg" />
                        </div>
                    </div>

                    <div>
                        <label for="adress" class="text-sm font-medium">Address</label>
                        <input type="text" name="adress" id="adress" value="{{ Auth::user()->address ?? '' }}" class="w-full p-3 text-sm border-gray-200 rounded-lg"/>
                    </div>

                    <div>
                        <label for="message" class="text-sm font-medium">Message</label>
                        <textarea name="message" id="message" class="w-full p-3 text-sm border-gray-200 rounded-lg"></textarea>
                    </div>

                    <div class="mt-4">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button type="submit" class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
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
</x-layout>
