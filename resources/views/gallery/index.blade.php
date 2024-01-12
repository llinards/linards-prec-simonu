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
                                      class="bg-gray-800 hover:bg-gray-300 focus:bg-gray-300 text-white hover:text-black focus:text-black">
                        {{ __('Add') }}
                    </x-primary-button>
                </form>
                <p class="text-sm">Bildei ir jābūt .JPG, .JPEG vai .PNG formātā un pēc iespējas mazākā izmērā.</p>
                <p class="text-sm">Tās var samazināt šajā lapā - <a href="https://compressor.io/" class="underline"
                                                                    target="_blank">compressor.io</a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-2xl mb-3">{{ __('Delete images') }}</h2>
                <x-admin-status-message/>
                <x-input-error :messages="$errors->get('gallery-images')" class="my-3"/>
                <form method="POST" action="{{route('gallery.destroy')}}"
                      class="mb-3">
                    @csrf
                    @method('DELETE')
                    <x-primary-button :type="'submit'"
                                      class="mb-3 bg-red-700 hover:bg-gray-300 focus:bg-gray-300 text-white hover:text-black focus:text-black w-auto">
                        {{ __('Delete') }}
                    </x-primary-button>
                    <div class="flex gap-1 sm:justify-normal justify-center flex-wrap relative">
                        @foreach($images as $image)
                            <div class="relative">
                                <input type="checkbox"
                                       class="absolute top-0 left-0 w-4 h-4 text-gray-800 bg-gray-100 focus:ring-gray-500 focus:ring-2"
                                       name="gallery-images[]" value="{{$image->id}}">
                                <img loading="lazy" src="{{asset('storage/gallery/'.$image->name)}}"
                                     class="sm:w-40 sm:h-40 w-32 h-32 object-cover"
                                     alt="">
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
