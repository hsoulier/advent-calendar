<x-layout>
    <section style="min-height: 50vh;" class="bg-palette-green py-12 grid place-items-center place-content-center gap-8">
        <h1 class="text-5xl font-semibold">
            <span class="text-gray-500">Bienvenue,</span><br />
            <span class="capitalize">{{ Auth::user()->name }}</span>
        </h1>
        @if (Auth::user()->role == 1)
            <a class="py-2 px-4 rounded bg-palette-lavender text-black font-semibold"
                href="{{ route('dashboard') }}">Accéder au Dashboard</a>
        @endif
    </section>
    @if (count($user->subscriptions))
        <section> 
            <div>Vous avez un acheté un abonnement</div>
        </section>
    @endif

    @if (count($user->purchases))
        <section>
            @foreach ($user->purchases as $purchase)
                <div>{{ $purchase->product_id }}</div>
            @endforeach
        </section>
    @endif
</x-layout>
