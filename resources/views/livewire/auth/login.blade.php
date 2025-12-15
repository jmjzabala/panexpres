<x-layouts.auth>
    <div>
        <!-- Header -->
        <div class="text-center mb-3">
            <h1 class="h4 fw-bold">{{ __('Inicia sesión en tu cuenta') }}</h1>
            <p class="text-muted mb-0">{{ __('Ingresa tu correo y contraseña para iniciar sesión') }}</p>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success text-center" role="alert">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-floating mb-3">
                <input id="email" name="email" type="email" value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror" required autofocus autocomplete="email"
                    placeholder="tu@ejemplo.com">
                <label for="email">{{ __('Correo electrónico') }}</label>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3 position-relative">
                <div class="form-floating">
                    <input id="password" name="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" required
                        autocomplete="current-password" placeholder="{{ __('Contraseña') }}">
                    <label for="password">{{ __('Contraseña') }}</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                @if (Route::has('password.request'))
                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                        <a href="{{ route('password.request') }}"
                            class="small">{{ __('¿Olvidaste tu contraseña?') }}</a>
                    </div>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">{{ __('Recuérdame') }}</label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">{{ __('Iniciar sesión') }}</button>
            </div>
        </form>

        @if (Route::has('register'))
            <div class="text-center mt-3 small text-muted">
                <span>{{ __('¿No tienes una cuenta?') }}</span>
                <a href="{{ route('register') }}">{{ __('Regístrate') }}</a>
            </div>
        @endif
    </div>
</x-layouts.auth>
