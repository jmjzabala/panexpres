<div class="dropdown d-inline-block">
    @guest
        <button class="btn btn-outline-primary position-relative me-2 d-none d-md-inline-block" type="button"
            id="userMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenuButton">
            <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar sesión</a></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">Registrarse</a></li>
        </ul>
    @endguest
    @auth
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown"
            data-bs-toggle="dropdown">
            <div class="me-2 d-none d-md-block">
                <small class="text-muted d-block">Hola,</small>
                <strong style="color: var(--primary-color);">{{ Auth::user()->name }}</strong>
            </div>
            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                style="width: 40px; height: 40px; background-color: var(--accent-color) !important;">
                <i class="bi bi-person-fill text-white"></i>
            </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="perfil.html"><i class="bi bi-person me-2"></i> Mi perfil</a></li>
            <li><a class="dropdown-item" href="pedidos.html"><i class="bi bi-clock-history me-2"></i> Mis pedidos</a>
            </li>
            <li><a class="dropdown-item" href="favoritos.html"><i class="bi bi-heart me-2"></i> Favoritos</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Cerrar sesión</button>
                </form>
            </li>
        </ul>
    @endauth

</div>
