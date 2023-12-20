<x-app-layout>
    <x-section :id="'introduction'" class="justify-between">
        <div class="lg:pt-10 pt-20">
            <h2 class="lg:text-4xl sm:text-3xl text-2xl text-center">Mēs precamies!</h2>
            <h1 class="lg:text-6xl sm:text-5xl text-4xl text-center font-bold">Linards & Simona</h1>
            <h3 class="lg:text-3xl sm:text-2xl text-xl text-center">30.12.2025.</h3>
        </div>
        <x-arrow-down :id="'rsvp'" class="animate-bounce"/>
    </x-section>
    <x-section :id="'rsvp'" class="bg-main-color-1 justify-between justify-items-center">
        <div class="mt-auto mb-auto">
            <div class="text-center">
                <h2 class="lg:text-4xl sm:text-3xl text-2xl text-white text-center">RSVP</h2>
                <p class="text-white">Lūdzam apstiprināt ierašanos līdz <span class="font-bold">30.10.2025.</span></p>
            </div>
            <form method="POST" action="#" class="max-w-md mx-auto sm:px-0 px-5 mt-3">
                @csrf
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="guest_first_name" id="guest_first_name"
                               class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                               placeholder=" " value="{{ old('guest_first_name') }}" required>
                        <label for="guest_first_name"
                               class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Vārds</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="guest_last_name" id="guest_last_name"
                               class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                               placeholder=" " value="{{ old('guest_last_name') }}" required/>
                        <label for="guest_last_name"
                               class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Uzvārds</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="tel" name="guest_phone" id="guest_phone"
                           class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                           placeholder=" " value="{{ old('guest_phone') }}" required/>
                    <label for="guest_phone"
                           class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kontakttālrunis</label>
                </div>
                <fieldset class="mb-5">
                    <p class="text-white text-sm text-center mb-3">Nakšņošu?</p>
                    <div class="flex justify-around">
                        <div class="flex items-center mb-4">
                            <input id="country-option-1" type="radio" name="guest_staying_overnight" value="yes"
                                   class="w-4 h-4 border-black focus:ring-black focis:ring-black selected:ring-black">
                            <label for="country-option-1"
                                   class="block ms-2 text-sm font-medium text-white">
                                Jā
                            </label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="country-option-2" type="radio" name="guest_staying_overnight" value="no"
                                   class="w-4 h-4 border-black focus:ring-2 focus:ring-black">
                            <label for="country-option-2"
                                   class="block ms-2 text-sm font-medium text-white">
                                Nē
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="flex justify-center">
                    <button type="submit"
                            class="text-black bg-white hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-black font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Apstiprinu
                    </button>
                </div>
            </form>
        </div>
        <x-arrow-down :id="'introduction'" class="text-white"/>
    </x-section>
</x-app-layout>
