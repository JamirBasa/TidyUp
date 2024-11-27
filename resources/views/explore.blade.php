{{-- <x-user-layout :user="$user"> --}}
@php
    // THIS IS JUST TEMPORARY DONT MIND THIS PART OF THE CODE
    $shops = [
        [
            'name' => 'Paul\'s Barbershop',
            'tag' => 'Barbershop',
            'location' => 'Street Name, Barangay, City',
            'rating' => '5.0',
            'image' => '1.png',
        ],
        [
            'name' => 'Jamir\'s Beauty Lounge',
            'tag' => 'Beauty Salon',
            'location' => 'Street Name, Barangay, City',
            'rating' => '4.0',
            'image' => '2.png',
        ],
        [
            'name' => 'Art\'s Canvas',
            'tag' => 'Barbershop',
            'location' => 'Street Name, Barangay, City',
            'rating' => '5.0',
            'image' => '3.png',
        ],
        [
            'name' => 'Mosses\' Nail Salon',
            'tag' => 'Nail Salon',
            'location' => 'Street Name, Barangay, City',
            'rating' => '4.5',
            'image' => '4.png',
        ],
        [
            'name' => 'La Barberia de Jeco',
            'tag' => 'Barbershop',
            'location' => 'Street Name, Barangay, City',
            'rating' => '4.9',
            'image' => '5.png',
        ],
        [
            'name' => 'Elevation Gents',
            'tag' => 'Barbershop',
            'location' => 'Street Name, Barangay, City',
            'rating' => '5.0',
            'image' => '6.png',
        ],
    ];
@endphp

