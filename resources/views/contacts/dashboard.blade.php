<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-messages />
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Company</th>
                                    <th>Job</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; ?>
                                @forelse ($contacts as $contact)
                                    <tr>
                                        <th>{{ $index++ }}</th>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone_number }}</td>
                                        <td>{{ $contact->company }}</td>
                                        <td>{{ $contact->job }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('contacts.edit', $contact->id) }}"
                                                    class="btn btn-outline-dark mx-1">Edit</a>
                                                <form action="{{ route('contacts.destroy', $contact->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-outline-danger">delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <p class="text-center fs-6">No Contacts Yet. Create one to get started!</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('contacts.create') }}" class="col-1 mx-1 mt-3 btn btn-success">Add</a>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
