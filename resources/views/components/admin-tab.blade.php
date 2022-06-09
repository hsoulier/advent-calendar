<section data-tab="{{ $tab }}" class="z-40 tab active">
    <h1 class="text-4xl mb-12 font-bold">{{ $title }}</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm divide-y divide-gray-200 table-auto">
            <thead>
                <tr>
                    @foreach ($headers as $header)
                        <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                            <div class="flex capitalize items-center">
                                {{ $header }}
                            </div>
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                {{ $slot }}
            </tbody>
        </table>
    </div>

</section>
