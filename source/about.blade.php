@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/images/about/us.jpg" alt="About image" class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p><a href="https://philporada.com">https://philporada.com</a></p>
    <p><a href="https://jennyingles.com">https://jennyingles.com</a></p>

@endsection