<x-user-layout :user="$user" :userrole="$userRole">
    <div class="content-section">
        {{-- Featured Shop in Explore Page --}}
        <a href="{{ route('shop.view') }}" class="bg-black">
            <div class="relative lg:rounded-xl mb-10 group bg-neutral-900 -mx-5 lg:mx-0">
                <div class="relative mb-2 overflow-hidden">
                    <img load="lazy"
                        class="h-[13rem] sm:h-[18rem] md:h-[24rem] lg:h-[32rem] w-full object-cover lg:rounded-xl"
                        src="{{ asset('assets/images/shops/' . $shops[0]['image']) }}" alt="">
                    <span
                        class="absolute top-4 md:top-6 right-4 md:right-8 bg-white rounded-full py-1 px-3 md:px-4 text-xs md:text-sm shadow-md">{{ $shops[0]['tag'] }}</span>
                </div>
                <div
                    class="absolute bottom-0 right-0 left-0 bg-gradient-to-t from-black to-transparent lg:rounded-b-xl">
                    <div class="px-4 md:px-8 pb-4 md:pb-8 pt-12 md:pt-20 w-full">
                        <p class="text-xs md:text-sm text-white group-hover:underline">Street Name, Barangay, City</p>
                        <h6 class="text-lg md:text-2xl lg:text-3xl text-white font-semibold group-hover:underline">
                            {{ $shops[0]['name'] }}</h6>
                        <span class="absolute inline-flex items-center gap-1 md:gap-2 bottom-0 p-4 md:p-8 right-0">
                            <p class="-mb-1 text-white text-xl md:text-3xl lg:text-4xl">{{ $shops[0]['rating'] }}</p>
                            <svg class="stroke-white stroke-1 size-4 md:size-5 fill-white" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </a>
        {{-- Featured Shop End Tag --}}

        {{-- Recommended for you Start --}}
        <div class="flex items-center justify-between mb-8">
            <h1 class="p-1 sm:p-2 font-clash font-medium text-sm sm:text-2xl border-b-2 border-black">Recommended for
                you
            </h1>
            <div class="inline-flex items-center gap-2">
                <x-carousel-arrow />
            </div>
        </div>
        {{-- Shop Cards For Recommended For You --}}


        <div id="carousel" class="carousel overflow-x-hidden whitespace-nowrap  snap-x mb-10 relative">

            @for ($i = 0; $i < 6; $i++)
                <x-shop-card :i="$i" :shops="$shops" :class="'w-[21rem] sm:w-[25.6rem] inline-block mr-6 mb-8'" />
            @endfor
        </div>

        {{-- Cards for the Most Popular Section --}}
        <div class="flex items-center justify-between mb-8">
            <h1 class="p-1 sm:p-2 font-clash font-medium text-sm sm:text-2xl border-b-2 border-black">Most Popular</h1>
            <a href="{{ route('popular') }}"
                class="inline-flex items-center gap-1 sm:gap-2 p-1 sm:p-2 border-b-2 border-neutral-400">
                <svg class="stroke-neutral-500 stroke-1 size-4 sm:size-6" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="font-clash text-xs sm:text-lg font-medium text-neutral-500">See More</span>
            </a>
        </div>
        <div
            class="grid 
                    md:grid-cols-2 2xl:grid-cols-3 
                    gap-6 mb-20
                    ">
            {{-- Shop Card --}}
            @for ($i = 0; $i < 6; $i++)
                <x-shop-card :i="$i" :shops="$shops" />
            @endfor
        </div>
        <div class="flex justify-center mb-20">
            <h1 class="font-semibold text-2xl font-clash">EXPLORE BY CATEGORIES</h1>
        </div>

        {{-- Barbershop Explore Starting Point --}}
        <div class="flex items-center justify-between mb-8">
            <a href="{{ route('barbershops') }}" class="inline-flex items-center">
                <h1 class="p-1 sm:p-2 font-clash font-medium text-sm sm:text-2xl border-b-2 border-black">Barbershop
                </h1>
                <svg class="stroke-black stroke-1 size-4 sm:size-6" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <div class="inline-flex items-center gap-2">
                <x-carousel-arrow :number="2" />
            </div>
        </div>
        {{-- Shop Cards For Barbershops --}}
        <div id="carousel2" class="carousel overflow-x-hidden whitespace-nowrap  snap-x mb-10">
            @for ($i = 0; $i < 6; $i++)
                <x-shop-card :i="$i" :shops="$shops" :tag="'Barbershop'" :class="'w-[21rem] sm:w-[25.6rem] inline-block mr-6 mb-8'" />
            @endfor
        </div>

        {{-- Beauty Salon Explore Starting Point --}}
        <div class="flex items-center justify-between mb-8">
            <a href="{{ route('beauty-salons') }}" class="inline-flex items-center">
                <h1 class="p-1 sm:p-2 font-clash font-medium text-sm sm:text-2xl border-b-2 border-black">Beauty Salon
                </h1>
                <svg class="stroke-black stroke-1 size-4 sm:size-6" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <div class="inline-flex items-center gap-2">
                <x-carousel-arrow :number="3" />
            </div>
        </div>

        {{-- Shop Cards For Beauty Salon --}}
        <div id="carousel3" class="carousel overflow-x-hidden whitespace-nowrap  snap-x mb-10">
            @for ($i = 5; $i >= 0; $i--)
                <x-shop-card :i="$i" :shops="$shops" :tag="'Beauty Salon'" :class="'w-[21rem] sm:w-[25.6rem] inline-block mr-6 mb-8'" />
            @endfor
        </div>

        {{-- Nail Salon Explore Starting Point --}}
        <div class="flex items-center justify-between mb-8">
            <a href="{{ route('nail-salons') }}" class="inline-flex items-center">
                <h1 class="p-1 sm:p-2 font-clash font-medium text-sm sm:text-2xl border-b-2 border-black">Nail Salon
                </h1>
                <svg class="stroke-black stroke-1 size-4 sm:size-6" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <div class="inline-flex items-center gap-2">
                <x-carousel-arrow :number="4" />
            </div>
        </div>
        {{-- Shop Cards For Nail Salon --}}
        <div id="carousel4" class="carousel overflow-x-hidden whitespace-nowrap  snap-x mb-10">
            @for ($i = 0; $i < 6; $i++)
                <x-shop-card :i="$i" :shops="$shops" :tag="'Nail Salon'" :class="'w-[21rem] sm:w-[25.6rem] inline-block mr-6 mb-8'" />
            @endfor
        </div>

        {{-- Hair Salon Explore Starting Point --}}
        <div class="flex items-center justify-between mb-8">
            <a href="{{ route('hair-salons') }}" class="inline-flex items-center">
                <h1 class="p-1 sm:p-2 font-clash font-medium text-sm sm:text-2xl border-b-2 border-black">Hair Salon
                </h1>
                <svg class="stroke-black stroke-1 size-4 sm:size-6" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <div class="inline-flex items-center gap-2">
                <x-carousel-arrow :number="5" />
            </div>
        </div>

        {{-- Shop Cards For Hair Salon --}}
        <div id="carousel5" class="carousel overflow-x-hidden whitespace-nowrap  snap-x mb-10">
            @for ($i = 5; $i >= 0; $i--)
                <x-shop-card :i="$i" :shops="$shops" :tag="'Hair Salon'" :class="'w-[21rem] sm:w-[25.6rem] inline-block mr-6 mb-8'" />
            @endfor
        </div>

    </div>
    </div>
    <script>
        window.shops = @json($shops);
    </script>
    <script src="{{ asset('assets/js/explore.js') }}"></script>
    @stack('scripts')

</x-user-layout>
