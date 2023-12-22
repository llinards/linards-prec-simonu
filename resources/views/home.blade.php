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
            <livewire:guest-store/>
        </div>
        <x-arrow-down id="agenda" class="text-white"/>
    </x-section>
    <x-section id="agenda" class="bg-main-color-2">
        <div class="mt-auto mb-auto container mx-auto">
            <h2 class="lg:text-4xl sm:text-3xl text-2xl text-center text-white font-bold mb-3 uppercase">Dienas
                plāns</h2>
            <ul class="text-center">
                <li class="text-white text-xl py-2"><strong>15:00</strong> Ceremonija</li>
                <li class="text-white text-xl py-2"><strong>16:00</strong> Fotogrāfēšanās</li>
                <li class="text-white text-xl py-2"><strong>17:00</strong> Ierašanās viesu namā</li>
                <li class="text-white text-xl py-2"><strong>19:00</strong> Vakariņas</li>
                <li class="text-white text-xl py-2"><strong>21:00</strong> Mičošana</li>
                <li class="text-white text-xl py-2"><strong>23:00</strong> Pirmā deja</li>
                <li class="text-white text-xl py-2"><strong>00:00</strong> Kūkas griešana</li>
            </ul>
        </div>
        <x-arrow-down id="location" class="text-white"/>
    </x-section>
    <x-section id="location" class="bg-main-color-3">
        <div class="mt-auto mb-auto container mx-auto">
            <h2 class="lg:text-4xl sm:text-3xl text-2xl text-center text-white font-bold mb-3 uppercase">Svinību
                vieta</h2>
            <p class="text-white text-center text-xl">Brīvdienu Māja "Kamēlijas"</p>
            <p class="text-white text-center">"Lejassliseri", Mālpils, Siguldas novads</p>
            <div class="flex flex-col max-w-lg mx-auto sm:px-0 px-5 mt-3">
                <iframe style="border-radius:0.5rem;width:100%;height:300px" loading="lazy" allowfullscreen
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyYPR7IlB6UYRslm9TMAsEPg&key={{ env('GOOGLE_MAPS_API_KEY') }}"></iframe>
                <x-primary-button
                    type="link"
                    href="https://www.waze.com/en/live-map/directions/brivdienu-maja-kamelijas-malpils?place=w.16384570.163649091.24553547"
                    class="bg-white text-black mt-3">
                    <div class="flex justify-center">
                        <img class="w-5 mr-2" src="{{asset('/icons/waze-icon.svg')}}"/>
                        <div>
                            Waze
                        </div>
                    </div>
                </x-primary-button>
            </div>
        </div>
        <x-arrow-down id="location" class="text-white"/>
    </x-section>
</x-app-layout>
