<div class="grow w-1/5 min-w-48 grid gap-2 place-items-center cursor-pointer">
    <a href="{{ route('product', ['id' => $product->id]) }}"
        class="group w-full h-32 flex items-center justify-center bg-cover bg-center text-center bg-opacity-0 bg-gray-300 transition-all hover:bg-opacity-80 text-white"
        style="background-image: url({{ $product->thumbnail }});"
        title="{{ $product->name }}">
        <span
            class="opacity-0 transition-opacity text-xl font-bold group-hover:opacity-100">{{ $product->name }}</span>
    </a>
    <span class="font-xl font-extrabold">{{ $product->order }}</span>
</div>