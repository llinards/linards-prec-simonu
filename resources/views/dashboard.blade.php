<x-app-layout>
    @include('layouts.admin-navigation')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Viesu skaits
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Kopā nakšņotāji
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row"
                            class="px-6 py-4 text-center">
                            {{ count($guests) }}
                        </th>
                        <td class="px-6 py-4 text-center">
                            {{ count($guests->where('is_staying', true)) }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Vārds, uzvārds
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kontakttālrunis
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Vai nakšņos?
                            </th>
                            <th scope="col" class="px-6 py-3"/>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($guests as $guest)
                            <tr class="odd:bg-white even:bg-gray-50 border-b">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $guest->first_name }} {{ $guest->last_name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $guest->phone_number }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $guest->is_staying ? 'Jā' : 'Nē'}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('guest.destroy', $guest) }}"
                                       onclick="confirm('Vai tiešām vēlaties dzēst viesi?');"
                                       class="font-medium text-red-600 hover:underline">Dzēst</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
