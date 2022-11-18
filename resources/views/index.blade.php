<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <header>
            <nav class="container flex justify-between p-6 mx-auto">
                <div class="items-center flex">
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

            <section class="container flex items-center mx-auto lg:flex-row px-16">
                <div class="w-1/2">
                    <div
                        class="flex bg-primary-light rounded-lg py-1.5 px-2.5 space-x-2 w-fit items-center mb-10">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14"
                                height="14">
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
                        <h3 class="text-[40px] font-extrabold tracking-wide leading-[54px]">
                            The new way to order food! Enjoy delicious meals for less anywhere,
                            anytime
                        </h3>

                        <p class="mt-2 mb-10 leading-6">
                            There’s always a zeyllo kitchen around the corner. Get <br>
                            to enjoy your favorite meals anywhere and everywhere
                        </p>

                        <div class="space-x-2">
                            <input type="email" placeholder="Enter your email"
                                class="w-2/5 px-5 py-3 text-sm leading-5 rounded-lg outline-none border-g4">

                            <button class="px-12 py-3 font-bold text-white rounded-lg bg-b3">
                                Join waitlist
                            </button>
                        </div>
                    </div>
                </div>

                <div class="w-1/2 flex justify-end">
                    <img src="{{ asset('assets/images/mobile.png') }}" alt="">
                </div>
            </section>
        </main>
    </body>

</html>
