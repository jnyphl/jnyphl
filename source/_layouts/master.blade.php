<html lang="en">
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
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-forest-darkest leading-normal font-sans">
        <div id="vue-app">
            <header class="flex items-center py-4 max-w-xl mx-auto" role="banner">
                <div class="flex items-center w-full">
                    <div class="flex items-center px-4">
                        <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                            <h1 class="border-2 border-forest-dark hover:border-forest-light p-2 my-0 text-sm font-mono text-forest-dark hover:text-forest-light tracking-wide leading-none">
                                <span class="block">JNY</span>
                                <span class="block">PHL</span>
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
