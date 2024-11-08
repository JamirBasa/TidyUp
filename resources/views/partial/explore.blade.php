{{-- <x-user-layout :user="$user"> --}}
@php
// THIS IS JUST TEMPORARY DONT MIND THIS PART OF THE CODE
$shops = [
    [
        'name' => 'Paul\'s Barbershop',
        'tag' => 'Barbershop',
        'location' => 'Street Name, Barangay, City',
        'rating' => '5.0',
        'image' => '1.png'
    ],
    [
        'name' => 'Jamir\'s Beauty Lounge',
        'tag' => 'Beauty Salon',
        'location' => 'Street Name, Barangay, City',
        'rating' => '4.0',
        'image' => '2.png'
    ],
    [
        'name' => 'Art\'s Canvas',
        'tag' => 'Barbershop',
        'location' => 'Street Name, Barangay, City',
        'rating' =>'5.0',
        'image' => '3.png'
    ],
    [
        'name' => 'Mosses\' Nail Salon',
        'tag' => 'Nail Salon',
        'location' => 'Street Name, Barangay, City',
        'rating' => '4.5',
        'image' => '4.png'
    ],
    [
        'name' => 'La Barberia de Jeco',
        'tag' => 'Barbershop',
        'location' => 'Street Name, Barangay, City',
        'rating' => '4.9',
        'image' => '5.png'
    ],
    [
        'name' => 'Elevation Gents',
        'tag' => 'Barbershop',
        'location' => 'Street Name, Barangay, City',
        'rating' => '5.0',
        'image' => '6.png'
    ],
];
@endphp
    <div class="content-section pt-28 pl-[17rem] pb-20 max-w-screen-2xl mx-auto"> 
        {{-- Featured Shop in Explore Page --}}
        <a href="" class="bg-black">
            <div class="relative  rounded-xl mb-10 group bg-neutral-900">
                <div class="relative mb-2 overflow-hidden">
                    <img load="lazy" class=" h-[32rem] w-full object-cover rounded-xl" src="{{ asset('assets/images/shops/' . $shops[0]['image'] ) }}" alt="">
                    <span class="absolute top-6 right-8 bg-white rounded-full py-1 px-4 text-sm shadow-md">{{ $shops[0]['tag'] }}</span>
                </div>
                <div class="absolute bottom-0 right-0 left-0 bg-gradient-to-t from-black to-transparent rounded-b-xl">
                    <div class="px-8 pb-8 pt-20 w-full">
                        <p class=" text-sm text-white group-hover:underline">Street Name, Barangay, City</p>
                        <h6 class=" text-white text-3xl font-semibold group-hover:underline">{{ $shops[0]['name'] }}</h6>
                        <span class="absolute inline-flex items-center gap-2 bottom-0 p-8 right-0">
                            <p class="-mb-1 text-white text-4xl">{{ $shops[0]['rating'] }}</p>
                            <svg class="stroke-white stroke-1 size-5 fill-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">    
                                <path d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div> 
        </a>  
        {{-- Featured Shop End Tag --}}

        {{-- Recommended for you Start --}}
        <div class="flex items-center justify-between mb-8">
            <h1 class="font-clash font-medium text-2xl p-2 border-b-2 border-black">Recommended for you</h1>
            <div class="inline-flex items-center gap-2">
                <button id="left-arrow">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12H7M7 12L11 16M7 12L11 8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button id="right-arrow">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12H17M17 12L13 8M17 12L13 16" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        {{-- Shop Cards For Recommended For You --}}
        

        <div id="carousel" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-10">
            @for ($i = 0; $i < 6; $i++)
            <a href="" id="shop-card" class="w-[25.1rem] inline-block mr-6 mb-8">
                <div class="relative mb-2">
                    <img load="lazy" class=" h-[15rem] w-full object-cover rounded-lg" src="{{ asset('assets/images/shops/' . $shops[$i]['image'] ) }}" alt="">
                    <span class="absolute top-3 right-3 bg-white rounded-full py-1 px-4 text-sm">{{ $shops[$i]['tag'] }}</span>
                </div>
                <div class="relative">
                    <h6 class="font-semibold">{{ $shops[$i]['name'] }}</h6>
                    <p class="opacity-60 text-sm">Street Name, Barangay, City</p>
                    <span class="absolute inline-flex items-center gap-2 top-0 right-0">
                        <p class="-mb-1">{{ $shops[$i]['rating'] }}</p>
                        <svg class="stroke-black stroke-1 size-3 fill-black" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </div>
            </a>   
            @endfor
        </div>

        {{-- Cards for the Most Popular Section --}}
        <div class="flex items-center justify-between mb-8">
            <h1 class="p-2 font-clash font-medium text-2xl border-b-2 border-black">Most Popular</h1>
            <a href="" class="inline-flex items-center gap-2 p-2 border-b-2 border-neutral-400">
                <svg class="stroke-neutral-500 stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15"  stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="font-clash text-lg font-medium text-neutral-500">See More</span>
            </a>
        </div>
        <div class="grid grid-cols-3 gap-6 mb-20">
            {{-- Shop Card --}}
            @for ($i = 5; $i >= 0; $i--)
            <a href="" class="">
                <div class="relative mb-2">
                    <img load="lazy" class=" h-[15rem] w-full object-cover rounded-lg" src="{{ asset('assets/images/shops/' . $shops[$i]['image'] ) }}" alt="">
                    <span class="absolute top-3 right-3 bg-white rounded-full py-1 px-4 text-sm">{{ $shops[$i]['tag'] }}</span>
                </div>
                <div class="relative">
                    <h6 class="font-semibold">{{ $shops[$i]['name'] }}</h6>
                    <p class="opacity-60 text-sm">Street Name, Barangay, City</p>
                    <span class="absolute inline-flex items-center gap-2 top-0 right-0">
                        <p class="-mb-1">{{ $shops[$i]['rating'] }}</p>
                        <svg class="stroke-black stroke-1 size-3 fill-black" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </div>
            </a>   
            @endfor
        </div>
        <div class="flex justify-center mb-20">
            <h1 class="font-semibold text-2xl font-clash">EXPLORE BY CATEGORIES</h1>
        </div>

        {{-- Barbershop Explore Starting Point --}}
        <div class="flex items-center justify-between mb-8">
            <a href="" class="inline-flex items-center">
                <h1 class="font-clash font-medium text-2xl p-2 border-b-2 border-black">Barbershop</h1>
                <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15"  stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <div class="inline-flex items-center gap-2">
                <button id="left-arrow2">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12H7M7 12L11 16M7 12L11 8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button id="right-arrow2">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12H17M17 12L13 8M17 12L13 16" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        {{-- Shop Cards For Barbershops --}}
        <div id="carousel2" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-10">
            @for ($i = 0; $i < 6; $i++)
            <a href="" id="shop-card" class="w-[25.1rem] inline-block mr-6 mb-8">
                <div class="relative mb-2">
                    <img load="lazy" class=" h-[15rem] w-full object-cover rounded-lg" src="{{ asset('assets/images/shops/' . $shops[$i]['image'] ) }}" alt="">
                    <span class="absolute top-3 right-3 bg-white rounded-full py-1 px-4 text-sm">{{ $shops[0]['tag'] }}</span>
                </div>
                <div class="relative">
                    <h6 class="font-semibold">{{ $shops[$i]['name'] }}</h6>
                    <p class="opacity-60 text-sm">Street Name, Barangay, City</p>
                    <span class="absolute inline-flex items-center gap-2 top-0 right-0">
                        <p class="-mb-1">{{ $shops[$i]['rating'] }}</p>
                        <svg class="stroke-black stroke-1 size-3 fill-black" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </div>
            </a>   
            @endfor
        </div>

        {{-- Beauty Salon Explore Starting Point --}}
        <div class="flex items-center justify-between mb-8">
            <a href="" class="inline-flex items-center">
                <h1 class="font-clash font-medium text-2xl p-2 border-b-2 border-black">Beauty Salon</h1>
                <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15"  stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <div class="inline-flex items-center gap-2">
                <button id="left-arrow3">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12H7M7 12L11 16M7 12L11 8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button id="right-arrow3">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12H17M17 12L13 8M17 12L13 16" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Shop Cards For Beauty Salon --}}
        <div id="carousel3" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-10">
            @for ($i = 5; $i >= 0; $i--)
            <a href="" id="shop-card" class="w-[25.1rem] inline-block mr-6 mb-8">
                <div class="relative mb-2">
                    <img load="lazy" class=" h-[15rem] w-full object-cover rounded-lg" src="{{ asset('assets/images/shops/' . $shops[$i]['image'] ) }}" alt="">
                    <span class="absolute top-3 right-3 bg-white rounded-full py-1 px-4 text-sm">{{ $shops[1]['tag'] }}</span>
                </div>
                <div class="relative">
                    <h6 class="font-semibold">{{ $shops[$i]['name'] }}</h6>
                    <p class="opacity-60 text-sm">Street Name, Barangay, City</p>
                    <span class="absolute inline-flex items-center gap-2 top-0 right-0">
                        <p class="-mb-1">{{ $shops[$i]['rating'] }}</p>
                        <svg class="stroke-black stroke-1 size-3 fill-black" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </div>
            </a>   
            @endfor
        </div>

        {{-- Nail Salon Explore Starting Point --}}
        <div class="flex items-center justify-between mb-8">
            <a href="" class="inline-flex items-center">
                <h1 class="font-clash font-medium text-2xl p-2 border-b-2 border-black">Nail Salon</h1>
                <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15"  stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <div class="inline-flex items-center gap-2">
                <button id="left-arrow4">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12H7M7 12L11 16M7 12L11 8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button id="right-arrow4">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12H17M17 12L13 8M17 12L13 16" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        {{-- Shop Cards For Nail Salon --}}
        <div id="carousel4" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-10">
            @for ($i = 0; $i < 6; $i++)
            <a href="" id="shop-card" class="w-[25.1rem] inline-block mr-6 mb-8">
                <div class="relative mb-2">
                    <img load="lazy" class=" h-[15rem] w-full object-cover rounded-lg" src="{{ asset('assets/images/shops/' . $shops[$i]['image'] ) }}" alt="">
                    <span class="absolute top-3 right-3 bg-white rounded-full py-1 px-4 text-sm">{{ $shops[3]['tag'] }}</span>
                </div>
                <div class="relative">
                    <h6 class="font-semibold">{{ $shops[$i]['name'] }}</h6>
                    <p class="opacity-60 text-sm">Street Name, Barangay, City</p>
                    <span class="absolute inline-flex items-center gap-2 top-0 right-0">
                        <p class="-mb-1">{{ $shops[$i]['rating'] }}</p>
                        <svg class="stroke-black stroke-1 size-3 fill-black" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </div>
            </a>   
            @endfor
        </div>

        {{-- Hair Salon Explore Starting Point --}}
        <div class="flex items-center justify-between mb-8">
            <a href="" class="inline-flex items-center">
                <h1 class="font-clash font-medium text-2xl p-2 border-b-2 border-black">Hair Salon</h1>
                <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H9M17 7V15"  stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <div class="inline-flex items-center gap-2">
                <button id="left-arrow5">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12H7M7 12L11 16M7 12L11 8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button id="right-arrow5">
                    <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:scale-110 transition-transform duration-300 ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12H17M17 12L13 8M17 12L13 16" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Shop Cards For Hair Salon --}}
        <div id="carousel5" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-10">
            @for ($i = 5; $i >= 0; $i--)
            <a href="" id="shop-card" class="w-[25.1rem] inline-block mr-6 mb-8">
                <div class="relative mb-2">
                    <img load="lazy" class=" h-[15rem] w-full object-cover rounded-lg" src="{{ asset('assets/images/shops/' . $shops[$i]['image'] ) }}" alt="">
                    <span class="absolute top-3 right-3 bg-white rounded-full py-1 px-4 text-sm">{{ $shops[1]['tag'] }}</span>
                </div>
                <div class="relative">
                    <h6 class="font-semibold">{{ $shops[$i]['name'] }}</h6>
                    <p class="opacity-60 text-sm">Street Name, Barangay, City</p>
                    <span class="absolute inline-flex items-center gap-2 top-0 right-0">
                        <p class="-mb-1">{{ $shops[$i]['rating'] }}</p>
                        <svg class="stroke-black stroke-1 size-3 fill-black" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </div>
            </a>   
            @endfor
        </div>

    </div>
</div>
<script>
    window.shops = @json($shops);
</script>
<script src="{{ asset('assets/js/explore.js') }}"></script>
@stack('scripts')
