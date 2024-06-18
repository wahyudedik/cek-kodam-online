<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="text-gray-600 body-font relative">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Create Kodam</h1>
                        </div>
                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <form action="{{ route('kodam.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                            <input type="text" id="name" name="name"
                                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>

                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="description"
                                                class="leading-7 text-sm text-gray-600">Description</label>
                                            <textarea id="description" name="description"
                                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <button
                                            class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Create</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section>
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">List Kodam</h1>

                            <table class="table-auto w-full text-left whitespace-no-wrap table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Name</th>
                                        <th class="px-4 py-2">Description</th>
                                        <th class="px-4 py-2">Action</th>
                                    </tr>
                                <tbody>
                                    @foreach ($kodams as $kodam)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $kodam->name }}</td>
                                            <td class="border px-4 py-2">{{ $kodam->description }}</td>
                                            <td class="border px-4 py-2">
                                                {{-- <a href="{{ route('kodam.edit', $kodam->id) }}"
                                                    class="text-blue-500">Edit</a>
                                                <form action="{{ route('kodam.destroy', $kodam->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500">Delete</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
