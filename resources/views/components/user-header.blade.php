@props(['user'])


{{-- Mobile Header --}}
<header class="fixed top-0 right-0 left-0 z-10 bg-neutral-100 transition-all duration-300 ease-in-out px-6 py-2 lg:hidden">
    <nav class="flex items-center max-w-screen-2xl mx-auto justify-between">
        {{-- Logo --}}
        <div class="flex items-center gap-2 -ml-2">
            <a class="" href="{{ route('index') }}">
                <img class="size-18" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="logo">  
            </a>
            <button id="burger-menu-mobile">
                <svg class="stroke-black stroke-1 size-10" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 17H19M5 12H19M5 7H13" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>

        {{-- Form for Search Bar --}}
        <form action="" method="POST" class="relative items-center flex-1 hidden">
            @csrf
            {{-- Search Bar --}}
            <input
            placeholder="Browse for Services"
            class="placeholder:text-neutral-800 placeholder:font-poppins placeholder:font placeholder:text-sm border rounded-full border-neutral-800  pl-12 pr-40 py-[0.5rem] focus:outline-none focus:ring-1 focus:ring-brand-500 focus:border-transparent text-base flex-1 bg-neutral-100"
            type="search"
            name="search"
            id="search-bar"
            />
            {{-- <img  src="{{ asset('assets/icons/Interface/Search_Magnifying_Glass.svg') }}" alt="icon"/> --}}
            <svg class="absolute left-4 size-5 stroke-neutral-800 hover:stroke-2 cursor-pointer"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            {{-- the Set Location Button --}}
            <button class="absolute border-l border-neutral-800 py-2 px-4 rounded-r-full flex items-center gap-3 right-0">
                <span class="text-sm">Set Location</span>
                <img class="size-5" src="{{ asset('assets/icons/Navigation/Map_Pin.svg') }}" alt="">
            </button>
        </form> 
        {{-- Only for Guest --}}
        @guest
        {{-- Sing Up --}}
            <a href="{{ route('user.login') }}">
                <button class="flex items-center gap-2 bg-brand-500 py-2 px-4 rounded-full w-full min-w-min">
                    <img class="invert" src="{{ asset('assets/icons/User/User_Circle.svg') }}" alt="icon">
                    <span class="text-sm text-white">Sign In</span>
                </button>
            </a>
        @endguest
        {{-- Only For Logged In Users --}}
        @auth
            <div class="flex items-center justify-between gap-6">
                <!-- notification bell -->
                <button class="relative bg-neutral-150 rounded-full size-12 shadow-sm" >
                    <img class="absolute top-[0.60rem] right-[0.55rem]" src="{{ asset('assets/icons/Communication/Bell_Notification.svg') }}" alt="icon">
                </button>
                <!-- profile picture -->
                <div class="inline-flex items-center relative">
                    <button  class="shadow-sm rounded-full size-12 ">
                        <x-user-profile-pic :user="$user"/>
                    </button>
                    {{-- Dropdown --}}
                    <x-profile-dropdown :user="$user"/>
                </div">
            </div>
        @endauth
    </nav>
</header>

{{-- for PC header --}}
<header class="fixed top-0 right-0 left-0 z-10 bg-neutral-100 transition-all duration-300 ease-in-out px-6 hidden lg:block">
    <nav class="flex items-center max-w-screen-2xl mx-auto justify-between md:gap-3 lg:gap-20 xl:gap-40">
        {{-- Logo --}}
        <a class="flex items-center gap-2 -ml-2" href="{{ route('index') }}">
            <img class="size-18" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="logo">  
            <h1 class="font-clash font-medium text-xl">TidyUp</h1>
        </a>

        {{-- Form for Search Bar --}}
        <form action="" method="POST" class="relative flex items-center flex-1">
            @csrf
            {{-- Search Bar --}}
            <input
            placeholder="Browse for Services"
            class="placeholder:text-neutral-800 placeholder:font-poppins placeholder:font placeholder:text-sm border rounded-full border-neutral-800  pl-12 pr-40 py-[0.5rem] focus:outline-none focus:ring-1 focus:ring-brand-500 focus:border-transparent text-base flex-1 bg-neutral-100"
            type="search"
            name="search"
            id="search-bar"
            />
            {{-- <img  src="{{ asset('assets/icons/Interface/Search_Magnifying_Glass.svg') }}" alt="icon"/> --}}
            <svg class="absolute left-4 size-5 stroke-neutral-800 hover:stroke-2 cursor-pointer"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            {{-- the Set Location Button --}}
            <button class="absolute border-l border-neutral-800 py-2 px-4 rounded-r-full flex items-center gap-3 right-0">
                <span class="text-sm">Set Location</span>
                <img class="size-5" src="{{ asset('assets/icons/Navigation/Map_Pin.svg') }}" alt="">
            </button>
        </form> 
        {{-- Only for Guest --}}
        @guest
        {{-- Sing Up --}}
            <a href="{{ route('user.login') }}">
                <button class="flex items-center gap-2 bg-brand-500 py-2 px-4 rounded-full">
                    <img class="invert" src="{{ asset('assets/icons/User/User_Circle.svg') }}" alt="icon">
                    <span class="text-sm text-white text-nowrap">Sign In</span>
                </button>
            </a>
        @endguest
        {{-- Only For Logged In Users --}}
        @auth
            <div class="flex items-center justify-between gap-6">
                <!-- notification bell -->
                <button class="relative bg-neutral-150 rounded-full size-12 shadow-sm" >
                    <img class="absolute top-[0.60rem] right-[0.55rem]" src="{{ asset('assets/icons/Communication/Bell_Notification.svg') }}" alt="icon">
                </button>
                <!-- profile picture -->
                <div class="inline-flex items-center relative">
                    <button  class="shadow-sm rounded-full size-12 ">
                        <x-user-profile-pic :user="$user"/>
                    </button>
                    {{-- Dropdown --}}
                    <x-profile-dropdown :user="$user"/>
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

