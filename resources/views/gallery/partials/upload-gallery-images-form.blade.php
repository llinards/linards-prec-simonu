<section>
    <h2 class="text-2xl mb-3">{{ __('Add images') }}</h2>
    {{--                TODO: Salabot status ziņojumu--}}
    <x-admin-status-message/>
    <x-input-error :messages="$errors->get('gallery-images')" class="my-3"/>
    <form method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data"
          class="mb-3">
        @csrf
        <x-file-upload :name="'gallery-images'"/>
        <x-primary-button :type="'submit'"
                          class="bg-gray-800 hover:bg-gray-300 focus:bg-gray-300 text-white hover:text-black focus:text-black">
            {{ __('Add') }}
        </x-primary-button>
    </form>
    <p class="text-sm">Bildei ir jābūt .JPG, .JPEG vai .PNG formātā un pēc iespējas mazākā izmērā.</p>
    <p class="text-sm">Tās var samazināt šajā lapā - <a href="https://compressor.io/" class="underline"
                                                        target="_blank">compressor.io</a>
</section>
