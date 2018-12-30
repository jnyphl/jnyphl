@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')

    <div class="text-forest text-sm">{{ date('F j, Y', $page->date) }}</div>
    <h1 class="mt-0">{{ $page->title }}</h1>

    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->cover_image_alt }} cover image" class="mb-2">
    @endif

    <div class="border-b border-grey-light mb-4 pt-6 pb-4" v-pre>
        @yield('content')

    @if ($page->categories)
        Categories:
        @foreach ($page->categories as $i => $category)
            <a href="{{ '/blog/categories/' . $category }}" title="View posts in {{ $category }}" class="button-light">{{ $category }}</a>
        @endforeach
    @endif
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
