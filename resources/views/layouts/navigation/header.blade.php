<nav class="fixed z-50 w-full">
    <div class="mt-8 mx-auto w-5/6 flex justify-between">
        <a href="{{ route('home') }}" title="The boring Students">
            <x-application-logo class="w-10 fill-current text-palette-green" />
        </a>
        <ul class="inline-flex items-center gap-4 font-medium">
            {{-- <li>Shop</li> --}}
            <li><a href="{{ route('about') }}">A propos</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li>
                <a class="button"
                    href="{{ route(Route::currentRouteName() === 'profile' ? 'logout' : (Auth::user() ? 'register' : 'login')) }}">{{ Request()->route()->uri === 'profile' ? 'Logout' : (Auth::user() ? 'Profil' : 'Connexion') }}</a>
            </li>
        </ul>
    </div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</nav>
