<x-app-layout>
    <section
        class="introduction w-screen h-screen flex flex-col justify-center items-center bg-cover bg-center relative"
        style="background-image: url('{{ asset('storage/intro-background.jpg')}}')">
        <div class="flex flex-col justify-center items-center h-full">
            <h1 class="lg:text-9xl md:text-6xl text-4xl font-bold text-white backdrop-blur-sm">Simona & Linards</h1>
        </div>
        <div class="mt-auto text-white">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" data-slot="icon" class="w-24 h-24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/>
                </svg>
            </a>
        </div>
    </section>
</x-app-layout>
