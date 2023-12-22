<button
    {{ $attributes->merge(['class' => 'hover:bg-gray-300 focus:ring-1 focus:outline-none focus:ring-black font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center']) }}>
    {{ $slot }}
</button>
