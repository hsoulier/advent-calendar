@if ($product->id <= $dayToShow)
    <div class="grow w-1/5 min-w-48 grid gap-2 place-items-center">
        <a href="{{ route('product', ['id' => $product->id]) }}"
            class="group w-full h-32 flex items-center justify-center bg-cover bg-center text-center bg-opacity-0 bg-gray-300 transition-all hover:bg-opacity-80 text-white cursor-pointer rounded"
            style="background-image: url({{ $product->thumbnail }}); box-shadow: 0px 0px 10px rgba(0,0,0,0.2);" title="{{ $product->name }}">
            <span
                class="opacity-0 transition-opacity text-xl font-bold group-hover:opacity-100">{{ $product->name }}</span>
        </a>
        <span class="font-xl font-extrabold">{{ $product->id }}</span>
    </div>
@else
    <div class="grow w-1/5 min-w-48 grid gap-2 place-items-center" style="filter:blur(6px);">
        <div class="group w-full h-32 flex items-center justify-center bg-cover bg-center text-center bg-opacity-0 bg-gray-300 transition-all hover:bg-opacity-80 text-white rounded"
            style="background-image: url({{ $product->thumbnail }});">
        </div>
        <span class="font-xl font-extrabold">{{ $product->id }}</span>
    </div>
@endif
