<x-layout>
    <section style="padding: 100px 50px 0">
        <a href="{{ route('dashboard') }}" class="py-2 px-4 rounded bg-palette-orange text-white font-semibold">
            Retour
        </a>
        <h1 style="margin-bottom:40px;font-size:50px;font-weight:700">{{ $product->name }}</h1>

        <form style="display: flex;flex-direction:column;gap:24px;"
            action="{{ route('update-product', ['id' => $product->id]) }}" method="get">
            <input type="text" name="name" value="{{ $product->name }}" placeholder="Nom">
            <textarea name="description" id="" rows="8" placeholder="Description">{{ $product->description }}</textarea>
            <input type="text" name="price" value="{{ $product->price }}" placeholder="Prix">
            <input type="text" name="date" value="{{ $product->date }}" placeholder="Date (YYYY-MM-DD)">
            <input type="text" name="thumbnail" value="{{ $product->thumbnail }}" placeholder="Image">
            <img src="{{ $product->thumbnail }}" alt="" style="width:35%">

            <button class="py-2 px-4 rounded bg-palette-orange text-white font-semibold">Valider</button>
        </form>
    </section>
</x-layout>
