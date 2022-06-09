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
        @include('layouts.navigation.admin')
        <div class="py-12 flex-grow overflow-y-scroll h-screen relative">
            <x-admin-tab title="Gestion des utilisateurs" :headers="['nom', 'adresse email', 'status', 'téléphone', 'action']" tab="1">
                @foreach ($users as $user)
                    <tr>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $user->name }}
                        </td>
                        <td class="p-4 text-gray-700 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="p-4 text-gray-700 whitespace-nowrap">
                            <strong
                                class="{{ $user->role === 1 ? 'bg-amber-100 text-amber-700 px-3 py-1.5 rounded text-xs font-medium' : 'bg-green-100 text-green-700 px-3 py-1.5 rounded text-xs font-medium' }}">
                                {{ $user->role === 1 ? 'Admin' : 'Client' }}
                            </strong>

                        </td>
                        <td class="p-4 text-gray-700 whitespace-nowrap">{{ $user->tel }}</td>
                        <td class="p-4 text-gray-700 whitespace-nowrap">
                            @if ($user->role === 0)
                                <a href="{{ route('delete-account', $user->id) }}"
                                    class="py-2 px-4 rounded bg-palette-lavender text-white font-semibold">
                                    Supprimer
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </x-admin-tab>
            <x-admin-tab title="Gestion des produits" :headers="['date', 'nom', 'description', 'prix', 'action']" tab="2">
                @foreach ($products as $product)
                    <tr>
                        <td class="p-4 text-gray-700 whitespace-nowrap">
                            {{ $product->date }}
                        </td>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $product->name }}
                        </td>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            <p class=""
                                style="width:250px; text-overflow:ellipsis; white-space: nowrap; overflow:hidden;">
                                {{ $product->description }}</p>
                        </td>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $product->price }}€
                        </td>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            <a href="{{ route('edit-product', ['id' => $product->id]) }}"
                                class="py-2 px-4 rounded bg-palette-lavender text-white ml-auto">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </x-admin-tab>
            <x-admin-tab title="Gestion des contact" :headers="['nom', 'message', 'action']" tab="3">
                @foreach ($contacts as $contact)
                    <tr>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $contact->name }}
                        </td>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $contact->message }}
                        </td>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            <div class="flex items-center gap-2">
                                <a href="mailto:{{ $contact->email }}"
                                    class="p-1 text-palette-orange rounded border-2 border-palette-orange"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="butt"
                                        stroke-linejoin="bevel">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg></a>
                                <a href="tel:{{ $contact->tel }}"
                                    class="p-1 text-palette-orange rounded border-2 border-palette-orange"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="butt"
                                        stroke-linejoin="bevel">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg></a>
                                <a href="{{ route('delete-contact-message', $contact->id) }}"
                                    class="p-1 text-palette-orange rounded border-2 border-palette-orange">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="butt"
                                        stroke-linejoin="bevel">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-admin-tab>
            <x-admin-tab title="Gestion des commentaires" :headers="['date', 'nom', 'message', 'action']" tab="4">
                @foreach ($comments as $comment)
                    <tr>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $comment->date }}
                        </td>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $comment->user->name }}
                        </td>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $comment->text }}
                        </td>
                        <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                            <a href="{{ route('delete-comment', $comment->id) }}" class="button inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="butt"
                                    stroke-linejoin="bevel">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </x-admin-tab>
        </div>
    </main>
</body>

</html>
