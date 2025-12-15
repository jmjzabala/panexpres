<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    @livewireStyles
</head>

<body>
    <!-- Header con menú hamburguesa -->
    <x-layouts.public.navbar />

    <!-- Sidebar / Menú offcanvas -->
    <x-layouts.public.sidebar />

    <!-- Contenido principal -->
    <main class="container-fluid mt-3">
        <!-- Barra de búsqueda móvil -->
        <div class="row d-md-none mb-3">
            <div class="col-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar pan, panaderías...">
                    <button class="btn btn-primary" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>

        {{ $slot }}
    </main>


    <!-- Footer -->
    <footer class="footer mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">
                        <img src="{{ asset('images/panexpres_logo_blanco.png') }}" alt="{{ config('app.name') }}"
                            height="34" class="me-2 align-middle">
                    </h5>
                    <p class="text-white-50">Conectamos panaderías con amantes del buen pan. Frescura,
                        calidad y tradición en cada pedido.</p>
                    <div class="d-flex">
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <h5 class="fw-bold">Para Comprar</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Buscar panaderías</a></li>
                        <li><a href="#" class="footer-link">Categorías</a></li>
                        <li><a href="#" class="footer-link">Ofertas</a></li>
                        <li><a href="#" class="footer-link">Pan del día</a></li>
                    </ul>
                </div>

                <div class="col-md-2 mb-3">
                    <h5 class="fw-bold">Para Vender</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Abrir panadería</a></li>
                        <li><a href="#" class="footer-link">Recursos</a></li>
                        <li><a href="#" class="footer-link">Comisiones</a></li>
                        <li><a href="#" class="footer-link">Soporte vendedores</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Suscríbete al boletín</h5>
                    <p class="text-white-50">Recetas, descuentos y novedades del mundo del pan.</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="tu@email.com">
                        <button class="btn btn-primary" type="button">Suscribirse</button>
                    </div>
                </div>
            </div>

            <div class="row pt-3 border-top border-secondary">
                <div class="col-md-6 text-center text-md-start">
                    <small class="text-white-50">&copy; 2025 {{ config('app.name') }}. Hecho con ❤️ y harina.</small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small class="text-white-50">
                        <a href="#" class="footer-link me-3">Política de privacidad</a>
                        <a href="#" class="footer-link">Términos y condiciones</a>
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal del carrito (simulado) -->
    <div class="modal fade" id="cartModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--primary-color); color: white;">
                    <h5 class="modal-title">
                        <i class="bi bi-basket me-2"></i>Mi Cesta
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Tu cesta tiene 3 productos</p>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pan de masa madre
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Baguette artesanal
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Croissants de mantequilla
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-between mt-3">
                        <span>Total:</span>
                        <span class="fw-bold">$21.95</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Seguir
                        comprando</button>
                    <button type="button" class="btn btn-primary">Ir
                        a pagar</button>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
    @stack('scripts')
    @livewireScripts
</body>

</html>
