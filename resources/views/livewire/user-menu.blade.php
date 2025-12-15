<div class="dropdown d-inline-block">
    <button class="btn btn-outline-primary position-relative me-2 d-none d-md-inline-block" type="button"
        id="userMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenuButton">
        @guest
            <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar sesión</a></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">Registrarse</a></li>
        @endguest
        @auth
            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Mi cuenta</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Cerrar sesión</button>
                </form>
            </li>
        @endauth
    </ul>
</div>
