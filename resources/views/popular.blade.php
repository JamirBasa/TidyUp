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
@endphp
<x-user-layout :user="$user">
    <div>
        <div class="flex items-center justify-between mb-10">
            {{-- Page Title --}}
            <h1 class="font-clash text-xl font-medium">Most Popular</h1>
            {{-- Set location Button --}}
            <button class="inline-flex gap-2 items-center">
                <span>Set Location</span>
                <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 9.92285C5 14.7747 9.24448 18.7869 11.1232 20.3252C11.3921 20.5454 11.5281 20.6568 11.7287 20.7132C11.8849 20.7572 12.1148 20.7572 12.271 20.7132C12.472 20.6567 12.6071 20.5463 12.877 20.3254C14.7557 18.7871 18.9999 14.7751 18.9999 9.9233C18.9999 8.08718 18.2625 6.32605 16.9497 5.02772C15.637 3.72939 13.8566 3 12.0001 3C10.1436 3 8.36301 3.7295 7.05025 5.02783C5.7375 6.32616 5 8.08674 5 9.92285Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7C10.8954 7 10 7.89543 10 9Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="flex items-center justify-between mb-4">
            {{-- Filter Button --}}
            <button class="inline-flex gap-2 items-center">
                <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 18H21M3 18H6M6 18V20M6 18V16M20 12H21M3 12H16M16 12V14M16 12V10M14 6H21M3 6H10M10 6V8M10 6V4"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Filter</span>
            </button>
            {{-- Top Pagination --}}
            <div>
                <x-pagination />
            </div>
        </div>
        {{-- Shop Cards --}}
        <div
            class="grid 
                    md:grid-cols-2 2xl:grid-cols-3 
                    gap-6 mb-20
                    ">
            {{-- Shop Card --}}
            @for ($i = 0; $i < 6; $i++)
                <x-shop-card :i="$i" :shops="$shops" />
            @endfor
            @for ($i = 0; $i < 6; $i++)
                <x-shop-card :i="$i" :shops="$shops" />
            @endfor
        </div>
        <div class="grid place-items-center">
            <x-pagination />
        </div>
    </div>
</x-user-layout>
