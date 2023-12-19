<x-app-layout>
    <section
        class="flex flex-col h-[100dvh] justify-center items-center bg-cover bg-center snap-start snap-always"
        id="introduction"
        style="background-image: url('{{ asset('/storage/intro-background.jpg')}}')">
        <div class="flex flex-col justify-center items-center h-full">
            <h1 class="lg:text-9xl md:text-6xl sm:text-5xl text-4xl font-bold text-white">Simona &
                Linards</h1>
        </div>
        <div class="mt-auto text-white">
            <a href="#">
                <x-arrow-down/>
            </a>
        </div>
    </section>
    <section
        class="flex flex-col h-[100dvh] justify-center items-center bg-cover bg-center snap-start snap-always bg-red-700"
        id="second">
        <div class="flex flex-col justify-center items-center h-full">
            <h1 class="lg:text-9xl md:text-6xl sm:text-5xl text-4xl font-bold text-white">Simona &
                Linards</h1>
        </div>
        <div class="mt-auto text-white">
            <a href="#">
                <x-arrow-down/>
            </a>
        </div>
    </section>
    <section
        class="flex flex-col h-[100dvh] justify-center items-center bg-cover bg-center snap-start snap-always bg-blue-700"
        id="second">
        <div class="flex flex-col justify-center items-center h-full">
            <h1 class="lg:text-9xl md:text-6xl sm:text-5xl text-4xl font-bold text-white">Simona &
                Linards</h1>
        </div>
        <div class="mt-auto text-white rotate-180">
            <a href="#">
                <x-arrow-down/>
            </a>
        </div>
    </section>
</x-app-layout>
