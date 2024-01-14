<x-app-layout>
    @include('layouts.admin-navigation')
    <div class="sm:pt-12 pt-6 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('gallery.partials.upload-gallery-images-form')
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('gallery.partials.delete-gallery-images-form')
            </div>
        </div>
    </div>
</x-app-layout>
