<nav class="fixed z-50 w-full">
    <div class="mt-8 mx-auto w-5/6 flex justify-between">
        <a href="{{ route('home') }}" title="The boring Students"><svg width="40" height="40" viewBox="0 0 70 70"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="35" cy="35" r="35" fill="white" />
                <circle cx="35" cy="35" r="15" fill="#CBBAED" />
            </svg>
        </a>
        <ul class="inline-flex items-center gap-4 font-medium">
            {{-- <li>Shop</li> --}}
            <li><a href="{{ route('about') }}">A propos</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li>
                <a class="py-2 px-4 rounded bg-palette-orange text-white font-semibold"
                    href="{{ route(Route::currentRouteName() === 'profile' ? 'logout' : (Auth::user() ? 'register' : 'login')) }}">{{ Request()->route()->uri === 'profile' ? 'Logout' : (Auth::user() ? 'Profil' : 'Connexion') }}</a>
            </li>
        </ul>
    </div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</nav>
