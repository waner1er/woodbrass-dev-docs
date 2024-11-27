<div class="container mx-auto px-4 py-16">
    <h1 class="text-2xl font-bold">{{ $doc->name }}</h1>
    <img
        src="{{ asset('storage/' . $doc->image) }}"
        alt="Image de {{ $doc->name }}" />
    <div>
        {!! tiptap_converter()->asHTML($doc->content) !!}

    </div>
    <a href="{{ route('category-docs-list', ['category' => $category]) }}" class="text-blue-500 mt-10 inline-block">Retourner à la catégorie</a>
</div>
