<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="post" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="'Nom'" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="'Email'" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="'Mot de passe'" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="'Confirmer le mot de passe'" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            {{-- Phone --}}
            <div class="mt-4">
                <x-label for="phone" :value="'Téléphone'" />
                <x-input id="phone" class="block mt-1 w-full" type="tel" name="tel" required maxlength="10" />
            </div>

            {{-- Address --}}
            <div class="mt-4">
                <x-label for="address" :value="'Adresse'" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" required />
            </div>



            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ 'Déjà inscrit ?' }}
                </a>

                <x-classic-button class="ml-4">
                    {{ 'S\'inscrire' }}
                </x-classic-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
