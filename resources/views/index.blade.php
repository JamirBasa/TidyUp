{{-- @php
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
            'name' => 'Mosses\'s Nail Salon',
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
@endphp --}}

<x-user-layout :user="$user" :userrole="$userRole">
    <div class="">
        {{-- Hero Section --}}
        <div class="flex mb-20 gap-10">
            {{-- Left Section --}}
            <div class="flex-1 pt-20 ">
                {{-- Catch Phrase --}}
                <div class="flex flex-col items-center justify-center z-0 lg:block">
                    <h1
                        class="font-clash font-medium text-[2.2rem] leading-10 sm:text-5xl lg:text-6xl max-w-[37rem] text-pretty mb-4 text-center lg:text-left">
                        Transformation in a click of a button </h1>
                    <p
                        class="text-xs lg:text-base text-balance sm:text-pretty max-w-[37rem] mb-6 text-center lg:text-left">
                        A
                        comprehensive booking platform for
                        beauty-related services offering its users ease and comfort.</p>
                </div>
                {{-- Buttons --}}
                <div class="grid grid-col-4 sm:grid-cols-3 lg:flex mt-4 gap-4 items-center xl:max-w-[40rem]">
                    <form action="" class="col-span-1 sm:col-span-2 relative inline-flex items-center lg:flex-1">
                        @csrf
                        <input type="text"
                            class="w-full text-xs sm:text-sm lg:text-base lg:min-w-[21rem] h-12 lg:h-16 pl-3 sm:pl-6 pr-10 lg:pr-16 rounded-full shadow-lg "
                            placeholder="Search for services near you">
                        <svg class="fill-white bg-black rounded-full absolute right-3 lg:right-6 cursor-pointer size-7 lg:size-10"
                            width="34" height="35" viewBox="0 0 34 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.0008 7.90039C13.0288 7.90039 9.80078 11.1284 9.80078 15.1004C9.80078 17.5244 11.2048 19.5524 12.8368 20.9684C13.3528 21.4124 14.2528 22.1204 15.0568 23.1644C15.9448 24.3284 16.7488 25.5764 17.0008 26.4164C17.2528 25.5764 18.0568 24.3284 18.9448 23.1644C19.7488 22.1204 20.6488 21.4124 21.1648 20.9684C22.7968 19.5524 24.2008 17.5244 24.2008 15.1004C24.2008 11.1284 20.9728 7.90039 17.0008 7.90039ZM17.0008 10.9724C17.5429 10.9724 18.0797 11.0792 18.5805 11.2866C19.0813 11.4941 19.5364 11.7981 19.9197 12.1815C20.303 12.5648 20.6071 13.0198 20.8146 13.5207C21.022 14.0215 21.1288 14.5583 21.1288 15.1004C21.1288 15.6425 21.022 16.1793 20.8146 16.6801C20.6071 17.1809 20.303 17.636 19.9197 18.0193C19.5364 18.4026 19.0813 18.7067 18.5805 18.9142C18.0797 19.1216 17.5429 19.2284 17.0008 19.2284C15.906 19.2284 14.856 18.7935 14.0818 18.0193C13.3077 17.2452 12.8728 16.1952 12.8728 15.1004C12.8728 14.0056 13.3077 12.9556 14.0818 12.1815C14.856 11.4073 15.906 10.9724 17.0008 10.9724Z" />
                        </svg>
                    </form>
                    <a id="get-started-btn" class="col-span-1 rounded-full lg:flex-1" href="{{ route('explore') }}"
                        data-url="{{-- route('explore.content') --}}">
                        <button
                            class="text-nowrap text-xs sm:text-sm lg:text-base px-3 sm:px-6 h-12 lg:h-16 w-full lg:w-[17rem] rounded-full bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white">Get
                            Started</button>
                    </a>
                </div>
            </div>
            {{-- Image Section --}}
            <div class="hidden xl:block xl:mt-20 2xl:mt-0">
                <img class="h-auto max-h-[30rem] aspect-square lazyload"
                    src="{{ asset('assets/images/landingpageVector.png') }}" alt="">
            </div>
        </div>

        <div class="flex items-center justify-between mb-8">
            <h1 class="p-1 sm:p-2 font-clash font-medium text-sm sm:text-2xl border-b-2 border-black">Customer's Choice
            </h1>
            <a href="" class="inline-flex items-center gap-1 sm:gap-2 p-1 sm:p-2 border-b-2 border-neutral-400">
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
            @foreach ($shops as $shop)
                <x-shop-card :shop="$shop" :shopbranches="$shopBranches" :shopgallery="$shopGallery" :branchcategory="$branchCategory" />
            @endforeach
        </div>

        {{-- How It Works Section --}}
        <div class="mb-8 min-w-min">
            <h1 class="p-2 font-clash font-medium sm:text-2xl border-b-2 border-black w-min text-nowrap">How it works...
            </h1>
        </div>

        <div class="grid lg:grid-cols-2 gap-6">
            <div
                class="bg-white px-10 py-8 sm:py-16 rounded-2xl sm:rounded-[3rem] relative overflow-hidden flex flex-col justify-center z-0 ">
                <h1 class="font-semibold mb-4 text-sm sm:text-base z-10 relative">Service Selection</h1>
                <p class="text-pretty text-xs sm:text-sm z-10 relative">A huge selection of services categorized to make
                    it
                    easier for users to find what suits their needs.</p>
                <img class="absolute bottom-0 right-0 " src="{{ asset('assets/images/shops/Vector1.png') }}"
                    alt="">
            </div>
            <div
                class="bg-white px-10 py-8 sm:py-16 rounded-2xl sm:rounded-[3rem] relative overflow-hidden flex flex-col justify-center z-0">
                <h1 class="font-semibold mb-4 text-sm sm:text-base z-10 relative">Appointment Management Made Easyy</h1>
                <p class="text-pretty text-xs sm:text-sm z-10 relative">A built-in feature to manage your appointments
                    on
                    the go. </p>
                <img class="absolute bottom-4 right-0 " src="{{ asset('assets/images/shops/Vector2.png') }}"
                    alt="">
            </div>
            <div
                class="bg-white px-10 py-8 sm:py-16 rounded-2xl sm:rounded-[3rem] relative overflow-hidden flex flex-col justify-center z-0">
                <h1 class="font-semibold mb-4 text-sm sm:text-base z-10 relative">Shop Personalization</h1>
                <p class="text-pretty text-xs sm:text-sm z-10 relative">From shop services to shop galleries, how you
                    customize and set up your shop is all up to you!</p>
                <img class="absolute bottom-0 right-0 " src="{{ asset('assets/images/shops/Vector3.png') }}"
                    alt="">
            </div>
            <div
                class="bg-white px-10 py-8 sm:py-16 rounded-2xl sm:rounded-[3rem] relative overflow-hidden flex flex-col justify-center z-0">
                <h1 class="font-semibold mb-4 text-sm sm:text-base z-10 relative">Tracking Made Easy</h1>
                <p class="text-pretty text-xs sm:text-sm z-10 relative">Automated notifications for upcoming
                    appointments.
                </p>
                <img class="absolute bottom-0 h-[13rem]  right-0 " src="{{ asset('assets/images/shops/Vector4.png') }}"
                    alt="">
            </div>
        </div>

        <script src="{{ asset('assets/js/sidebar.js') }}"></script>
        @stack('scripts')
    </div>
</x-user-layout>
