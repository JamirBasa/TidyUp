@php
    $shops = [
        [
            'name' => 'Paul\'s Barbershop',
            'tag' => 'Barbershop',
            'location' => 'Street Name, Barangay, City',
            'rating' => '5.0',
            'image' => '1.png',
            'availability' => 'Available',
            'shop_reviews' => '1500',
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

    $shop_schedule = [
        [
            'day_open' => 'MON-SAT',
            'time_open' => '10:00 AM',
            'time_close' => '7:00 PM',
        ],
    ];

    $shop_branches = [
        [
            'shop_id' => '1',
            'branch_id' => '1',
            'branch' => 'Main Branch',
        ],
        [
            'shop_id' => '1',
            'branch_id' => '2',
            'branch' => 'Culianan Branch',
        ],
        [
            'shop_id' => '1',
            'branch_id' => '3',
            'branch' => 'San Jose Gusu Branch',
        ],
    ];

    $category = [
        [
            'category_id' => '1',
            'category_name' => 'Haircut',
        ],
        [
            'category_id' => '2',
            'category_name' => 'Hairstyling',
        ],
        [
            'category_id' => '3',
            'category_name' => 'Grooming',
        ],
    ];

    $service = [
        [
            'category_id' => '1',
            'services' => [
                ['service_id' => '1', 'service_name' => 'Buzz Cut', 'duration' => 20, 'price' => 150],
                ['service_id' => '2', 'service_name' => 'Fade Cut', 'duration' => 30, 'price' => 250],
                ['service_id' => '3', 'service_name' => 'Crew Cut', 'duration' => 25, 'price' => 200],
            ],
        ],
        [
            'category_id' => '2',
            'services' => [
                ['service_id' => '4', 'service_name' => 'Blow Dry', 'duration' => 40, 'price' => 350],
                ['service_id' => '5', 'service_name' => 'Curls & Waves', 'duration' => 60, 'price' => 500],
                ['service_id' => '6', 'service_name' => 'Straightening', 'duration' => 90, 'price' => 700],
            ],
        ],
        [
            'category_id' => '3',
            'services' => [
                ['service_id' => '7', 'service_name' => 'Beard Trim', 'duration' => 15, 'price' => 100],
                ['service_id' => '8', 'service_name' => 'Shave', 'duration' => 30, 'price' => 150],
                ['service_id' => '9', 'service_name' => 'Eyebrow Shaping', 'duration' => 20, 'price' => 120],
            ],
        ],
    ];

@endphp

<x-user-layout :user="$user" :userrole="$userRole">
    {{-- View Shop --}}
    <div class="content-section">

        {{-- Shop Name and Availability --}}

        <div class="flex items-center gap-4 mb-1">
            {{-- Shop Name --}}
            <div class="p-2 font-clash font-medium text-2xl">{{ $shops[0]['name'] }}</div>
            <svg width="5" height="6" viewBox="0 0 5 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="3" r="2.5" fill="black" />
            </svg>
            {{-- Shop Availability --}}
            <div class="p-2 font-medium text-brand-300">{{ $shops[0]['availability'] }}</div>
        </div>

        {{-- Shop Rating, Shop Schedule and Shop Location --}}

        <div class="flex items-center gap-4 mb-4">
            {{-- Shop Rating --}}
            <div class="flex items-center justify-between">
                <div class="p-2">{{ $shops[0]['rating'] }}</div>
                <svg width="78" height="14" viewBox="0 0 57 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.5 0L6.02963 2.60796L9 3.24671L6.975 5.49727L7.28115 8.5L4.5 7.28296L1.71885 8.5L2.025 5.49727L0 3.24671L2.97037 2.60796L4.5 0Z"
                        fill="#DFB300" />
                    <path
                        d="M16.5 0L18.0296 2.60796L21 3.24671L18.975 5.49727L19.2812 8.5L16.5 7.28296L13.7188 8.5L14.025 5.49727L12 3.24671L14.9704 2.60796L16.5 0Z"
                        fill="#DFB300" />
                    <path
                        d="M28.5 0L30.0296 2.60796L33 3.24671L30.975 5.49727L31.2812 8.5L28.5 7.28296L25.7188 8.5L26.025 5.49727L24 3.24671L26.9704 2.60796L28.5 0Z"
                        fill="#DFB300" />
                    <path
                        d="M40.5 0L42.0296 2.60796L45 3.24671L42.975 5.49727L43.2812 8.5L40.5 7.28296L37.7188 8.5L38.025 5.49727L36 3.24671L38.9704 2.60796L40.5 0Z"
                        fill="#DFB300" />
                    <path
                        d="M52.5 0L54.0296 2.60796L57 3.24671L54.975 5.49727L55.2812 8.5L52.5 7.28296L49.7188 8.5L50.025 5.49727L48 3.24671L50.9704 2.60796L52.5 0Z"
                        fill="#DFB300" />
                </svg>
                <div class="p-2 font-medium text-brand-300">({{ $shops[0]['shop_reviews'] }}) </div>
            </div>
            <svg width="5" height="6" viewBox="0 0 5 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="3" r="2.5" fill="black" />
            </svg>
            {{-- Shop Schedule --}}
            <div class="p-2">Open {{ $shop_schedule[0]['day_open'] }} from
                {{ $shop_schedule[0]['time_open'] }} - {{ $shop_schedule[0]['time_close'] }} </div>
            <svg width="5" height="6" viewBox="0 0 5 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="3" r="2.5" fill="black" />
            </svg>
            {{-- Shop Location --}}
            <div class="p-2">{{ $shops[0]['location'] }}</div>
        </div>

        {{-- Grid Layout --}}
        <section class="grid grid-cols-3 gap-4 mb-4">

            {{-- Service Information --}}
            <div class="grid grid-cols-1 gap-2 col-span-2">

                {{-- Shop Gallery --}}
                <div class="mb-20">
                    <div class="relative mb-4 overflow-hidden">
                        <img class="lazyload h-[26rem] w-full object-cover rounded-lg"
                            src="{{ asset('assets/images/shops/' . $shops[0]['image']) }}" alt="">
                    </div>
                    <div class="relative grid grid-cols-3 mb-2 gap-4 overflow-hidden">
                        <img class="lazyload h-[10rem] w-full object-cover rounded-lg"
                            src="{{ asset('assets/images/shops/' . $shops[0]['image']) }}" alt="">
                        <img class="lazyload h-[10rem] w-full object-cover rounded-lg"
                            src="{{ asset('assets/images/shops/' . $shops[0]['image']) }}" alt="">
                        <img class="lazyload h-[10rem] w-full object-cover rounded-lg"
                            src="{{ asset('assets/images/shops/' . $shops[0]['image']) }}" alt="">
                    </div>
                </div>

                {{-- Offered Services --}}
                <div class="flex flex-col col-span-2 w-full mb-20">
                    <div class="flex items-center justify-between mb-8 col-span-2">
                        <div class="font-clash font-medium text-xl p-2">Offered Services</div>
                        <div class="inline-flex items-center gap-2">
                            <button id="left-arrow">
                                <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:shadow-md hover:scale-110 transition-transform duration-300 ease-in-out"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 12H7M7 12L11 16M7 12L11 8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button id="right-arrow">
                                <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:scale-110 transition-transform duration-300 ease-in-out"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 12H17M17 12L13 8M17 12L13 16" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Categories Carousel --}}
                    <div id="carousel" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-4">
                        @foreach ($category as $index => $cat)
                            <button id="category-card"
                                class="inline-block rounded-full p-4 px-32 button
                                {{ $index === 0 ? 'bg-black text-white' : 'bg-neutral-150 text-black hover:bg-neutral-200' }}"
                                data-category-id="{{ $cat['category_id'] }}" onclick="buttonClicked(this)"
                                style="{{ $index === 0 ? 'pointer-events: none;' : '' }}">
                                <div> {{ $cat['category_name'] }} </div>
                            </button>
                        @endforeach
                    </div>


                    {{-- Services List --}}
                    <div id="services-list">
                        <table
                            class="mt-4 w-full text-medium text-center rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class=" text-gray-900 uppercase border-b dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Service Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Duration
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($service[0]['services'] as $serviceItem)
                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $serviceItem['service_name'] }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $serviceItem['duration'] }} Minutes
                                        </td>
                                        <td class="px-6 py-4">
                                            Php {{ number_format($serviceItem['price'], 2) }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>


                {{-- Ratings and Reviews --}}
                <div class="flex flex-col col-span-2 w-full mb-20">
                    <div class=" col-span-2">
                        <div class="font-clash font-medium text-xl p-2">Shop Reviews</div>
                        <div class="font-medium p-2">Only verified users who have had a successful appointment with the
                            provider can leave reviews.</div>
                    </div>
                    {{-- Rating --}}
                    <div class="flex items-center col-span-2 gap-4 mb-8">

                        {{-- Rating, Stars and Number of Reviews --}}
                        <div class="flex flex-col items-center justify-center">
                            <div class="p-2 font-semibold text-9xl">{{ $shops[0]['rating'] }}</div>
                            <svg width="120" height="30" viewBox="0 0 57 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.5 0L6.02963 2.60796L9 3.24671L6.975 5.49727L7.28115 8.5L4.5 7.28296L1.71885 8.5L2.025 5.49727L0 3.24671L2.97037 2.60796L4.5 0Z"
                                    fill="#DFB300" />
                                <path
                                    d="M16.5 0L18.0296 2.60796L21 3.24671L18.975 5.49727L19.2812 8.5L16.5 7.28296L13.7188 8.5L14.025 5.49727L12 3.24671L14.9704 2.60796L16.5 0Z"
                                    fill="#DFB300" />
                                <path
                                    d="M28.5 0L30.0296 2.60796L33 3.24671L30.975 5.49727L31.2812 8.5L28.5 7.28296L25.7188 8.5L26.025 5.49727L24 3.24671L26.9704 2.60796L28.5 0Z"
                                    fill="#DFB300" />
                                <path
                                    d="M40.5 0L42.0296 2.60796L45 3.24671L42.975 5.49727L43.2812 8.5L40.5 7.28296L37.7188 8.5L38.025 5.49727L36 3.24671L38.9704 2.60796L40.5 0Z"
                                    fill="#DFB300" />
                                <path
                                    d="M52.5 0L54.0296 2.60796L57 3.24671L54.975 5.49727L55.2812 8.5L52.5 7.28296L49.7188 8.5L50.025 5.49727L48 3.24671L50.9704 2.60796L52.5 0Z"
                                    fill="#DFB300" />
                            </svg>
                            <div class="p-2 font-medium text-lg"> {{ $shops[0]['shop_reviews'] }} User Reviews </div>
                        </div>

                        {{-- Rating Graphs --}}
                        <div class="w-full">
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">5</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 100%"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">4</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">3</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">2</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">1</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="">
                        {{-- User Reviews --}}
                        <div class="mb-8">
                            <div class="border-t border-gray-200 pt-4 mb-4">
                                <div class="flex items-center mb-2">
                                    <div class="font-medium">Anthony Huesca</div>
                                    <div class="text-gray-500 ml-2">Fri, Sep 3, 2024 at 12:30 PM</div>
                                </div>
                                <div class="text-gray-700">The barber was friendly and professional. Felt comfortable
                                    with him.
                                </div>
                            </div>

                            <div class="border-t border-gray-200 pt-4 mb-4">
                                <div class="flex items-center mb-2">
                                    <div class="font-medium">Dean Billedo</div>
                                    <div class="text-gray-500 ml-2">Fri, Sep 3, 2024 at 12:30 PM</div>
                                </div>
                                <div class="text-gray-700">I got the Drake haircut I always wanted.</div>
                            </div>

                            <div class="border-t border-gray-200 pt-4 mb-4">
                                <div class="flex items-center mb-2">
                                    <div class="font-medium">Steven Tumimbang</div>
                                    <div class="text-gray-500 ml-2">Fri, Sep 3, 2024 at 12:30 PM</div>
                                </div>
                                <div class="text-gray-700">Great service and field expertise. Got what I wanted. Would
                                    recommend this shop.</div>
                            </div>

                            <div class="border-t border-gray-200 pt-4 mb-4">
                                <div class="flex items-center mb-2">
                                    <div class="font-medium">Herwayne Cawili</div>
                                    <div class="text-gray-500 ml-2">Fri, Sep 3, 2024 at 12:30 PM</div>
                                </div>
                                <div class="text-gray-700">Thank you for the great customer service. The massage after
                                    the
                                    haircut was a huge plus!</div>
                            </div>
                        </div>

                        {{-- See More Reviews Button --}}
                        <a href="" class="flex items-center hover:text-brand-300">
                            <div class="text-lg">See More Reviews</div>
                            <svg class="stroke-current stroke-2" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 9L14 12L11 15" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                    </div>

                </div>


                {{-- Reviews --}}


            </div>

            {{-- Call to Action Card --}}
            <div class="flex flex-col col-span-1 bg-white rounded-lg h-min shadow-md p-6 gap-4 sticky top-32">

                {{-- Shop Name, Availability and Rating --}}
                <div class="flex flex-col items-start mb-1">
                    {{-- Shop Name, Availability --}}
                    <div class=" text-brand-300 mb-2">{{ $shops[0]['availability'] }}</div>
                    <div class="font-clash font-medium text-4xl mb-2">{{ $shops[0]['name'] }}</div>

                    {{-- Shop Rating --}}
                    <div class="flex items-center gap-2 mb-4">
                        <div class="font-semibold">{{ $shops[0]['rating'] }}</div>
                        <svg width="78" height="14" viewBox="0 0 57 9" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.5 0L6.02963 2.60796L9 3.24671L6.975 5.49727L7.28115 8.5L4.5 7.28296L1.71885 8.5L2.025 5.49727L0 3.24671L2.97037 2.60796L4.5 0Z"
                                fill="#DFB300" />
                            <path
                                d="M16.5 0L18.0296 2.60796L21 3.24671L18.975 5.49727L19.2812 8.5L16.5 7.28296L13.7188 8.5L14.025 5.49727L12 3.24671L14.9704 2.60796L16.5 0Z"
                                fill="#DFB300" />
                            <path
                                d="M28.5 0L30.0296 2.60796L33 3.24671L30.975 5.49727L31.2812 8.5L28.5 7.28296L25.7188 8.5L26.025 5.49727L24 3.24671L26.9704 2.60796L28.5 0Z"
                                fill="#DFB300" />
                            <path
                                d="M40.5 0L42.0296 2.60796L45 3.24671L42.975 5.49727L43.2812 8.5L40.5 7.28296L37.7188 8.5L38.025 5.49727L36 3.24671L38.9704 2.60796L40.5 0Z"
                                fill="#DFB300" />
                            <path
                                d="M52.5 0L54.0296 2.60796L57 3.24671L54.975 5.49727L55.2812 8.5L52.5 7.28296L49.7188 8.5L50.025 5.49727L48 3.24671L50.9704 2.60796L52.5 0Z"
                                fill="#DFB300" />
                        </svg>
                        <div class="font-medium text-brand-300">( {{ $shops[0]['shop_reviews'] }} ) </div>
                    </div>
                </div>

                {{-- Shop Branches and Book Now Button --}}
                <form action="" method="POST" class=" mb-4">
                    {{-- Branches --}}
                    <div class="flex flex-col gap-2 w-full mb-8">
                        <div class="relative flex items-center">
                            <select class="border border-neutral-400 py-3 px-4 rounded-lg w-full" name="branch"
                                id="branch">
                                @for ($i = 0; $i < 3; $i++)
                                    <option value="{{ $shop_branches[$i]['branch'] }}" class="appearance-none">
                                        {{ $shop_branches[$i]['branch'] }}</option>
                                @endfor
                            </select>

                            <svg id="caret-down1" class="absolute stroke-black stroke-1 right-3 pointer-events-none"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    {{-- Book Now Button --}}
                    <div class="w-full">
                        <a href="{{ route('book-appointment') }}"> {{-- Remove the anchor tags once the backend is --}}
                            <div
                                class="bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-full p-3 font-medium w-full grid place-items-center">
                                Book Now
                            </div>
                        </a>
                    </div>
                </form>

                <div class="flex-grow border-t border-gray-400"></div>

                {{-- Time, Share and Report --}}
                <div class="flex flex-col">
                    {{-- Time --}}
                    <div class="flex mb-1">
                        <div class="p-2 flex items-center">
                            <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 7V12H17M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="p-2 text-sm">Open until {{ $shop_schedule[0]['time_close'] }} </div>
                    </div>
                    {{-- Share --}}
                    <a href="" class="flex mb-1 hover:bg-neutral-100 rounded-lg">
                        <div class="stroke-black stroke-1 p-2 flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 13.5L15 16.5M15 7.5L9 10.5M18 21C16.3431 21 15 19.6569 15 18C15 16.3431 16.3431 15 18 15C19.6569 15 21 16.3431 21 18C21 19.6569 19.6569 21 18 21ZM6 15C4.34315 15 3 13.6569 3 12C3 10.3431 4.34315 9 6 9C7.65685 9 9 10.3431 9 12C9 13.6569 7.65685 15 6 15ZM18 9C16.3431 9 15 7.65685 15 6C15 4.34315 16.3431 3 18 3C19.6569 3 21 4.34315 21 6C21 7.65685 19.6569 9 18 9Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="p-2 text-sm">Share</div>
                    </a>
                    {{-- Report --}}
                    <a href="" class="flex mb-1 hover:bg-neutral-100 rounded-lg">
                        <div class="stroke-black stroke-1 p-2 flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.002 9.00006V13.0001M4.38086 15.1999C3.47143 16.775 3.01684 17.5629 3.08477 18.2092C3.14402 18.7729 3.43987 19.2851 3.89844 19.6182C4.42399 20.0001 5.33286 20.0001 7.15049 20.0001H16.8534C18.671 20.0001 19.5798 20.0001 20.1053 19.6182C20.5639 19.2851 20.8599 18.7729 20.9191 18.2092C20.9871 17.5629 20.5326 16.775 19.6232 15.1999L14.7734 6.79986C13.864 5.22468 13.4091 4.43722 12.8154 4.17291C12.2976 3.94236 11.706 3.94236 11.1881 4.17291C10.5947 4.43711 10.1401 5.22458 9.23142 6.79845L4.38086 15.1999ZM12.0527 16.0001V16.1001L11.9521 16.1003V16.0001H12.0527Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="p-2 text-sm">Report</div>
                    </a>
                </div>
            </div>

        </section>

        {{-- Recommended for you Start --}}
        <div class="flex items-center justify-between mb-8">
            <h1 class="font-clash font-medium text-xl p-2 border-b-2 border-black">You May Also Like</h1>
            <div class="inline-flex items-center gap-2">
                <x-carousel-arrow :number="2" />
            </div>
        </div>
        {{-- Shop Cards For Recommended For You --}}


        <div id="carousel2" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-10">
            @for ($i = 0; $i < 6; $i++)
                <x-shop-card :shops="$shops" :i="$i" :class="'w-[21rem] sm:w-[25.6rem] inline-block mr-6 mb-8'" />
            @endfor
        </div>

    </div>

    <script>
        window.shops = @json($shops);
    </script>
    <script src="{{ asset('assets/js/explore.js') }}"></script>
    <script src="{{ asset('assets/js/view-service.js') }}"></script>
    @stack('scripts')
</x-user-layout>
