<div class=" rounded-md">
    <div class="p-4 rounded-t-lg hover:bg-gray-100 border-2">
        <img
        class="object-cover rounded-md bg-gray-50 w-full"
        src="{{ asset('storage/' . $image->image_path) }}"/>
        <div class="p-2 font-semibold">
        {{ $image->title }}
        </div>
    </div>
    </div>
