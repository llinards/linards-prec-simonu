<x-app-layout>
    <x-section id="introduction" class="justify-between">
        <div class="lg:pt-10 pt-20">
            <h2 class="lg:text-4xl sm:text-3xl text-2xl text-center">Mēs precamies!</h2>
            <h1 class="lg:text-6xl sm:text-5xl text-4xl text-center font-bold">Linards & Simona</h1>
            <h3 class="lg:text-3xl sm:text-2xl text-xl text-center">30.12.2025.</h3>
        </div>
        <x-arrow-down id="rsvp" class="animate-bounce"/>
    </x-section>
    <x-section id="rsvp" class="bg-main-color-1 justify-between justify-items-center">
        <div class="mt-auto mb-auto container mx-auto">
            <h2 class="lg:text-4xl sm:text-3xl text-2xl text-white text-center">RSVP</h2>
            <p id="guest-submission-deadline" class="text-white text-center">Lūdzam apstiprināt ierašanos līdz <span
                    class="font-bold">30.10.2025.</span></p>
            <livewire:guest-store/>
        </div>
        <x-arrow-down id="introduction" class="text-white"/>
    </x-section>
</x-app-layout>
