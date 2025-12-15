<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    @livewireStyles
</head>

<body>
    <!-- Header con menú hamburguesa -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <!-- Botón para abrir sidebar -->
            <button class="btn btn-outline-primary me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebar">
                <i class="bi bi-list"></i>
            </button>

            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/panexpres_logo.png') }}" alt="{{ config('app.name') }}" height="34"
                    class="me-2">
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vende desde acá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aliados</a>
                    </li>
                </ul>
            </div>

            <!-- Barra de búsqueda -->
            <div class="d-none d-md-flex flex-grow-1 mx-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar pan, panaderías...">
                    <button class="btn btn-primary" type="button"
                        style="background-color: var(--primary-color); border-color: var(--primary-color);">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>

            <!-- Iconos de usuario y carrito -->
            <div class="d-flex">
                <livewire:user-menu />

                <a href="#" class="btn btn-outline-primary position-relative" data-bs-toggle="modal"
                    data-bs-target="#cartModal">
                    <i class="bi bi-basket"></i>
                    <span class="cart-badge badge bg-danger rounded-pill">3</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Sidebar / Menú offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
        <div class="offcanvas-header sidebar-header">
            <div>
                <img src="{{ asset('images/panexpres_logo_blanco.png') }}" alt="{{ config('app.name') }}" height="34"
                    class="me-2">
                <p class="text-white-50 small mb-0">Tu mercado de pan artesanal</p>
            </div>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body p-0">
            <!-- Perfil de usuario -->
            <div class="p-3 border-bottom border-secondary">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px; background-color: var(--primary-color) !important;">
                            <i class="bi bi-person-fill text-white fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-0">Panadero/a</h6>
                        <small class="text-white-50">Nivel: Premium</small>
                    </div>
                </div>
            </div>

            <!-- Navegación principal -->
            <div class="p-3">
                <h6 class="text-uppercase text-white-50 mb-2">Navegación</h6>
                <div class="sidebar-category">
                    <a href="#" class="sidebar-link active">
                        <i class="bi bi-house-door me-2"></i> Inicio
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-star me-2"></i> Panaderías destacadas
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-clock-history me-2"></i> Pedidos recientes
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-heart me-2"></i> Favoritos
                    </a>
                </div>

                <h6 class="text-uppercase text-white-50 mb-2 mt-4">Categorías de pan</h6>
                <div class="sidebar-category">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-bread-slice me-2"></i> Pan tradicional
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-flower1 me-2"></i> Pan integral
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-tree me-2"></i> Pan sin gluten
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-star-fill me-2"></i> Panes especiales
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-cake me-2"></i> Bollería
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-cup-straw me-2"></i> Para acompañar
                    </a>
                </div>

                <h6 class="text-uppercase text-white-50 mb-2 mt-4">Mi Panadería</h6>
                <div class="sidebar-category">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-shop me-2"></i> Mi tienda
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-box-seam me-2"></i> Mis productos
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-graph-up me-2"></i> Estadísticas
                    </a>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-gear me-2"></i> Configuración
                    </a>
                </div>
            </div>

            <!-- Información adicional -->
            <div class="p-3 border-top border-secondary">
                <small class="text-white-50">
                    &copy; 2023 {{ config('app.name') }}. Hecho con ❤️ y harina.
                </small>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <main class="container-fluid mt-3">
        <!-- Barra de búsqueda móvil -->
        <div class="row d-md-none mb-3">
            <div class="col-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar pan, panaderías...">
                    <button class="btn btn-primary" type="button"
                        style="background-color: var(--primary-color); border-color: var(--primary-color);">
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
                    <small class="text-white-50">&copy; 2023 {{ config('app.name') }}. Hecho con ❤️ y harina.</small>
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
                    <p class="text-center">Tu canasto tiene 3 productos</p>
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
