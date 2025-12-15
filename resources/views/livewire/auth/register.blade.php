<x-layouts.auth>
    <div>
        <div class="text-center mb-3">
            <h1 class="h4 fw-bold">{{ __('Crear una cuenta') }}</h1>
            <p class="text-muted mb-0">{{ __('Ingresa tus datos para crear tu cuenta') }}</p>
        </div>

        @if (session('status'))
            <div class="alert alert-success text-center" role="alert">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div class="form-floating mb-3">
                <input id="name" name="name" type="text" value="{{ old('name') }}"
                    class="form-control @error('name') is-invalid @enderror" required autofocus autocomplete="name"
                    placeholder="{{ __('Nombre completo') }}">
                <label for="name">{{ __('Nombre') }}</label>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="email" name="email" type="email" value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror" required autocomplete="email"
                    placeholder="tu@ejemplo.com">
                <label for="email">{{ __('Correo electrónico') }}</label>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="password" name="password" type="password"
                    class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password"
                    placeholder="{{ __('Contraseña') }}">
                <label for="password">{{ __('Contraseña') }}</label>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"
                    required autocomplete="new-password" placeholder="{{ __('Confirmar contraseña') }}">
                <label for="password_confirmation">{{ __('Confirmar contraseña') }}</label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">{{ __('Crear cuenta') }}</button>
            </div>
        </form>

        <div class="text-center mt-3 small text-muted">
            <span>{{ __('¿Ya tienes una cuenta?') }}</span>
            <a href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
        </div>
    </div>
</x-layouts.auth>
