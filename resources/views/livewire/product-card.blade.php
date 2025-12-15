{{-- Care about people's approval and you will be their prisoner. --}}
<div class="card product-card h-100">
    <div class="position-relative">
        @if ($product->categories && $product->categories->isNotEmpty())
            <span class="artesanal-badge">{{ $product->categories->first()->name }}</span>
        @endif
        <img src="{{ $product->image ?? 'https://placehold.co/500x400?text=product' }}" class="card-img-top product-img"
            alt="{{ $product->name }}">
        @if (isset($product->discount))
            <span class="product-discount position-absolute top-0 end-0 m-2">-{{ $product->discount }}%</span>
        @endif
    </div>
    <div class="card-body d-flex flex-column">
        <div class="d-flex justify-content-between align-items-start mb-2">
            <h5 class="card-title mb-0">{{ $product->name }}</h5>
            <span class="badge badge-pan">{{ $product->bakery->name ?? '' }}</span>
        </div>
        <p class="card-text text-muted small">{{ Str::limit($product->description, 120) }}</p>
        <div class="mt-auto">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="product-price">${{ number_format($product->price, 2) }}</span>
                @if (isset($product->old_price))
                    <span class="product-old-price">${{ number_format($product->old_price, 2) }}</span>
                @endif
            </div>
            <button wire:click="addToCart" class="btn btn-primary btn-add-to-cart w-100">
                <i class="bi bi-basket me-2"></i> Agregar a la cesta
            </button>
        </div>
    </div>
</div>
