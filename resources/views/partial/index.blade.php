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
            'name' => 'Mosses\'s Nail Salon',
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
    <div class="grid grid-cols-3 mb-20">
        <div class="col-span-2 pt-20">
            <h1 class="font-clash font-medium text-6xl max-w-[37rem] text-pretty mb-4">Transformation in a click of a button </h1>
            <p class=" text-pretty max-w-[37rem] mb-6">A comprehensive booking platform for beauty-related services offering its users ease and comfort.</p>
            <div>
                <form action="" class="relative inline-flex items-center mt-4 mr-4">
                    @csrf
                    <input type="text" class=" w-[21rem] h-16 pl-6 pr-16 rounded-full shadow-lg" placeholder="Search for services near you">
                    <svg class="fill-white bg-black rounded-full absolute right-6 cursor-pointer" width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.0008 7.90039C13.0288 7.90039 9.80078 11.1284 9.80078 15.1004C9.80078 17.5244 11.2048 19.5524 12.8368 20.9684C13.3528 21.4124 14.2528 22.1204 15.0568 23.1644C15.9448 24.3284 16.7488 25.5764 17.0008 26.4164C17.2528 25.5764 18.0568 24.3284 18.9448 23.1644C19.7488 22.1204 20.6488 21.4124 21.1648 20.9684C22.7968 19.5524 24.2008 17.5244 24.2008 15.1004C24.2008 11.1284 20.9728 7.90039 17.0008 7.90039ZM17.0008 10.9724C17.5429 10.9724 18.0797 11.0792 18.5805 11.2866C19.0813 11.4941 19.5364 11.7981 19.9197 12.1815C20.303 12.5648 20.6071 13.0198 20.8146 13.5207C21.022 14.0215 21.1288 14.5583 21.1288 15.1004C21.1288 15.6425 21.022 16.1793 20.8146 16.6801C20.6071 17.1809 20.303 17.636 19.9197 18.0193C19.5364 18.4026 19.0813 18.7067 18.5805 18.9142C18.0797 19.1216 17.5429 19.2284 17.0008 19.2284C15.906 19.2284 14.856 18.7935 14.0818 18.0193C13.3077 17.2452 12.8728 16.1952 12.8728 15.1004C12.8728 14.0056 13.3077 12.9556 14.0818 12.1815C14.856 11.4073 15.906 10.9724 17.0008 10.9724Z" />
                    </svg>
                </form>
                <button class="px-6 h-16 w-[17rem] rounded-full bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white">Get Started</button>
            </div>
        </div>
        <div class="col-span-1">
            <img class="h-[30rem]" src="{{ asset('assets/images/landingpageVector.png') }}" alt="">
        </div>
    </div>

    <div class="flex items-center justify-between mb-8">
        <h1 class="p-2 font-clash font-medium text-2xl border-b-2 border-black">Customer's Choice</h1>
        <a href="" class="inline-flex items-center gap-2 p-2 border-b-2 border-neutral-400">
            <svg class="stroke-neutral-500 stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7M17 7H9M17 7V15"  stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="font-clash text-lg font-medium text-neutral-500">See More</span>
        </a>
    </div>
    <div class="grid grid-cols-3 gap-6 mb-20">
        {{-- Shop Card --}}
        @for ($i = 0; $i < 6; $i++)
        <a href="" class="">
            <div class="relative mb-2">
                <img class=" h-[15rem] w-full object-cover rounded-lg" src="{{ asset('assets/images/shops/' . $shops[$i]['image'] ) }}" alt="">
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

    {{-- How It Works Section --}}
    <div class="mb-8 min-w-min">
        <h1 class="p-2 font-clash font-medium text-2xl border-b-2 border-black w-min text-nowrap">How it works...</h1>
    </div>

    <div class="grid grid-cols-2 gap-6">
        <div class="bg-white px-10 py-16 rounded-[3rem] relative overflow-hidden flex flex-col justify-center">
            <h1 class="font-semibold mb-4 z-20 relative">Service Selection</h1>
            <p class="text-pretty text-sm z-20 relative">A huge selection of services categorized to make it easier for users to find what suits their needs.</p>
            <img class="absolute bottom-0 right-0 " src="{{ asset('assets/images/shops/Vector1.png') }}" alt="">
        </div>
        <div class="bg-white px-10 py-16 rounded-[3rem] relative overflow-hidden flex flex-col justify-center">
            <h1 class="font-semibold mb-4 z-20 relative">Appointment Management Made Easyy</h1>
            <p class="text-pretty text-sm z-20 relative">A built-in feature to manage your appointments on the go. </p>
            <img class="absolute bottom-4 right-0 " src="{{ asset('assets/images/shops/Vector2.png') }}" alt="">
        </div>
        <div class="bg-white px-10 py-16 rounded-[3rem] relative overflow-hidden flex flex-col justify-center">
            <h1 class="font-semibold mb-4 z-20 relative">Shop Personalization</h1>
            <p class="text-pretty text-sm z-20 relative">From shop services to shop galleries, how you customize and set up your shop is all up to you!</p>
            <img class="absolute bottom-0 right-0 " src="{{ asset('assets/images/shops/Vector3.png') }}" alt="">
        </div>
        <div class="bg-white px-10 py-16 rounded-[3rem] relative overflow-hidden flex flex-col justify-center">
            <h1 class="font-semibold mb-4 z-20 relative">Tracking Made Easy</h1>
            <p class="text-pretty text-sm z-20 relative">Automated notifications for upcoming appointments.</p>
            <img class="absolute bottom-0 h-[13rem]  right-0 " src="{{ asset('assets/images/shops/Vector4.png') }}" alt="">
        </div>
    </div>

</div>
{{-- </x-user-layout> --}}