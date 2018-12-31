<div class="mb-6 flex -mx-2">
    <div class="w-1/2 flex-grow px-2">
        <p class="text-grey-darker text-xs md:text-sm my-2">
            {{ $post->getDate()->format('F j, Y') }}
        </p>

        <h2 class="text-lg sm:text-xl md:text-3xl mt-0">
            <a href="{{ $post->getUrl() }}" title="Read {{ $post->title }}" class="font-extrabold">
                {{ $post->title }}
            </a>
        </h2>

        @if(!empty($post->excerpt()))
            <p class="mt-0 mb-4">{!! $post->excerpt(200) !!}</p>
        @else
            <p class="mt-0 mb-4">{!! $post->override_excerpt !!}</p>
        @endif


        <a href="{{ $post->getUrl() }}" title="Read - {{ $post->title }}"class="inline-block mt-2 text-xs uppercase tracking-wide text-grey-darker leading-none border rounded py-2 px-2 hover:bg-grey-light hover:text-black">
            Read more
        </a>
    </div>

    @if ($post->cover_image)
        <div class="w-1/2 px-2 mt-4">
            <img src="{{ $post->cover_image }}" alt="{{ $post->title }} cover image" class="mb-6">
        </div>
    @endif

</div>
