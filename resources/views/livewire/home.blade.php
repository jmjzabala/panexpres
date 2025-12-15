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
            <livewire:categories-scroll />
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Producto 1 -->
        <div class="col">
            <div class="card product-card h-100">
                <div class="position-relative">
                    <span class="artesanal-badge">Artesanal</span>
                    <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                        class="card-img-top product-img" alt="Pan de masa madre">
                    <span class="product-discount position-absolute top-0 end-0 m-2">-10%</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Pan de masa madre</h5>
                        <span class="badge badge-pan">El Horno</span>
                    </div>
                    <p class="card-text text-muted small">Pan artesano fermentado naturalmente durante 24h. Corteza
                        crujiente y miga alveolada.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="product-price">$4.50</span>
                            <span class="product-old-price">$5.00</span>
                        </div>
                        <button class="btn btn-add-to-cart w-100">
                            <i class="bi bi-basket me-2"></i> Agregar al canasto
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col">
            <div class="card product-card h-100">
                <div class="position-relative">
                    <span class="artesanal-badge">Artesanal</span>
                    <img src="https://images.unsplash.com/photo-1549931319-a545dcf3bc73?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                        class="card-img-top product-img" alt="Pan integral">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Pan integral multicereal</h5>
                        <span class="badge badge-pan">Panadería Salud</span>
                    </div>
                    <p class="card-text text-muted small">Elaborado con harina integral, semillas de lino, chía y
                        girasol. Rico en fibra.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="product-price">$5.25</span>
                        </div>
                        <button class="btn btn-add-to-cart w-100">
                            <i class="bi bi-basket me-2"></i> Agregar al canasto
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col">
            <div class="card product-card h-100">
                <div class="position-relative">
                    <span class="artesanal-badge">Sin gluten</span>
                    <img src="https://images.unsplash.com/photo-1598373182186-7d7c6a43d5ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                        class="card-img-top product-img" alt="Pan sin gluten">
                    <span class="product-discount position-absolute top-0 end-0 m-2">-15%</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Pan sin gluten</h5>
                        <span class="badge badge-pan">Sin Gluten Shop</span>
                    </div>
                    <p class="card-text text-muted small">Elaborado con harina de arroz y maíz. Ideal para
                        celíacos. Textura esponjosa.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="product-price">$6.50</span>
                            <span class="product-old-price">$7.65</span>
                        </div>
                        <button class="btn btn-add-to-cart w-100">
                            <i class="bi bi-basket me-2"></i> Agregar al canasto
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="col">
            <div class="card product-card h-100">
                <div class="position-relative">
                    <span class="artesanal-badge">Tradicional</span>
                    <img src="https://images.unsplash.com/photo-1568254183919-78a4f43a2877?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                        class="card-img-top product-img" alt="Baguette">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Baguette artesanal</h5>
                        <span class="badge badge-pan">Pan Francés</span>
                    </div>
                    <p class="card-text text-muted small">Auténtica baguette francesa. Corteza dorada y crujiente,
                        miga alveolada y suave.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="product-price">$3.75</span>
                        </div>
                        <button class="btn btn-add-to-cart w-100">
                            <i class="bi bi-basket me-2"></i> Agregar al canasto
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 5 -->
        <div class="col">
            <div class="card product-card h-100">
                <div class="position-relative">
                    <span class="artesanal-badge">Bollería</span>
                    <img src="https://images.unsplash.com/photo-1555507036-ab794f27d2e9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                        class="card-img-top product-img" alt="Croissants">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Croissants de mantequilla</h5>
                        <span class="badge badge-pan">Delicias Dulces</span>
                    </div>
                    <p class="card-text text-muted small">Crujientes y hojaldrados. Elaborados con mantequilla 100%
                        natural. Pack de 4 unidades.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="product-price">$8.99</span>
                        </div>
                        <button class="btn btn-add-to-cart w-100">
                            <i class="bi bi-basket me-2"></i> Agregar al canasto
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 6 -->
        <div class="col">
            <div class="card product-card h-100">
                <div class="position-relative">
                    <span class="artesanal-badge">Especial</span>
                    <img src="https://images.unsplash.com/photo-1587241321921-91a834d6d191?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                        class="card-img-top product-img" alt="Pan de aceitunas">
                    <span class="product-discount position-absolute top-0 end-0 m-2">-5%</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Pan de aceitunas y romero</h5>
                        <span class="badge badge-pan">El Horno</span>
                    </div>
                    <p class="card-text text-muted small">Pan artesano con aceitunas negras y romero fresco. Aroma
                        mediterráneo inconfundible.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="product-price">$6.20</span>
                            <span class="product-old-price">$6.50</span>
                        </div>
                        <button class="btn btn-add-to-cart w-100">
                            <i class="bi bi-basket me-2"></i> Agregar al canasto
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 7 -->
        <div class="col">
            <div class="card product-card h-100">
                <div class="position-relative">
                    <span class="artesanal-badge">Integral</span>
                    <img src="https://images.unsplash.com/photo-1619538187923-ba0e22e7b1f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                        class="card-img-top product-img" alt="Pan de centeno">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Pan de centeno</h5>
                        <span class="badge badge-pan">Panadería Salud</span>
                    </div>
                    <p class="card-text text-muted small">Elaborado con 70% harina de centeno. Sabor intenso y
                        ligeramente ácido. Rico en fibra.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="product-price">$5.80</span>
                        </div>
                        <button class="btn btn-add-to-cart w-100">
                            <i class="bi bi-basket me-2"></i> Agregar al canasto
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 8 -->
        <div class="col">
            <div class="card product-card h-100">
                <div class="position-relative">
                    <span class="artesanal-badge">Dulce</span>
                    <img src="https://images.unsplash.com/photo-1623334044303-241021148842?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                        class="card-img-top product-img" alt="Pan de pasas y nueces">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Pan de pasas y nueces</h5>
                        <span class="badge badge-pan">Delicias Dulces</span>
                    </div>
                    <p class="card-text text-muted small">Pan dulce con pasas de uva y trozos de nuez. Perfecto
                        para el desayuno o merienda.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="product-price">$7.25</span>
                        </div>
                        <button class="btn btn-add-to-cart w-100">
                            <i class="bi bi-basket me-2"></i> Agregar al canasto
                        </button>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- Paginación -->
    <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
            <nav aria-label="Paginación de productos">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <script>
        // Funcionalidad básica para la página
        document.addEventListener('DOMContentLoaded', function() {
            // Activar categorías al hacer clic
            const categoryButtons = document.querySelectorAll('.category-btn');
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });

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
