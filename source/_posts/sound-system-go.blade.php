---
extends: _layouts.post
section: content
title: Sound System Go!
date: 2018-09-01
description:  Sound system gonna bring me back up. Yeah, one thing that I can depend on.
cover_image: /assets/images/2018-09-01-sound-system/sound-system.jpg
featured: false
author: Phil
override_excerpt: If you want to get the feeling and you want to get it right, then the music's gotta be loud, For when the music hits I feel no pain at all.
categories: [house,barn,music,raspberry pi]
---
@section ('content')
    <h2>Record player, speakers, and amp</h2>
    <p>
    We purchased this setup as a Christmas present to our newly married selves back in 2016.
        <ul>
            <li><a href='https://uturnaudio.com/products/orbit-custom'>U-Turn Audio Orbit Custom Record Player</a>
                <li style="list-style-type: none">
                <ul>
                    <li>Acrylic platter</li>
                    <li><a href='https://uturnaudio.com/products/grado-black1'>Grado Black1 cartridge</a></li>
                    <li><a href='https://uturnaudio.com/products/pluto-phono-preamp'>Built in Pluto Phono Preamp</a></li>
                    <li><a href='/assets/images/2018-09-01-sound-system/donuts.gif'>45 RPM donut</a></li>
                    <li>Some stupid little brush so I can feel good about cleaning every spec of dust off the records. I don't even know, man.</li>
                </ul>
                </li>
            <li><a href='https://www.goldenear.com/products/aon-series'>GoldenEar Aon3 Speakers</a></li>
            <li><a href=''>Amplifier</a> from Overture Audio in Ann Arbor, MI</li>
            <li>Pear Anjou Speaker cables. Just kidding, we're not made of money or that stupid</li>
        </ul>
    </p>

    <h2>Raspberry Pi's</h2>
    <p>I bought two <a href='https://www.raspberrypi.org/products/'>Raspberry Pi 3 Model B+</a>'s and loaded a Debian based distro called <a href='https://volumio.org/'>Volumio</a> onto their SD cards. Something COOL and TOTALLY EXPECTED that happend when I plugged the power into the HifiBerry AMP2 was the legit fireball that shot out of the speaker wire input slots.
        <ul>
            <li>House Pi</li>
                <li style="list-style-type: none">
                <ul>
                    <li>RPi3B+</li>
                    <li><a href='http://iqaudio.co.uk/hats/8-pi-dac.html'>IQaudIO New Pi-DAC+</a></li>
                    <li>A nice acryllic enclosure</li>
                </ul>
                </li>
            <li>Barn Pi</li>
                <li style="list-style-type: none">
                <ul>
                    <li>RPi3B+</li>
                    <li><a href='https://www.hifiberry.com/shop/boards/hifiberry-amp2/'>HiFiBerry AMP2</a></li>
                    <li><a href='https://www.jameco.com/z/GST60A18-P1J-MEAN-WELL-18-Volt-3-33-Amp-60-Watt-Regulated-Switching-Table-Top-Power-Supply_2224403.html'>18V 3.33A 60W Switching Table Top Power Supply</a></li>
                    <li>A takeout container<li>
                </ul>
                </li>
            </li>
        <ul>
    </p>

    <h2>Music</h2>
    <p>The first song that we blasted outta this baby was Operation Ivy - Sound System, as you do.

    <h2>Pics!</h2>
    <div class="flex flex-wrap -mx-4 mt-6">
        <div class="px-4 mb-8 w-1/2">
            <img src="/assets/images/2018-09-01-sound-system/phil-proud.jpg">
            <p class="my-2">Jenny likes taking pictures of me being happy or something. She's a cutie. All I can say was that I was proud of the accomplishment.</p>
        </div>
        <div class="px-4 mb-8 w-1/2">
            <img src="/assets/images/2018-09-01-sound-system/rpi01.jpg">
            <p class="my-2">This is the first Raspberry Pi hooked up to the amplifier in the house.</p>
        </div>
        <div class="px-4 mb-8 w-1/2">
            <img src="/assets/images/2018-09-01-sound-system/rpi02.jpg">
            <p class="my-2">This is the temporary home of the second Raspberry Pi located in the barn. It plays slow jazz and hair metal for the barn cats. They love it.</p>
        </div>
    </div>
@endsection
