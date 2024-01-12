<x-app-layout>
    @include('layouts.admin-navigation')
    <div class="sm:pt-12 pt-6 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-2xl mb-3">{{ __('Add images') }}</h2>
                <x-admin-status-message/>
                <x-input-error :messages="$errors->get('gallery-images')" class="my-3"/>
                <form method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data"
                      class="mb-3">
                    @csrf
                    <x-file-upload :name="'gallery-images'"/>
                    <x-primary-button :type="'submit'"
                                      class="mt-3 bg-gray-800 hover:bg-gray-300 focus:bg-gray-300 text-white hover:text-black focus:text-black">
                        {{ __('Add') }}
                    </x-primary-button>
                </form>
                <p class="text-sm">Bildei ir jābūt .JPG, .JPEG vai .PNG formātā un pēc iespējas mazākā izmērā.</p>
                <p class="text-sm">Tās var samazināt šajā lapā - <a href="https://compressor.io/" class="underline"
                                                                    target="_blank">compressor.io</a>
            </div>
        </div>
    </div>
</x-app-layout>
