<x-app-layout>
    <section
        class="introduction w-screen flex flex-col justify-center items-center bg-cover bg-center relative"
        style="background-image: url('{{ asset('/storage/intro-background.jpg')}}')">
        <div class="flex flex-col justify-center items-center h-full">
            <h1 class="lg:text-9xl md:text-6xl sm:text-5xl text-4xl font-bold text-white backdrop-blur-sm">Simona &
                Linards</h1>
        </div>
        <div class="mt-auto text-white">
            <a href="">
                <x-arrow-down/>
            </a>
        </div>
    </section>
</x-app-layout>
