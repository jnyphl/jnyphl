<nav class="hidden lg:flex items-center">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="text-forest-dark hover:underline hover:text-forest-light {{ $page->isActive('/blog') ? 'active text-forest-light underline' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-forest-dark hover:underline hover:text-forest-light {{ $page->isActive('/about') ? 'active text-forest-light underline' : '' }}">
        About
    </a>
</nav>
