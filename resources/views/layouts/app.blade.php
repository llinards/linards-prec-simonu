<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.header')
<body class="font-sans antialiased">
<main class="h-dvh overflow-y-scroll snap-mandatory snap-y scroll-smooth">
    {{ $slot }}
</main>
</body>
</html>
