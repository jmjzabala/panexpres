<x-layouts.auth>
    <div class="mt-4">
        <p class="text-center">
            {{ __('Por favor verifica tu dirección de correo electrónico haciendo clic en el enlace que te acabamos de enviar.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="text-center fw-medium text-success">
                {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionaste durante el registro.') }}
            </div>
        @endif

        <div class="d-flex flex-column align-items-center gap-2 mt-3">
            <form method="POST" action="{{ route('verification.send') }}" class="w-100 mb-2">
                @csrf
                <button type="submit" class="btn btn-primary w-100">{{ __('Reenviar correo de verificación') }}</button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="w-100">
                @csrf
                <button type="submit" class="btn btn-link text-muted w-100">{{ __('Cerrar sesión') }}</button>
            </form>
        </div>
    </div>
</x-layouts.auth>
