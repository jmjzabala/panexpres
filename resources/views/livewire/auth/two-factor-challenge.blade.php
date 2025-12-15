<x-layouts.auth>
    <div x-cloak x-data="{
        showRecoveryInput: @js($errors->has('recovery_code')),
        code: '',
        recovery_code: '',
        toggleInput() {
            this.showRecoveryInput = !this.showRecoveryInput;
    
            this.code = '';
            this.recovery_code = '';
    
            $dispatch('clear-2fa-auth-code');
    
            $nextTick(() => {
                this.showRecoveryInput ?
                    this.$refs.recovery_code?.focus() :
                    $dispatch('focus-2fa-auth-code');
            });
        },
    }">
        <div x-show="!showRecoveryInput" class="text-center mb-3">
            <h1 class="h4 fw-bold">{{ __('Código de autenticación') }}</h1>
            <p class="text-muted mb-0">{{ __('Ingresa el código proporcionado por tu aplicación de autenticación.') }}
            </p>
        </div>

        <div x-show="showRecoveryInput" class="text-center mb-3">
            <h1 class="h4 fw-bold">{{ __('Código de recuperación') }}</h1>
            <p class="text-muted mb-0">
                {{ __('Por favor confirma el acceso a tu cuenta ingresando uno de tus códigos de emergencia.') }}</p>
        </div>

        <form method="POST" action="{{ route('two-factor.login.store') }}">
            @csrf

            <div class="text-center">
                <div x-show="!showRecoveryInput">
                    <div class="my-4 d-flex justify-content-center">
                        <div class="form-floating" style="width:220px;">
                            <input x-model="code" name="code" type="text" inputmode="numeric" maxlength="6"
                                class="form-control text-center" placeholder="{{ __('Código de 6 dígitos') }}" />
                            <label>{{ __('Código de 6 dígitos') }}</label>
                        </div>
                    </div>
                </div>

                <div x-show="showRecoveryInput">
                    <div class="my-4">
                        <div class="form-floating">
                            <input type="text" name="recovery_code" x-ref="recovery_code"
                                x-bind:required="showRecoveryInput" autocomplete="one-time-code" x-model="recovery_code"
                                class="form-control" placeholder="{{ __('Código de recuperación') }}" />
                            <label for="recovery_code">{{ __('Código de recuperación') }}</label>
                        </div>
                    </div>

                    @error('recovery_code')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary">{{ __('Continuar') }}</button>
                </div>

                <div class="mt-4 text-sm text-center">
                    <span class="text-muted">{{ __('o puedes') }}</span>
                    <div class="d-inline ms-2">
                        <a href="#" @click.prevent="toggleInput()" class="fw-medium text-decoration-underline">
                            <span
                                x-show="!showRecoveryInput">{{ __('iniciar sesión usando un código de recuperación') }}</span>
                            <span
                                x-show="showRecoveryInput">{{ __('iniciar sesión usando un código de autenticación') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layouts.auth>
