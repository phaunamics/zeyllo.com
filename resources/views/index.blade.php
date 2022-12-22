<x-landing-layout>

    <!-- Join waitlist section -->
    <section class="container flex flex-col items-center px-6 mx-auto md:flex-row md:px-16">
        <div class="md:w-1/2">
            <div class="mb-4 md:mb-10 flex w-fit items-center space-x-2 rounded-lg bg-primary-light py-1.5 px-2.5">
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
                <h3 class="text-3xl md:text-[40px] font-extrabold md:leading-[54px] tracking-wide">
                    The new way to order food! Enjoy delicious meals for less anywhere,
                    anytime.
                </h3>

                <p class="mt-2 mb-10 text-lg leading-6">
                    There’s always a zeyllo kitchen around the corner. Get <br class="hidden md:block">
                    to enjoy your favorite meals anywhere and everywhere.
                </p>

                <x-success />

                <x-errors class="mb-2" />

                <form action="{{ route('join-waitlist') }}" method="POST">
                    <div class="flex flex-col space-y-3 md:space-y-0 md:gap-x-2 md:flex-row">
                        @csrf

                        <input class="w-full px-5 py-3 text-sm leading-5 rounded-lg outline-none md:w-2/5 border-g4"
                            type="email" name="email" placeholder="Enter your email">

                        <button class="px-12 py-3 font-bold text-white rounded-lg bg-b3">
                            Join waitlist
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="flex justify-end mt-20 md:w-1/2 md:mt-0">
            <img src="{{ asset('assets/images/mobile.png') }}" alt="">
        </div>
    </section>

    <!-- Food section -->
    <section class="container px-6 mx-auto mt-16 md:px-16">
        <div class="flex flex-col items-center w-full py-10 rounded-lg bg-primary-light">
            <div class="mb-5 space-y-3 text-center">
                <h3 class="text-2xl font-extrabold">Just the way you like it</h3>

                <p class="px-4 font-medium text-g1 md:px-0">
                    Order your favorite meals from our brands, curated to your taste. <br class="hidden md:block">
                    There’s something for everyone on Zeyllo
                </p>
            </div>

            <div class="flex flex-col space-y-10 md:flex-row md:space-y-0 md:space-x-10">
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
    <section class="container px-6 mx-auto mt-16 md:px-16">
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
</x-landing-layout>
