<x-layout>
    <header style="min-height: 50vh;" class="bg-palette-green py-12 grid place-items-center place-content-center gap-8">
        <h1 class="text-5xl font-semibold">
            <span class="text-gray-500">Bienvenue,</span><br />
            <span class="capitalize">{{ Auth::user()->name }}</span>
        </h1>
        @if (Auth::user()->role == 1)
            <a class="py-2 px-4 rounded bg-palette-lavender text-black font-semibold"
                href="{{ route('dashboard') }}">Accéder au Dashboard</a>
        @endif

    </header>

    <main class="mx-auto pt-8 px-8 lg:container">
        <section>
            <h2 class="text-lg font-bold mb-2">Calendriers achetés</h2>
            @if (count($user->subscriptions))
                @foreach ($user->subscriptions as $item)
                    <article class="flex justify-between items-center">
                        <h3 class="font-semibold">{{ $item->calendar->name }}</h3>
                        <div class="inline-flex items-center gap-4">
                            <span
                                class="bg-green-100 text-green-700 px-3 py-1.5 rounded text-xs font-medium">{{ $item->stripe_status }}</span>
                            <span class="text-gray-400 text-sm">{{ $item->created_at }}</span>
                        </div>
                    </article>
                @endforeach
            @else
                <div>Vous n'avez pas souscrit à un calendrier</div>
            @endif

        </section>
        <section class="mt-12">
            <h2 class="text-lg font-bold mb-2">Produits individuels</h2>
            @if (count($user->purchases))
                @foreach ($user->purchases as $purchase)
                    <div>{{ $purchase->product_id }}</div>
                @endforeach
            @else
                <div class="text-center mt-2 text-gray-400">Pas de produits acheté encore 🥹</div>
            @endif
        </section>

        <section class="mt-24">
            <h3 class="text-palette-orange heading-3">Danger Zone</h3>
        </section>
    </main>
</x-layout>
