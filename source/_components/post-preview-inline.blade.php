<div class="w-full mb-6 flex -mx-4">
    <div class="w-2/3 flex-grow mx-4">
        <p class="text-grey-darker text-sm my-2">
            {{ $post->getDate()->format('F j, Y') }}
        </p>

        <h2 class="text-3xl mt-0">
            <a href="{{ $post->getUrl() }}" title="Read {{ $post->title }}" class="font-extrabold">
                {{ $post->title }}
            </a>
        </h2>

        <p class="mt-0 mb-4">{!! $post->excerpt() !!}</p>

        <a href="{{ $post->getUrl() }}" title="Read - {{ $post->title }}"class="inline-block mt-2 text-xs uppercase tracking-wide text-grey-darker leading-none border rounded py-2 px-2 hover:bg-grey-light hover:text-black">
            Read more
        </a>
    </div>

    @if ($post->cover_image)
        <div class="w-1/3 mx-4 mt-4">
            <img src="{{ $post->cover_image }}" alt="{{ $post->title }} cover image" class="mb-6">
        </div>
    @endif
</div>
