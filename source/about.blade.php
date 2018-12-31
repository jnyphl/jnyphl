@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <div class="flex w-full">
        <div class="w-2/3">
            <p>We'll have something here soon.</p>
            <p><a href="https://philporada.com">https://philporada.com</a>
            <br /><a href="https://jennyingles.com">https://jennyingles.com</a></p>
        </div>

        <div class="w-1/3">
            <img src="/assets/images/about/us.jpg" alt="About image" class="flex rounded-full bg-contain">
        </div>
    </div>


@endsection
