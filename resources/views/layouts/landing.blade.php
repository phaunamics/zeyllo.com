<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zeyllo') }}</title>

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
    <header x-data="{ 'is_nav': false }">
        <nav class="container flex flex-col justify-between p-6 mx-auto border-b md:px-16 md:border-none">
            <div class="flex justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/Logo.svg') }}" alt="Zeyllo">
                </div>

                <div class="items-center hidden space-x-4 lg:space-x-16 md:flex">
                    <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')" class="text-base text-black">
                        {{ __('For Kitchens') }}
                    </x-nav-link>

                    <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')" class="text-base text-black">
                        {{ __('For Investors') }}
                    </x-nav-link>

                    <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')" class="text-base text-black">
                        {{ __('Jobs') }}
                    </x-nav-link>

                    <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')" class="text-base text-black">
                        {{ __('Blog') }}
                    </x-nav-link>

                    <button class="px-6 py-3 font-bold text-white rounded-lg bg-b3">
                        Get early access
                    </button>
                </div>

                <div class="cursor-pointer md:hidden" @click="is_nav = !is_nav">
                    <span x-show="!is_nav">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z" fill="rgba(9,44,76,1)" />
                        </svg>
                    </span>

                    <span x-show="is_nav">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
                                fill="rgba(9,44,76,1)" />
                        </svg>
                    </span>
                </div>
            </div>

            <div x-show="is_nav" class="pt-5 mt-5">
                <ul class="flex flex-col space-y-2 font-medium">
                    <li>For Kitchens</li>
                    <li>For Investors</li>
                    <li>Jobs</li>
                    <li>Blog</li>
                    <li>
                        <button class="px-6 py-3 font-bold text-white rounded-lg bg-b3">
                            Get early access
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="py-8">
        {{ $slot }}
    </main>

    <footer class="mt-8">

        <section class="container flex flex-col items-center px-6 mx-auto space-y-6 md:flex-row md:px-16 md:space-y-0">
            <div class="space-y-5 md:w-1/3">
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

            <div class="flex flex-col w-full md:flex-row md:justify-end md:w-2/3 md:gap-x-16 gap-y-4 md:gap-y-0">
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

        <section class="container flex items-center px-6 mx-auto mt-10 md:px-16 md:mt-20">
            <p class="w-full py-6 text-sm font-medium text-center border-t text-g1 border-b4/80">
                © 2022 Zeyllo. All rights reserved
            </p>
        </section>
    </footer>
</body>

</html>
