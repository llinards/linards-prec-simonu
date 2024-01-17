<x-app-layout>
    <x-section id="introduction" class="justify-between font-lora bg-cover bg-center"
               style="background-image:url({{asset('storage/intro-background.jpg')}})">
        <div class="pt-20">
            <h2 class="lg:text-4xl sm:text-3xl text-2xl text-center lg:mb-5 mb-2 uppercase">Mēs precamies!</h2>
            <h1 class="lg:text-6xl sm:text-5xl text-4xl text-center font-bold lg:mb-5 mb-2">Linards & Simona</h1>
            <h3 class="lg:text-3xl sm:text-2xl text-xl text-center">30.12.2025.</h3>
        </div>
        <x-arrow-down id="rsvp" class="animate-bounce"/>
    </x-section>
    <x-section id="rsvp" class="bg-main-color-1 justify-between justify-items-center font-lora">
        <x-arrow-down id="introduction" class="text-white rotate-180"/>
        <div class="my-auto container mx-auto">
            <livewire:guest-store/>
        </div>
        <x-arrow-down id="agenda" class="text-white"/>
    </x-section>
    <x-section id="agenda" class="bg-main-color-2 font-lora">
        <x-arrow-down id="rsvp" class="text-white rotate-180"/>
        <div class="my-auto container mx-auto">
            <h1 class="lg:text-6xl sm:text-5xl text-4xl text-center text-white font-bold mb-5 uppercase">Dienas
                plāns</h1>
            <ul class="text-center">
                <li class="text-white text-xl py-3"><strong>15:00</strong> Ceremonija</li>
                <li class="text-white text-xl py-3"><strong>16:00</strong> Fotogrāfēšanās</li>
                <li class="text-white text-xl py-3"><strong>17:00</strong> Ierašanās viesu namā</li>
                <li class="text-white text-xl py-3"><strong>19:00</strong> Vakariņas</li>
                <li class="text-white text-xl py-3"><strong>21:00</strong> Pirmā deja</li>
                <li class="text-white text-xl py-3"><strong>23:00</strong> Mičošana</li>
                <li class="text-white text-xl py-3"><strong>00:00</strong> Kūkas griešana</li>
            </ul>
        </div>
        <x-arrow-down id="location" class="text-white"/>
    </x-section>
    <x-section id="location" class="bg-main-color-3 font-lora">
        <x-arrow-down id="agenda" class="text-white rotate-180"/>
        <div class="my-auto container max-w-lg mx-auto sm:px-0 px-5">
            <h1 class="lg:text-6xl sm:text-5xl text-4xl text-center text-white font-bold mb-5 uppercase">Svinību
                vieta</h1>
            <p class="text-white text-center text-xl">Brīvdienu Māja "Kamēlijas"</p>
            <p class="text-white text-center mb-5">"Lejassliseri", Mālpils, Siguldas novads</p>
            <div class="flex flex-col">
                <iframe style="border-radius:0.5rem;width:100%;height:300px" loading="lazy" allowfullscreen
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyYPR7IlB6UYRslm9TMAsEPg&key={{ config('googlemaps.google_maps_api_key') }}"></iframe>
                <x-primary-button
                    type="link"
                    href="https://www.waze.com/en/live-map/directions/brivdienu-maja-kamelijas-malpils?place=w.16384570.163649091.24553547"
                    class="bg-[#33ccff] hover:bg-[#0096c6] focus:bg-[#0096c6] text-white mt-3">
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
    <x-section id="dress-code" class="bg-main-color-4 font-lora">
        <x-arrow-down id="location" class="text-black rotate-180"/>
        <div class="my-auto container mx-auto sm:px-0 px-5">
            <h1 class="lg:text-6xl sm:text-5xl text-4xl text-center font-bold mb-3 uppercase">Dress Code</h1>
            <div class="flex flex-wrap justify-center">
                <div class="md:w-full">
                    <h3 class="lg:text-3xl sm:text-2xl text-xl text-center uppercase">Krāsu palete</h3>
                    <div class="flex justify-center lg:gap-5 gap-2 my-3">
                        <div class="color-idea-1 lg:w-14 w-10 md:h-50 h-20"></div>
                        <div class="color-idea-2 lg:w-14 w-10 md:h-50 h-20"></div>
                        <div class="color-idea-3 lg:w-14 w-10 md:h-50 h-20"></div>
                        <div class="color-idea-4 lg:w-14 w-10 md:h-50 h-20"></div>
                        <div class="color-idea-5 lg:w-14 w-10 md:h-50 h-20"></div>
                        <div class="color-idea-6 lg:w-14 w-10 md:h-50 h-20"></div>
                    </div>
                </div>
                <div class="md:w-full">
                    <h3 class="lg:text-3xl sm:text-2xl text-xl text-center uppercase">Iedvesmai</h3>
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
                                <li class="splide__slide flex justify-center">
                                    <a data-fslightbox="inspiration-gallery" href="{{asset('/example-images/4.jpg')}}">
                                        <img src="{{asset('/example-images/4.jpg')}}" class="h-80 object-cover" alt="">
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
    <x-section id="gallery" class="bg-main-color-3 position-relative font-lora">
        <x-arrow-down id="dress-code" class="text-white rotate-180"/>
        <h1 class="lg:text-6xl sm:text-5xl text-4xl text-center text-white font-bold mb-5 uppercase">Galerija</h1>
        <div class="gallery-container container mx-auto sm:px-0 px-5 max-h-full overflow-y-auto">
            <div class="gallery lg:columns-4 md:columns-3 columns-2 gap-2">
                @foreach($images as $image)
                    <div class="gallery-item w-full mb-2 break-inside-avoid">
                        <a data-fslightbox="gallery" href="{{asset('storage/gallery/'.$image->name)}}">
                            <img loading="lazy" src="{{asset('storage/gallery/'.$image->name)}}"
                                 class="gallery-image w-full"
                                 alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <x-arrow-down id="contacts" class="text-white"/>
    </x-section>
    <x-section id="contacts" class="bg-main-color-2 font-lora">
        <x-arrow-down id="gallery" class="text-white rotate-180"/>
        <div class="my-auto container mx-auto">
            <h1 class="lg:text-6xl sm:text-5xl text-4xl text-center text-white font-bold mb-5 uppercase">Kontakti</h1>
            <ul class="text-center">
                <li class="text-white text-xl py-3"><strong class="uppercase">Līgavainis</strong><br/>Linards +371
                    22345678
                </li>
                <li class="text-white text-xl py-3"><strong class="uppercase">Līgava</strong><br/>Simona +371 22345678
                </li>
                <li class="text-white text-xl py-3"><strong class="uppercase">Vedējtēvs</strong><br/>Linards +371
                    22345678
                </li>
                <li class="text-white text-xl py-3"><strong class="uppercase">Vedējmāte</strong><br/>Simona +371
                    22345678
                </li>
            </ul>
        </div>
    </x-section>
</x-app-layout>

<script type="module">
    document.addEventListener('DOMContentLoaded', () => {
        const inspirationGallery = new Splide('#inspiration-gallery.splide', {
            lazyLoad: 'sequential',
            arrows: false,
        });
        inspirationGallery.mount();
    });
</script>

