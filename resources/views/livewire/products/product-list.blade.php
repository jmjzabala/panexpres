<div id="product-list" class="product-list" tabindex="-1">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <small class="text-muted">Mostrando {{ $products->firstItem() ?: 0 }} - {{ $products->lastItem() ?: 0 }} de
                {{ $products->total() }}</small>
        </div>
        <div>
            <select wire:model.live="perPage" class="form-select form-select-sm">
                <option value="6">6 por página</option>
                <option value="12">12 por página</option>
                <option value="24">24 por página</option>
            </select>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($products as $product)
            <div class="col">
                @livewire('product-card', ['product' => $product], key('product-' . $product->id))
            </div>
        @endforeach
    </div>

    <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
            <nav aria-label="Paginación de productos">
                <ul class="pagination">
                    <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="#" tabindex="-1"
                            wire:click.prevent="gotoPage({{ max(1, $products->currentPage() - 1) }})">Anterior</a>
                    </li>

                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                        <li class="page-item {{ $products->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="#"
                                wire:click.prevent="gotoPage({{ $i }})">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item {{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="#"
                            wire:click.prevent="gotoPage({{ min($products->lastPage(), $products->currentPage() + 1) }})">Siguiente</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        (function() {
            // Focus the product list container and scroll it 200px from top when triggered
            window.addEventListener('focus-product-list', function() {
                try {
                    const el = document.getElementById('product-list');
                    if (!el) return;

                    // focus without scrolling (we will control scroll)
                    el.focus({
                        preventScroll: true
                    });

                    // compute target so element's top sits 100px below viewport top
                    const rect = el.getBoundingClientRect();
                    const target = Math.max(0, window.scrollY + rect.top - 200);

                    window.scrollTo({
                        top: target,
                        behavior: 'smooth'
                    });

                    // add visual indicator briefly
                    el.classList.add('product-list-focused');
                    setTimeout(() => el.classList.remove('product-list-focused'), 1200);
                } catch (e) {
                    // silent
                }
            });
        })();
    </script>
@endpush
