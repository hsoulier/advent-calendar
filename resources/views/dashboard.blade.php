<x-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1> Admin page</h1>
                </div>

                <div class="m-6 p-6 shadow-sm">
                    <h2 style="margin-bottom:40px;font-size:50px;font-weight:700">
                        Gestion des utilisateurs
                    </h2>
                    <section style="display: flex;flex-direction:column;gap:24px;">
                        @foreach ($users as $user)
                            <div style="display:flex;gap:12px;align-items:center">
                                <p>{{ $user->name }}</p> -
                                <p>Email : {{ $user->email }}</p> -
                                <p>Téléphone : {{ $user->tel }}</p>
                                @if ($user->role === 1)
                                    <p>Rôle :
                                        <span style="color:rgb(209, 20, 20)">Admin</span>
                                    </p>
                                @else
                                    <p>Rôle :
                                        <span style="color:green">Utilisateur</span>
                                    </p>
                                    <a href="{{ route('delete-account', $user->id) }}"
                                        class="py-2 px-4 rounded bg-palette-lavender text-white font-semibold">
                                        Supprimer
                                    </a>
                                @endif
                            </div>
                        @endforeach
                    </section>
                </div>

                <div class="m-6 p-6 shadow-sm">
                    <h2 style="margin-bottom:40px;font-size:50px;font-weight:700">
                        Gestion des produits
                    </h2>
                    <section style="display: flex;flex-direction:column;gap:8px;">
                        @foreach ($products as $product)
                            <div class="py-2 px-4 text-white font-semibold"
                                style="display:flex; align-items:center;gap:40px; background:rgb(139, 139, 139)">
                                <p style="width:250px;text-overflow:ellipsis; white-space: nowrap; overflow:hidden;">
                                    {{ $product->date }} - {{ $product->name }}</p>
                                <p style="width:250px; text-overflow:ellipsis; white-space: nowrap; overflow:hidden;">
                                    {{ $product->description }}</p>
                                <p style="white-space: nowrap;"> {{ $product->price }} €</p>
                                <a href="{{ route('edit-product', ['id' => $product->id]) }}"
                                    class="py-2 px-4 rounded bg-palette-lavender text-white"
                                    style="margin-left: auto">Modifier</a>
                            </div>
                        @endforeach
                    </section>
                </div>

                <div class="m-6 p-6 shadow-sm">
                    <h2 style="margin-bottom:40px;font-size:50px;font-weight:700">
                        Gestion des demandes de contact
                    </h2>
                    <section style="display: flex;flex-direction:column;gap:8px;">
                        @foreach ($contacts as $contact)
                            <div style="background: rgb(230, 230, 230);border-radius: 0.25rem;" class="px-5 py-2">
                                <p style="font-size:20px">
                                    Message de
                                    <span style="font-size: 1.3em;font-weight:bold">{{ $contact->name }}</span>
                                </p>

                                <p style="margin-left: 16px;background:grey;color:white;padding:16px">
                                    {{ $contact->message }}
                                </p>

                                <div style="display: flex; gap:8px;align-items:flex-end;margin-top:20px">
                                    <p>Répondre par :</p>
                                    <a href="mailto:{{ $contact->email }}" class="button">Mail</a>
                                    <a href="tel:{{ $contact->tel }}" class="button">Téléphone</a>
                                </div>
                                <a href="{{ route('delete-contact-message', $contact->id) }}" class="button"
                                    style="display:inline-block;background: rgb(177, 7, 7);margin-top:16px">
                                    Supprimer le message
                                </a>
                            </div>
                        @endforeach
                    </section>
                </div>


                <div class="m-6 p-6 shadow-sm">
                    <h2 style="margin-bottom:40px;font-size:50px;font-weight:700">
                        Gestion des commentaires
                    </h2>
                    <section style="display: flex;flex-direction:column;gap:8px;">
                        @foreach ($comments as $comment)
                            <div style="background: rgb(230, 230, 230);border-radius: 0.25rem;" class="px-5 py-2">
                                <p style="font-size:20px">
                                    Commentaire de
                                    <span style="font-size: 1.3em;font-weight:bold">{{ $comment->user->name }}</span>
                                </p>

                                <p style="margin-left: 16px;background:grey;color:white;padding:16px">
                                    {{ $comment->text }}
                                </p>

                                <a href="{{ route('delete-comment', $comment->id) }}" class="button"
                                    style="display:inline-block;background: rgb(177, 7, 7);margin-top:16px">
                                    Supprimer le commentaire
                                </a>
                            </div>
                        @endforeach
                    </section>
                </div>

            </div>
        </div>
    </div>
</x-layout>
