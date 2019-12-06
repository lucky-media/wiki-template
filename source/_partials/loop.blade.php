@foreach($posts as $post)
    <a href="{{ $post->getPath() }}" class="flex flex-col hover:bg-gray-300 -mx-8 px-8 py-8">
        <h2 class="font-medium text-gray-800 text-2xl">{{ $post->title }}</h2>
        <p class="font-normal text-gray-700 mt-2">{!! $post->getExcerpt() !!}</p>
    </a>
@endforeach