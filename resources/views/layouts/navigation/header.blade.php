<nav class="fixed z-50 w-full">
    <div class="mt-8 mx-auto w-5/6 flex justify-between">
        <a href="{{ route('home') }}">Logo</a>
        <ul class="inline-flex items-center gap-4 font-medium">
            {{-- <li>Shop</li> --}}
            <li>A propos</li>
            <li>Contact</li>
            <li>
                <a class="py-2 px-4 rounded bg-palette-orange text-white font-semibold"
                    href="{{ route(Auth::user() ? 'register' : 'login') }}">{{Auth::user() ? 'Profil' : 'Connexion'}}</a>
            </li>
        </ul>
    </div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</nav>
