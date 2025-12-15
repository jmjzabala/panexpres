<x-layouts.auth>
    <div>
        <div class="text-center mb-3">
            <h1 class="h4 fw-bold">{{ __('¿Olvidaste tu contraseña?') }}</h1>
            <p class="text-muted mb-0">
                {{ __('Ingresa tu correo para recibir un enlace de restablecimiento de contraseña') }}</p>
        </div>

        @if (session('status'))
            <div class="alert alert-success text-center" role="alert">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-floating mb-3">
                <input id="email" name="email" type="email"
                    class="form-control @error('email') is-invalid @enderror" required autofocus
                    placeholder="tu@ejemplo.com">
                <label for="email">{{ __('Correo electrónico') }}</label>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">{{ __('Enviar enlace de restablecimiento') }}</button>
            </div>
        </form>

        <div class="text-center mt-3 small text-muted">
            <span>{{ __('O regresar a') }}</span>
            <a href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
        </div>
    </div>
</x-layouts.auth>
