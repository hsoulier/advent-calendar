<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="/favicon.png" />

    <!-- Fonts -->
    <link href="https://api.fontshare.com/css?f[]=cabinet-grotesk@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <main class="dashboard flex h-screen">
        <div class="flex flex-col justify-between w-16 h-screen bg-white border-r sticky">
            <div>
                <a href="{{ route('home') }}"
                    class="justify-self-center inline-flex items-center justify-center w-16 h-16 rounded-md">
                    <div class="grid place-content-center bg-palette-green w-12 h-10 rounded-lg">
                        <x-application-logo class="w-8 fill-current text-palette-orange" />
                    </div>
                </a>

                <div class="border-t border-gray-100">
                    <nav class="flex flex-col p-2">
                        <div class="py-4">
                            <a data-tab-selector="1"
                                class="flex justify-center px-2 py-1.5 rounded text-blue-700 bg-blue-50 group relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-75" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>  
                                <span
                                    class="absolute text-xs font-medium text-white bg-gray-900 left-full ml-4 px-2 py-1.5 top-1/2 -translate-y-1/2 rounded opacity-0 group-hover:opacity-100">
                                    Products
                                </span>
                            </a>
                        </div>

                        <ul class="pt-4 space-y-1 border-t border-gray-100">
                            <li>
                                <a data-tab-selector="2"
                                    class="flex justify-center px-2 py-1.5 text-gray-500 rounded hover:bg-gray-50 hover:text-gray-700 relative group">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>

                                    <span
                                        class="absolute text-xs font-medium text-white bg-gray-900 left-full ml-4 px-2 py-1.5 top-1/2 -translate-y-1/2 rounded opacity-0 group-hover:opacity-100">
                                        Users
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a data-tab-selector="3"
                                    class="flex justify-center px-2 py-1.5 text-gray-500 rounded hover:bg-gray-50 hover:text-gray-700 relative group">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>

                                    <span
                                        class="absolute text-xs font-medium text-white bg-gray-900 left-full ml-4 px-2 py-1.5 top-1/2 -translate-y-1/2 rounded opacity-0 group-hover:opacity-100">
                                        Contact
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="sticky inset-x-0 bottom-0 p-2 bg-white border-t border-gray-100">
                <form action="{{ route('logout') }}">
                    <button type="submit"
                        class="flex justify-center w-full px-2 py-1.5 text-sm text-gray-500 rounded-lg hover:bg-gray-50 hover:text-gray-700 group relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-75" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>

                        <span
                            class="absolute text-xs font-medium text-white bg-gray-900 left-full ml-4 px-2 py-1.5 top-1/2 -translate-y-1/2 rounded opacity-0 group-hover:opacity-100">
                            Logout
                        </span>
                    </button>
                </form>
            </div>
        </div>
        <div class="py-12 flex-grow overflow-y-scroll">
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
                                    <p
                                        style="width:250px;text-overflow:ellipsis; white-space: nowrap; overflow:hidden;">
                                        {{ $product->date }} - {{ $product->name }}</p>
                                    <p
                                        style="width:250px; text-overflow:ellipsis; white-space: nowrap; overflow:hidden;">
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
                                <div style="background: rgb(230, 230, 230);border-radius: 0.25rem;"
                                    class="px-5 py-2">
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
                                    <a href="{{ route('delete-contact-message', $contact->id) }}"
                                        class="button"
                                        style="display:inline-block;background: rgb(177, 7, 7);margin-top:16px">
                                        Supprimer le message
                                    </a>
                                </div>
                            @endforeach
                        </section>
                    </div>
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
    </main>
</body>

</html>
