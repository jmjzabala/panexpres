<div>
    <!-- Hero section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="hero-section">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1 class="display-6 fw-bold">Pan fresco cada día</h1>
                        <p class="lead">Descubre las mejores panaderías artesanales de tu ciudad. Pan recién
                            horneado directamente a tu mesa.</p>
                        <button class="btn btn-lg btn-secondary text-white mt-2">
                            <i class="bi bi-geo-alt me-2"></i> Encuentra panaderías cerca
                        </button>
                    </div>
                    <div class="col-md-5 text-center d-none d-md-block">
                        <i class="bi bi-bootstrap-reboot float-animation"
                            style="font-size: 8rem; color: var(--accent-color);"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="row mb-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-pan">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none"
                            style="color: var(--secondary-color);">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none"
                            style="color: var(--secondary-color);">Panaderías</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Todos los productos</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Filtros móviles -->
    <div class="row mb-4">
        <div class="col-12">
            <livewire:categories-filter />
        </div>
    </div>

    <!-- Panadería destacada -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="panaderia-card p-3">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center mb-3 mb-md-0">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                            class="panaderia-logo" alt="Panadería El Horno">
                    </div>
                    <div class="col-md-7">
                        <h5 class="fw-bold mb-1">Panadería "El Horno"</h5>
                        <div class="rating mb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <span class="text-muted ms-2">(4.5) • Abierto hasta las 20:00</span>
                        </div>
                        <p class="mb-0 text-muted">Especialistas en pan tradicional de masa madre. Horneamos desde
                            1952 con recetas familiares.</p>
                    </div>
                    <div class="col-md-3 text-center text-md-end">
                        <button class="btn btn-success btn-panaderia mb-2">
                            <i class="bi bi-shop me-2"></i> Ver tienda
                        </button>
                        <div class="text-success small">
                            <i class="bi bi-clock-history me-1"></i> Entrega en 30 min
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Título de sección -->
    <div class="row mb-3">
        <div class="col-12">
            <h4 class="fw-bold" style="color: var(--primary-color);">
                <i class="bi bi-fire me-2"></i>Pan recién horneado
            </h4>
            <p class="text-muted">Los productos más frescos de hoy</p>
        </div>
    </div>

    <!-- Grid de productos -->
    <div>
        <livewire:product-list />
    </div>

    <!-- Sección de panaderías -->
    <div class="row mt-5 mb-3">
        <div class="col-12">
            <h4 class="fw-bold" style="color: var(--primary-color);">
                <i class="bi bi-shop me-2"></i>Panaderías cerca de ti
            </h4>
            <p class="text-muted">Descubre las mejores panaderías artesanales de tu zona</p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-shop text-white fs-4"></i>
                        </div>
                        <div>
                            <h5 class="card-title mb-0">La Hogaza de Oro</h5>
                            <small class="text-muted">0.8 km • Abierta</small>
                        </div>
                    </div>
                    <p class="card-text">Especialistas en panes rústicos y de pueblo. Masa madre natural y horneado
                        en leña.</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark"><i class="bi bi-star-fill text-warning me-1"></i>
                            4.7</span>
                        <span class="badge bg-light text-dark"><i class="bi bi-clock me-1"></i> 25 min</span>
                        <span class="badge bg-light text-dark"><i class="bi bi-bicycle me-1"></i> Envío</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-shop text-white fs-4"></i>
                        </div>
                        <div>
                            <h5 class="card-title mb-0">Pan Integral 100%</h5>
                            <small class="text-muted">1.2 km • Abierta</small>
                        </div>
                    </div>
                    <p class="card-text">Panadería ecológica especializada en panes integrales, sin aditivos y con
                        ingredientes orgánicos.</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark"><i class="bi bi-star-fill text-warning me-1"></i>
                            4.9</span>
                        <span class="badge bg-light text-dark"><i class="bi bi-clock me-1"></i> 35 min</span>
                        <span class="badge bg-light text-dark"><i class="bi bi-bicycle me-1"></i> Envío</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-shop text-white fs-4"></i>
                        </div>
                        <div>
                            <h5 class="card-title mb-0">Bollería Francesa</h5>
                            <small class="text-muted">2.1 km • Abierta</small>
                        </div>
                    </div>
                    <p class="card-text">Auténtica bollería francesa: croissants, pain au chocolat, éclairs y más
                        delicias parisinas.</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-light text-dark"><i class="bi bi-star-fill text-warning me-1"></i>
                            4.8</span>
                        <span class="badge bg-light text-dark"><i class="bi bi-clock me-1"></i> 40 min</span>
                        <span class="badge bg-light text-dark"><i class="bi bi-bicycle me-1"></i> Envío</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Funcionalidad básica para la página
        document.addEventListener('DOMContentLoaded', function() {
            // Agregar productos al carrito
            const addToCartButtons = document.querySelectorAll('.btn-add-to-cart');
            const cartBadge = document.querySelector('.cart-badge');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Actualizar contador del carrito
                    let currentCount = parseInt(cartBadge.textContent);
                    cartBadge.textContent = currentCount + 1;

                    // Feedback visual
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="bi bi-check-circle me-2"></i> Agregado';
                    this.style.backgroundColor = '#28a745';

                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.style.backgroundColor = '';
                    }, 1500);
                });
            });

            // Sidebar - marcar enlace activo
            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (!this.classList.contains('active')) {
                        sidebarLinks.forEach(l => l.classList.remove('active'));
                        this.classList.add('active');

                        // Cerrar sidebar en móviles después de seleccionar
                        if (window.innerWidth < 992) {
                            const sidebar = document.getElementById('sidebar');
                            const bsOffcanvas = bootstrap.Offcanvas.getInstance(sidebar);
                            bsOffcanvas.hide();
                        }
                    }
                });
            });

            // Cambiar icono de hero en móviles
            if (window.innerWidth < 768) {
                const heroIcon = document.querySelector('.float-animation');
                if (heroIcon) {
                    heroIcon.classList.remove('bi-bootstrap-reboot');
                    heroIcon.classList.add('bi-bread-slice');
                }
            }
        });
    </script>
</div>
