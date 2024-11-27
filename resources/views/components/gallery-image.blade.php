@props(['sortedimages'])


@foreach ($sortedimages as $image)
    <div class="h-36 rounded-xl overflow-hidden">
        <img class="h-full w-full object-cover rounded-xl" src="{{ asset('storage/' . $image->path) }}">
    </div>
@endforeach
