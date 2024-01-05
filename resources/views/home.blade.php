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
        <x-arrow-down id="introduction" class="text-white rotate-180"/>
        <div class="my-auto container mx-auto">
            <livewire:guest-store/>
        </div>
        <x-arrow-down id="agenda" class="text-white"/>
    </x-section>
    <x-section id="agenda" class="bg-main-color-2">
        <x-arrow-down id="rsvp" class="text-white rotate-180"/>
        <div class="my-auto container mx-auto">
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
        <x-arrow-down id="agenda" class="text-white rotate-180"/>
        <div class="my-auto container max-w-lg mx-auto sm:px-0 px-5">
            <h2 class="lg:text-4xl sm:text-3xl text-2xl text-center text-white font-bold mb-3 uppercase">Svinību
                vieta</h2>
            <p class="text-white text-center text-xl">Brīvdienu Māja "Kamēlijas"</p>
            <p class="text-white text-center">"Lejassliseri", Mālpils, Siguldas novads</p>
            <div class="flex flex-col mt-3">
                <iframe style="border-radius:0.5rem;width:100%;height:300px" loading="lazy" allowfullscreen
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyYPR7IlB6UYRslm9TMAsEPg&key={{ config('googlemaps.google_maps_api_key') }}"></iframe>
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
        <x-arrow-down id="dress-code" class="text-white"/>
    </x-section>
    <x-section id="dress-code" class="bg-white">
        <x-arrow-down id="location" class="text-black rotate-180"/>
        <div class="my-auto container mx-auto sm:px-0 px-5">
            <h2 class="lg:text-4xl sm:text-3xl text-2xl text-center text-black font-bold mb-3 uppercase">Dress Code</h2>
            <div class="flex flex-wrap justify-center">
                <div class="md:w-1/2">
                    <h3 class="lg:text-3xl sm:text-2xl text-xl text-center">Krāsu palete</h3>
                    <div class="flex justify-center gap-2 my-3">
                        <div class="color-idea-1 w-10 md:h-80 h-20"></div>
                        <div class="color-idea-2 w-10 md:h-80 h-20"></div>
                        <div class="color-idea-3 w-10 md:h-80 h-20"></div>
                        <div class="color-idea-4 w-10 md:h-80 h-20"></div>
                        <div class="color-idea-5 w-10 md:h-80 h-20"></div>
                        <div class="color-idea-6 w-10 md:h-80 h-20"></div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <h3 class="lg:text-3xl sm:text-2xl text-xl text-center">Iedvesmai</h3>
                    <div id="inspiration-gallery" class="splide max-w-md mx-auto mt-3">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide flex justify-center">
                                    <a data-fslightbox="inspiration-gallery" href="{{asset('/example-images/1.jpg')}}">
                                        <img src="{{asset('/example-images/1.jpg')}}" class="h-80 object-cover" alt="">
                                    </a>
                                </li>
                                <li class="splide__slide flex justify-center">
                                    <a data-fslightbox="inspiration-gallery" href="{{asset('/example-images/2.jpg')}}">
                                        <img src="{{asset('/example-images/2.jpg')}}" class="h-80 object-cover" alt="">
                                    </a>
                                </li>
                                <li class="splide__slide flex justify-center">
                                    <a data-fslightbox="inspiration-gallery" href="{{asset('/example-images/3.jpg')}}">
                                        <img src="{{asset('/example-images/3.jpg')}}" class="h-80 object-cover" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-arrow-down id="gallery" class="text-black"/>
    </x-section>
    <x-section id="gallery" class="bg-main-color-3 position-relative">
        <x-arrow-down id="dress-code" class="text-white rotate-180"/>
        <div class="container mx-auto sm:px-0 px-5 max-h-full overflow-y-auto">
            <h2 class="lg:text-4xl sm:text-3xl text-2xl text-center text-white font-bold mb-3 uppercase">Galerija</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/1.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/1.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/2.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/2.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/3.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/3.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/4.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/4.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/5.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/5.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/6.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/6.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/7.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/7.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/8.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/8.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/9.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/9.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fslightbox="gallery" href="{{asset('/example-images/10.jpg')}}">
                        <img loading="lazy" src="{{asset('/example-images/10.jpg')}}" class="gallery-image"
                             alt="">
                    </a>
                </div>
            </div>
        </div>
        <x-arrow-down id="dress-code" class="text-white"/>
    </x-section>
</x-app-layout>
