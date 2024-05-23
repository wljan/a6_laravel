<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form enctype="multipart/form-data" action="{{route('dashboard.store')}}" method="POST" class="grid gap-3 p-4">
                        @csrf
                        @method("post")
                        <label for="title">Title:</label>
                        <input type="text" name="title" placeholder="Insert title" class="rounded-md"/>

                        <div class="border-t-2 py-4">
                        <label for="image">Image:</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" name="image"/>
                        </div>
                        <button class="p-2 bg-indigo-400 w-1/3 m-auto rounded-md text-neutral-50" type="submit">Submit</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
