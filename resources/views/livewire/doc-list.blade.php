<div class="container mx-auto px-4 py-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-center justify-center">
    @foreach($docs as $doc)
        <div
            class="card bg-base-100 w-96 shadow-xl h-96 pb-12 px-5 hover:bg-gray-100 hover:cursor-pointer"
            wire:click="redirectToDoc('{{ $doc->slug }}')"
        >
            <div class="card-body">
                <h2 class="card-title">{{ $doc->name }}</h2>
                <p>{{ __($doc->description) }}</p>
            </div>
            <figure>
                <img
                    src="{{ asset('storage/' . $doc->image) }}"
                    alt="Image de {{ $doc->name }}" />
            </figure>
        </div>
    @endforeach
</div>
