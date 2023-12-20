<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.header')
<body class="font-sans antialiased">
<div class="bg-gray-100">
    @if (isset($admin))
        @include('layouts.navigation')
    @endif

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="h-dvh overflow-y-scroll snap-mandatory snap-y scroll-smooth">
        {{ $slot }}
    </main>
</div>
</body>
</html>
