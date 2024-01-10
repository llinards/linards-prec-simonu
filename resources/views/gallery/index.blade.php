<x-app-layout>
    @include('layouts.admin-navigation')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2>{{ __('Add images') }}</h2>
                <x-status-message/>
                <form method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
                    @csrf
                    <x-file-upload :name="'gallery'"/>
                    <x-primary-button :type="'submit'"
                                      class="bg-gray-800 hover:bg-gray-300 focus:bg-gray-300 text-white hover:text-black focus:text-black ms-3">
                        {{ __('Add') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
