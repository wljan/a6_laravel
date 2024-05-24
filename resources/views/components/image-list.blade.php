<div class="mb-4 mt-4 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 infinite-scroll">

    @forelse($images as $image)
        <x-image :image="$image" />
@empty
    <p>Geen foto's momenteel.</p>
@endforelse
</div>
