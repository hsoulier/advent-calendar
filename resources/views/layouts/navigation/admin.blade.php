<nav class="z-50 flex flex-col justify-between w-16 h-screen bg-white border-r sticky">
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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
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
                    <li>
                        <a data-tab-selector="4"
                            class="flex justify-center px-2 py-1.5 text-gray-500 rounded hover:bg-gray-50 hover:text-gray-700 relative group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-75" viewBox="0 0 24 24"
                                stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="butt"
                                stroke-linejoin="bevel">
                                <path
                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                </path>
                            </svg>

                            <span
                                class="absolute text-xs font-medium text-white bg-gray-900 left-full ml-4 px-2 py-1.5 top-1/2 -translate-y-1/2 rounded opacity-0 group-hover:opacity-100">
                                Comments
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
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-75" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
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
</nav>
