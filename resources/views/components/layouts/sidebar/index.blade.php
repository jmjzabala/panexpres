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

            <livewire:category-nav />

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
                &copy; 2025 {{ config('app.name') }}. Hecho con ❤️ y harina.
            </small>
        </div>
    </div>
</div>
