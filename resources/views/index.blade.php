<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Tu mercado de pan artesanal</title>
    <!-- Bootstrap 5 CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        :root {
            --primary-color: #8B4513;
            --light-color: #FFF8DC;
            --dark-color: #5C4033;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            margin: 0;
            padding-top: 56px;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
        }
    </style>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <!-- Header con menú hamburguesa -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <!-- Botón para abrir sidebar -->
            <button class="btn btn-outline-primary me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                style="border-color: var(--primary-color); color: var(--primary-color);">
                <i class="bi bi-list"></i>
            </button>

            <a class="navbar-brand" href="#">
                <i class="bi bi-basket me-2"></i> {{ config('app.name') }}
            </a>

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
                <a href="#" class="btn btn-outline-dark position-relative me-2 d-none d-md-inline-block"
                    style="border-color: var(--primary-color); color: var(--primary-color);">
                    <i class="bi bi-person"></i>
                </a>

                <a href="#" class="btn btn-outline-dark position-relative" data-bs-toggle="modal"
                    data-bs-target="#cartModal"
                    style="border-color: var(--primary-color); color: var(--primary-color);">
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
                <h5 class="offcanvas-title mb-1">
                    <i class="bi bi-basket me-2"></i>{{ config('app.name') }}
                </h5>
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

        <!-- Hero section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="hero-section">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h1 class="display-6 fw-bold">Pan fresco cada día</h1>
                            <p class="lead">Descubre las mejores panaderías artesanales de tu ciudad. Pan recién
                                horneado directamente a tu mesa.</p>
                            <button class="btn btn-lg text-white mt-2" style="background-color: var(--accent-color);">
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
                <div class="categories-scroll">
                    <button class="category-btn active">Todos</button>
                    <button class="category-btn">Recién horneado</button>
                    <button class="category-btn">Tradicional</button>
                    <button class="category-btn">Integral</button>
                    <button class="category-btn">Sin gluten</button>
                    <button class="category-btn">Bollería</button>
                    <button class="category-btn">Ofertas</button>
                </div>
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
                            <button class="btn btn-panaderia mb-2">
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
                                style="width: 50px; height: 50px; background-color: var(--accent-color) !important;">
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
                                style="width: 50px; height: 50px; background-color: var(--accent-color) !important;">
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
                                style="width: 50px; height: 50px; background-color: var(--accent-color) !important;">
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
    </main>

    <!-- Footer -->
    <footer class="footer mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">
                        <i class="bi bi-basket me-2"></i>{{ config('app.name') }}
                    </h5>
                    <p class="text-white-50">Conectamos panaderías artesanales con amantes del buen pan. Frescura,
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
                        <button class="btn text-white" type="button"
                            style="background-color: var(--accent-color);">Suscribirse</button>
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
                        <i class="bi bi-basket me-2"></i>Mi Canasto
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
                    <button type="button" class="btn text-white" style="background-color: var(--primary-color);">Ir
                        a pagar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS con Popper -->
    @vite('resources/js/app.js')

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
</body>

</html>
