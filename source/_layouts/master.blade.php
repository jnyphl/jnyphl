<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description or $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js" async></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.css">

    </head>

    <body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-forest-darkest leading-normal font-sans">
        <div id="vue-app">
            <header class="flex items-center py-4 max-w-xl mx-auto" role="banner">
                <div class="flex items-center w-full">
                    <div class="flex items-center px-4">
                        <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                            <h1 class="w-16">
                                <svg class="text-forest hover:text-forest-light fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path d="M140.2 211.8h21.2v31.5H177v-78.6h-15.6v31.5h-21.2v-31.5h-15.6v78.6h15.6zM72 211.8h36.6v-47.2H56.5v78.7H72v-31.5zm21-31.6v16H72v-16h21zM210.2 164.7h-15.5v78.6h48.8v-15.5h-33.3z"/><g><path d="M140.2 89.9l21.2 45.4H177V56.7h-15.6v45.4l-21.2-45.4h-15.6v78.6h15.6zM56.5 135.3h52.1V56.7H93v63.1H72V97.2H56.5v25zM204.5 135.3h15.6l8.9-29.9 14.5-48.7H228l-8.4 27.9L207 56.7h-15.6l22.1 48.7z"/></g><path d="M0 0v300h300V0H0zm284.4 285.6H15.6V14.4h268.9v271.2z"/></svg>
                            </h1>
                        </a>
                    </div>

                    <div class="flex flex-1 justify-end items-center px-4">

                        @include('_nav.menu')

                        <search></search>

                        @include('_nav.menu-toggle')
                    </div>
                </div>
            </header>

            @include('_nav.menu-responsive')

            <main role="main" class="flex-auto w-full container max-w-xl mx-auto py-16 px-4">
                @yield('body')
            </main>
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-reset">
                <li class="md:mr-2">
                    Made with &hearts; @include('_components.commit')
                </li>
                <li class="md:mr-2">
                    &copy; JNYPHL {{ date('Y') }}.
                </li>
            </ul>
        </footer>
    </body>
</html>
