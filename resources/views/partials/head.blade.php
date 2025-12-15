{{-- <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance --}}

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<style>
    :root {
        --primary-color: #873E07;
        --light-color: #FFF8DC;
        --dark-color: #5C4033;
    }

    body {
        font-family: 'Segoe UI', system-ui, sans-serif;
        background-color: var(--light-color);
        color: var(--dark-color);
        margin: 0;
        padding-top: 56px;
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
    }
</style>
@vite(['resources/sass/app.scss'])
