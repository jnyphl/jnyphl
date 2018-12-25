---
extends: _layouts.post
section: content
title: Blog styles
date: 1988-07-14
description: Displaying colors and styles used throughout the site.
//cover_image: /assets/img/post-cover-image-2.png
featured: false
---

@section ('content')

<div class="flex flex-wrap -mx-4 mt-6">
    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
        <div class="rounded overflow-hidden">
            <div class="text-white bg-forest px-6 py-4 text-sm font-semibold relative shadow">
                <div class="uppercase">Forest</div>
            </div>
            <div class="text-black bg-forest-lightest px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Lightest</span>
            </div>
            <div class="text-black bg-forest-lighter px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Lighter</span>
            </div>
            <div class="text-white bg-forest-light px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Light</span>
            </div>
            <div class="text-white bg-forest px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Base</span>
            </div>
            <div class="text-white bg-forest-dark px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Dark</span>
            </div>
            <div class="text-white bg-forest-darker px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Darker</span>
            </div>
            <div class="text-white bg-forest-darkest px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Darkest</span>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
        <div class="rounded overflow-hidden">
            <div class="text-white bg-brown px-6 py-4 text-sm font-semibold relative shadow">
                <div class="uppercase">Brown</div>
            </div>
            <div class="text-black bg-brown-lightest px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Lightest</span>
            </div>
            <div class="text-white bg-brown-lighter px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Lighter</span>
            </div>
            <div class="text-white bg-brown-light px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Light</span>
            </div>
            <div class="text-white bg-brown px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Base</span>
            </div>
            <div class="text-white bg-brown-dark px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Dark</span>
            </div>
            <div class="text-white bg-brown-darker px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Darker</span>
            </div>
            <div class="text-white bg-brown-darkest px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Darkest</span>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
        <div class="rounded overflow-hidden">
            <div class="text-black bg-grey px-6 py-4 text-sm font-semibold relative shadow">
                <div class="uppercase">Grey</div>
            </div>
            <div class="text-black bg-white px-6 py-3 text-sm font-semibold flex justify-between">
                <span>White</span>
            </div>
            <div class="text-black bg-grey-lightest px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Lightest</span>
            </div>
            <div class="text-black bg-grey-lighter px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Lighter</span>
            </div>
            <div class="text-black bg-grey-light px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Light</span>
            </div>
            <div class="text-black bg-grey px-6 py-3 text-sm font-semibold flex justify-between flex justify-between">
                <span>Base</span>
            </div>
            <div class="text-black bg-grey-dark px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Dark</span>
            </div>
            <div class="text-white bg-grey-darker px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Darker</span>
            </div>
            <div class="text-white bg-grey-darkest px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Darkest</span>
            </div>
            <div class="text-white bg-black px-6 py-3 text-sm font-semibold flex justify-between">
                <span>Black</span>
            </div>
        </div>
    </div>
</div>
@endsection
