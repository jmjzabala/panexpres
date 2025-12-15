<div class="categories-scroll">
    <button wire:click="select(0)" <button wire:click="$emitUp('categorySelected', 0)"
        class="btn btn-outline-primary rounded-pill category-btn {{ $selectedCategoryId === 0 ? 'active' : '' }}">Todos</button>

    @foreach ($categories as $category)
        <button wire:click="$emitUp('categorySelected', {{ $category->id }})"
            class="btn btn-outline-primary rounded-pill category-btn {{ $selectedCategoryId === $category->id ? 'active' : '' }}">{{ $category->name }}</button>
    @endforeach
</div>
