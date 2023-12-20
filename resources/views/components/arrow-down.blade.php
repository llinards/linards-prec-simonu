@props(['id'])

<div {{ $attributes->merge(['class' => 'flex justify-center']) }}>
    <a href="#{{ $id }}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             data-slot="icon" class="lg:w-24 lg:h-24 w-16 h-16">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
        </svg>
    </a>
</div>
