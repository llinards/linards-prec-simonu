<section
    {{ $attributes->merge(['class' => 'flex flex-col h-[100dvh] bg-cover bg-center overflow-y-hidden snap-start snap-always']) }}
    id="{{ $id }}">
    {{ $slot }}
</section>
