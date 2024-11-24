@props(['user'])

<header
    class="sticky top-0 right-0 left-0 z-[500] bg-neutral-100 transition-all duration-300 ease-in-out px-5 py-2 lg:mb-10">
    <nav class="flex items-center max-w-screen-2xl mx-auto justify-between md:gap-3 lg:gap-20 xl:gap-40">
        {{-- Logo --}}
        <div class="flex items-center gap-2 -ml-1">
            <a class="" href="{{ route('index') }}">
                <img class="size-12 sm:size-18" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="logo">
            </a>
            <button id="burger-menu-mobile" class="lg:hidden">
                <svg class="stroke-black stroke-1 size-8 sm:size-10" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 17H19M5 12H19M5 7H13" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <h1 class="font-clash font-medium text-xl hidden lg:block">TidyUp</h1>
        </div>

        {{-- Form for Search Bar --}}
        <form action="" method="POST" class="relative items-center flex-1 hidden lg:flex">
            @csrf
            {{-- Search Bar --}}
            <input placeholder="Browse for Services"
                class="placeholder:text-neutral-800 placeholder:font-poppins placeholder:font placeholder:text-sm border rounded-full border-neutral-800  pl-12 pr-40 py-[0.5rem] focus:outline-none focus:ring-1 focus:ring-brand-500 focus:border-transparent text-base flex-1 bg-neutral-100"
                type="search" name="search" id="search-bar" />
            {{-- <img  src="{{ asset('assets/icons/Interface/Search_Magnifying_Glass.svg') }}" alt="icon"/> --}}
            <svg class="absolute left-4 size-5 stroke-neutral-800 hover:stroke-2 cursor-pointer" width="24"
                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            {{-- the Set Location Button --}}
            <button
                class="absolute border-l border-neutral-800 py-2 px-4 rounded-r-full flex items-center gap-3 right-0">
                <span class="text-sm">Set Location</span>
                <img class="size-5" src="{{ asset('assets/icons/Navigation/Map_Pin.svg') }}" alt="">
            </button>
        </form>
        {{-- Only for Guest --}}
        @guest
            {{-- Sign Up --}}
            <div class="flex items-center justify-between gap-3">
                <button class="lg:hidden">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z"
                            stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <a href="{{ route('user.login') }}">

                    <button
                        class="flex items-center gap-1 sm:gap-2 bg-brand-500 py-2 px-3 sm:py-2 sm:px-4 rounded-full w-full min-w-min">
                        <svg class="stroke-white stroke-1 size-4" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.2166 19.3323C15.9349 17.9008 14.0727 17 12 17C9.92734 17 8.06492 17.9008 6.7832 19.3323M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="text-[0.6rem] sm:text-base text-white">Sign In</span>
                    </button>
                </a>
            </div>
        @endguest
        {{-- Only For Logged In Users --}}
        @auth
            <div class="flex items-center justify-between gap-3 sm:gap-6">
                <button class="lg:hidden">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z"
                            stroke="black" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <!-- notification bell -->
                <button
                    class="relative bg-neutral-150 rounded-full size-9 sm:size-12 flex shadow-sm items-center justify-center">
                    <svg class="stroke-black stroke-[1.5px] size-6" width="30" height="30" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17.0001M15 17L9 17.0001M15 17H19C19.5523 17 20 16.5523 20 16V15.4141C20 15.1489 19.8945 14.8946 19.707 14.707L19.1963 14.1963C19.0706 14.0706 19 13.9 19 13.7222V10C19 9.82357 18.9936 9.64855 18.9805 9.4761M9 17.0001L5 17.0001C4.44772 17.0001 4 16.5521 4 15.9998V15.4141C4 15.1489 4.10544 14.8949 4.29297 14.7073L4.80371 14.1958C4.92939 14.0701 5 13.9002 5 13.7224V9.99998C5 6.13401 8.134 3 12 3C12.7116 3 13.3984 3.10618 14.0454 3.30357M18.9805 9.4761C20.1868 8.7873 21 7.48861 21 6C21 3.79086 19.2091 2 17 2C15.8298 2 14.7769 2.50253 14.0454 3.30357M18.9805 9.4761C18.3966 9.80949 17.7205 10 17 10C14.7909 10 13 8.20914 13 6C13 4.9611 13.3961 4.0147 14.0454 3.30357M18.9805 9.4761C18.9805 9.47609 18.9805 9.4761 18.9805 9.4761ZM14.0454 3.30357C14.0459 3.30371 14.0464 3.30385 14.0468 3.304"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <!-- profile picture -->
                <div class="inline-flex items-center relative">
                    <button class="shadow-sm rounded-full size-9 sm:size-12 ">
                        <x-user-profile-pic :user="$user" />
                    </button>
                    {{-- Dropdown --}}
                    <x-profile-dropdown :user="$user" />
                    </div">
                </div>
            @endauth
    </nav>
</header>


<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script>
    $(window).on('scroll', function() {
        const $header = $('header');
        if ($(this).scrollTop() > 0) {
            $header.addClass('shadow-lg');

        } else {
            $header.removeClass('shadow-lg');

        }
    });
</script>
