<x-layout>
    <main class="h-screen grid place-items-center">
        <section class="flex flex-col items-center gap-2">
            @if ($type === 'success')
                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 24 24" fill="none"
                    class="stroke-palette-orange" stroke-width="1.5" stroke-linecap="butt" stroke-linejoin="bevel">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <h1 class="text-4xl font-bold">Success</h1>
                <p class="text-gray-400 mt-4">your payment was successful !</p>
                <div class="flex gap-2 mt-4">
                    <a class="button" href="{{ route('home') }}">Go home</a>
                    <a class="button outline-btn" href="{{ route('profile') }}">Go to profile</a>
                </div>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 24 24" fill="none"
                    class="stroke-palette-orange" stroke-width="1.5" stroke-linecap="butt" stroke-linejoin="bevel">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <h1 class="text-4xl font-bold">Cancel</h1>
                <p class="text-gray-400 mt-4">You've canceled your checkout. Do want to retry ?</p>
                <div class="flex gap-2 mt-4">
                    <a class="button" href="{{ route('checkout', [$price_id]) }}">Retry checkout</a>
                    <a class="button outline-btn" href="{{ route('profile') }}">Go to profile</a>
                </div>
            @endif
        </section>
    </main>
</x-layout>
