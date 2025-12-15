<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    <style>
        body {
            padding-top: 0;
        }
    </style>
    @livewireStyles
</head>

<body class="min-vh-100 bg-white">
    <div class="d-flex align-items-center justify-content-center min-vh-100 bg-light py-5">
        <div class="w-100" style="max-width: 24rem;">
            <a href="{{ route('home') }}" class="d-flex flex-column align-items-center mb-3 text-decoration-none"
                wire:navigate>
                <span class="d-inline-flex align-items-center justify-content-center mb-1 rounded"
                    style="width:36px;height:36px;">
                    <x-app-logo-icon class="size-9 fill-current text-black" />
                </span>
                <span class="visually-hidden">{{ config('app.name', 'Laravel') }}</span>
            </a>

            <div class="card shadow-sm">
                <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    @stack('scripts')
    @livewireScripts
</body>

</html>
