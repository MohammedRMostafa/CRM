<x-app-layout>
    <x-slot:title>Create Contacts</x-slot:title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('contacts.update', $contact->id) }}" method="post">
                        @csrf
                        @method('put')
                        @include('contacts._form', [
                            'button_lable' => 'Update',
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
