<div>
    <x-status-message/>
    <form wire:submit="save" id="guest-submission-form" class="max-w-md mx-auto sm:px-0 px-5 mt-3">
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input wire:model="first_name" type="text" name="first_name" id="first_name"
                       class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                       placeholder=" " value="{{ old('first_name') }}">
                <label for="first_name"
                       class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Vārds</label>
                <x-input-error :messages="$errors->get('first_name')" class="mt-2 text-white"/>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input wire:model="last_name" type="text" name="last_name" id="last_name"
                       class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                       placeholder=" " value="{{ old('last_name') }}"/>
                <label for="last_name"
                       class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Uzvārds</label>
                <x-input-error :messages="$errors->get('last_name')" class="mt-2 text-white"/>
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input wire:model="phone_number" type="tel" name="phone_number" id="phone_number"
                   class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                   placeholder=" " value="{{ old('phone_number') }}"/>
            <label for="phone_number"
                   class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kontakttālrunis</label>
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2 text-white"/>
        </div>
        <fieldset class="mb-5">
            <p class="text-white text-sm text-center mb-3">Nakšņošu?</p>
            <div class="flex justify-around">
                <div class="flex items-center mb-4">
                    <input wire:model="is_staying" id="country-option-1" type="radio" name="is_staying" value="1"
                           class="w-6 h-6 border-black focus:ring-black focis:ring-black selected:ring-black">
                    <label for="country-option-1"
                           class="block ms-2 text-sm font-medium text-white">
                        Jā
                    </label>
                </div>
                <div class="flex items-center mb-4">
                    <input wire:model="is_staying" id="country-option-2" type="radio" name="is_staying" value="0"
                           class="w-6 h-6 border-black focus:ring-2 focus:ring-black">
                    <label for="country-option-2"
                           class="block ms-2 text-sm font-medium text-white">
                        Nē
                    </label>
                </div>
            </div>
            <x-input-error :messages="$errors->get('is_staying')" class="mt-2 text-white"/>
        </fieldset>
        <div class="flex justify-center">
            <button type="submit" wire:click="$refresh"
                    class="text-black bg-white hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-black font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Apstiprinu
            </button>
        </div>
    </form>
    <div class="flex justify-center">
        <button type="button" id="add-additional-guest"
                class="hidden text-black bg-white hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-black font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Pievienot vēl viesi
        </button>
    </div>
</div>
@script
<script>
    Livewire.on('guest-added', () => {
        console.log('dsdsds');
    });

    $wire.on('guest-added', () => {
        console.log('dsdsds');
        const successMessage = document.getElementById('success-message');
        console.log(successMessage);
        if (successMessage) {
            document.getElementById('guest-submission-deadline').classList.add('hidden');
            document.getElementById('guest-submission-form').classList.add('hidden')
            document.getElementById('add-additional-guest').classList.remove('hidden')
        }
        document.getElementById('add-additional-guest').addEventListener('click', () => {
            document.getElementById('guest-submission-deadline').classList.remove('hidden');
            document.getElementById('guest-submission-form').classList.remove('hidden')
            document.getElementById('add-additional-guest').classList.add('hidden')
        });
    });
</script>
@endscript
