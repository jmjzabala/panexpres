<div>
    <h6 class="text-uppercase text-white-50 mb-2 mt-4">Categorías</h6>
    <div class="sidebar-category">
        <a href="#" wire:click.prevent="select(0)"
            onclick="window.dispatchEvent(new CustomEvent('focus-product-list'))"
            class="sidebar-link {{ $selectedCategoryId === 0 ? 'active' : '' }}">Todos</a>

        @foreach ($categories as $category)
            <a href="#" wire:click.prevent="select({{ $category->id }})"
                onclick="window.dispatchEvent(new CustomEvent('focus-product-list'))"
                class="sidebar-link {{ $selectedCategoryId === $category->id ? 'active' : '' }}">
                <i class="bi bi-tag me-2"></i> {{ $category->name }}
            </a>
        @endforeach
    </div>
</div>
