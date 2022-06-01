<x-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1> Admin page</h1>
                </div>

                <div class="m-6">
                    <h2 style="margin-bottom:40px;font-size:50px;font-weight:700">Gestion des utilisateurs</h2>
                    <section style="display: flex;flex-direction:column;gap:24px;">
                        @foreach ($users as $user)
                            <div style="display:flex;gap:12px;align-items:center">
                                <p>{{ $user->name }}</p> -
                                <p>Email : {{ $user->email }}</p> -
                                <p>Téléphone : {{ $user->tel }}</p>
                                <p>Rôle :
                                    @if ($user->role === 1)
                                        <span style="color:rgb(209, 20, 20)">Admin</span>
                                    @else
                                        <span style="color:green">Utilisateur</span>
                                    @endif
                                </p>
                                <a href="{{ route('deleteAccount', $user->id) }}"
                                    class="py-2 px-4 rounded bg-palette-lavender text-white font-semibold">
                                    Supprimer
                                </a>
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-layout>
