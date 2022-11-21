<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        /* For Webkit-based browsers (Chrome, Safari and Opera) */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* For IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="container flex justify-between p-6 mx-auto">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/Logo.svg') }}" alt="Zeyllo">
            </div>

            <ul class="flex items-center space-x-16 font-medium">
                <li>For Kitchens</li>
                <li>For Investors</li>
                <li>
                    <button class="px-6 py-3 font-bold text-white rounded-lg bg-b3">
                        Get early access
                    </button>
                </li>

            </ul>
        </nav>
    </header>

    <main class="py-8">

        <!-- Join waitlist section -->
        <section class="container flex items-center px-16 mx-auto">
            <div class="w-1/2">
                <div class="mb-10 flex w-fit items-center space-x-2 rounded-lg bg-primary-light py-1.5 px-2.5">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M13 3v7.267l6.294-3.633 1 1.732-6.293 3.633 6.293 3.635-1 1.732L13 13.732V21h-2v-7.268l-6.294 3.634-1-1.732L9.999 12 3.706 8.366l1-1.732L11 10.267V3z"
                                fill="rgba(11,90,96,1)" />
                        </svg>
                    </span>

                    <h6 class="text-xs font-extrabold text-b4">
                        COMING SOON
                    </h6>
                </div>

                <div class="text-b3">
                    <h3 class="text-[40px] font-extrabold leading-[54px] tracking-wide">
                        The new way to order food! Enjoy delicious meals for less anywhere,
                        anytime
                    </h3>

                    <p class="mt-2 mb-10 leading-6">
                        There’s always a zeyllo kitchen around the corner. Get <br>
                        to enjoy your favorite meals anywhere and everywhere
                    </p>

                    <div class="space-x-2">
                        <input class="w-2/5 px-5 py-3 text-sm leading-5 rounded-lg outline-none border-g4"
                            type="email" placeholder="Enter your email">

                        <button class="px-12 py-3 font-bold text-white rounded-lg bg-b3">
                            Join waitlist
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex justify-end w-1/2">
                <img src="{{ asset('assets/images/mobile.png') }}" alt="">
            </div>
        </section>

        <!-- Food section -->
        <section class="container px-16 mx-auto mt-16">
            <div class="flex flex-col items-center w-full py-10 rounded-lg bg-primary-light">
                <div class="mb-5 space-y-3 text-center">
                    <h3 class="text-2xl font-extrabold">Just the way you like it</h3>

                    <p class="font-medium text-g1">
                        Order your favorite meals from our brands, curated to your taste. <br>
                        There’s something for everyone on Zeyllo
                    </p>
                </div>

                <div class="flex space-x-10">
                    <div class="rounded-lg bg-[#0B6055] px-4 pt-4">
                        <img class="w-64" src="{{ asset('assets/images/f1.png') }}" alt="">
                        <p class="pt-5 pb-4 text-2xl font-bold text-white">Turkspot</p>
                    </div>

                    <div class="rounded-lg bg-[#0B6055] px-4 pt-4">
                        <img class="w-64" src="{{ asset('assets/images/f2.png') }}" alt="">
                        <p class="pt-5 pb-4 text-2xl font-bold text-white">Chickena</p>
                    </div>

                    <div class="rounded-lg bg-[#0B6055] px-4 pt-4">
                        <img class="w-64" src="{{ asset('assets/images/f3.png') }}" alt="">
                        <p class="pt-5 pb-4 text-2xl font-bold text-white">Betapasta</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews section -->
        <section class="container px-16 mx-auto mt-16">
            <div class="flex flex-col space-y-10">
                <h3 class="text-2xl font-extrabold text-center text-b3">
                    <span class="underline decoration-warning decoration-8">
                        Did I hear Zeyllo?
                    </span>
                    What our customers are saying
                </h3>

                <div class="flex space-x-6 overflow-auto scrollbar-hide">
                    @for ($i = 0; $i < 7; $i++)
                        <div class="min-w-[306px] rounded-lg bg-[#F3F3F3] px-[30px] py-6">
                            <p class="text-g1">
                                “I order the same pasta full meal on Zeyllo everytime and it always
                                gets delivered, the same
                                delicious taste both when I’m in Warri or Lagos. Brilliant service”
                            </p>

                            <p class="flex items-center justify-between mt-6 font-semibold text-b3">
                                @jeff_osimhen

                                <x-socials.twitter />
                            </p>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
    </main>

    <footer class="mt-8">

        <section class="container flex items-center px-16 mx-auto">
            <div class="w-1/3 space-y-5">
                <img src="{{ asset('assets/images/Logo.svg') }}" alt="Zeyllo">

                <p class="text-g1">
                    Enjoy the brand new Zeyllo app for a seamless service. Save more when you order with friends on the
                    Zeyllo app.
                </p>

                <div class="flex space-x-8">
                    <x-socials.facebook-circle type="line" />
                    <x-socials.twitter type="line" />
                    <x-socials.instagram type="line" />
                </div>
            </div>

            <div class="flex justify-end w-2/3 gap-x-16">
                <div>
                    <h6 class="mb-3 font-extrabold text-b2">Menu</h6>

                    <ul class="space-y-2 text-g1">
                        <li>Standard meals</li>
                        <li>Pasta combos</li>
                        <li>Dipped in sauce</li>
                        <li>Deluxe full meals</li>
                    </ul>
                </div>

                <div>
                    <h6 class="mb-3 font-extrabold text-b2">Services</h6>

                    <ul class="space-y-2 text-g1">
                        <li>FAQs</li>
                        <li>How Zeyllo works</li>
                        <li>Order fulfillment</li>
                    </ul>
                </div>

                <div>
                    <h6 class="mb-3 font-extrabold text-b2">Company</h6>

                    <ul class="space-y-2 text-g1">
                        <li>About us</li>
                        <li>Partners</li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="container flex items-center px-16 mx-auto mt-20">
            <p class="w-full py-6 text-sm font-medium text-center border-t text-g1 border-b4/80">
                © 2022 Zeyllo. All rights reserved
            </p>
        </section>
    </footer>
</body>

</html>
