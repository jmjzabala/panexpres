<x-layouts.auth>
    <div>
        <div class="text-center mb-3">
            <h1 class="h4 fw-bold">{{ __('Confirmar contraseña') }}</h1>
            <p class="text-muted mb-0">
                {{ __('Esta es un área segura de la aplicación. Por favor confirma tu contraseña antes de continuar.') }}
            </p>
        </div>

        @if (session('status'))
            <div class="alert alert-success text-center" role="alert">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.confirm.store') }}">
            @csrf

            <div class="form-floating mb-3">
                <input id="password" name="password" type="password"
                    class="form-control @error('password') is-invalid @enderror" required
                    autocomplete="current-password" placeholder="{{ __('Contraseña') }}">
                <label for="password">{{ __('Contraseña') }}</label>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
            </div>
        </form>
    </div>
</x-layouts.auth>
