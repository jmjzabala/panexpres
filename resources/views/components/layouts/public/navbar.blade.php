<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
        <!-- Botón para abrir sidebar -->
        <button class="btn btn-outline-primary me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
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
            <a href="#" class="btn btn-outline-primary position-relative me-2" data-bs-toggle="modal"
                data-bs-target="#cartModal">
                <i class="bi bi-basket"></i>
                <span class="cart-badge badge bg-danger rounded-pill">3</span>
            </a>
            <livewire:navbar.user-menu />
        </div>
    </div>
</nav>
