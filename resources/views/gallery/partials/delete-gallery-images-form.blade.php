<section>
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
                    <img loading="lazy" src="{{asset('storage/gallery/'.$image->name)}}"
                         class="sm:w-40 sm:h-40 w-32 h-32 object-cover gallery-images"
                         alt="">
                    <input type="checkbox"
                           class="absolute top-0 left-0 w-4 h-4 text-gray-800 bg-gray-100 focus:ring-gray-500 focus:ring-2"
                           name="gallery-images[]" value="{{$image->id}}">

                </div>
            @endforeach
        </div>
    </form>
</section>
<script type="module">
    const galleryImages = document.querySelectorAll('.gallery-images');
    galleryImages.forEach(image => {
        image.addEventListener('click', () => {
            image.nextElementSibling.checked = !image.nextElementSibling.checked;
        })
    })
</script>
