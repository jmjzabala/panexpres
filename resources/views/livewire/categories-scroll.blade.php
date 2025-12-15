<div class="categories-scroll">
    <button wire:click="select(0)"
        class="btn btn-outline-primary rounded-pill category-btn {{ $selectedCategoryId === 0 ? 'active' : '' }}">Todos</button>

    @foreach ($categories as $category)
        <button wire:click="select({{ $category->id }})"
            class="btn btn-outline-primary rounded-pill category-btn {{ $selectedCategoryId === $category->id ? 'active' : '' }}">{{ $category->name }}</button>
    @endforeach
</div>
