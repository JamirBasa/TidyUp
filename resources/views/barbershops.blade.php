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
            'name' => 'Art\'s Canvas',
            'tag' => 'Barbershop',
            'location' => 'Street Name, Barangay, City',
            'rating' => '5.0',
            'image' => '3.png',
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
        [
            'name' => 'Paul\'s Barbershop',
            'tag' => 'Barbershop',
            'location' => 'Street Name, Barangay, City',
            'rating' => '5.0',
            'image' => '1.png',
        ],
        [
            'name' => 'La Barberia de Jeco',
            'tag' => 'Barbershop',
            'location' => 'Street Name, Barangay, City',
            'rating' => '4.9',
            'image' => '5.png',
        ],
    ];
@endphp
<x-user-layout :user="$user" :user-role="$userRole">
    <div>
        <div class="flex items-center justify-between mb-10">
            {{-- Page Title --}}
            <h1 class="font-clash text-xl font-medium">Barbershops</h1>
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
            <button id="filter-open-btn" class="inline-flex gap-2 items-center">
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
    {{-- filter modal --}}
    <div id="filter-modal"
        class="fixed top-0 bottom-0 left-0 right-0 z-[2000] backdrop-brightness-50 place-items-center hidden">
        <div id="filter-modal-content"
            class="bg-white w-full max-w-screen-lg mx-auto p-10 rounded-lg shadow-lg relative">
            <form method="" action="">
                @csrf
                <div>
                    <h6 class="font-clash font-medium text-xl">Search Filters</h6>
                    <button id="filter-close-btn">
                        <svg class="absolute top-10 right-10" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <div class="py-2 px-4 border-b border-neutral-400 mb-4">
                            <h1>TYPES</h1>
                        </div>
                        <div class="py-2 px-4 text-xs space-y-8">
                            <div class="flex items-center ">
                                <input id="all-types" type="checkbox" value=""
                                    class="w-4 h-4 text-brand-600 accent-brand-400 bg-gray-100 border-gray-300 rounded focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    name="all-types">
                                <label for="all-types"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">All Types</label>
                            </div>
                            <div class="flex items-center">
                                <input id="solo-appointment" type="checkbox"
                                    value="Solo
                                    Appointment"
                                    class="w-4 h-4 text-brand-600 accent-brand-400 bg-gray-100 border-gray-300 rounded focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    name="solo-appointment">
                                <label for="solo-appointment"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">Solo
                                    Appointment</label>
                            </div>
                            <div class="flex items-center">
                                <input id="multiple-people-appointment" type="checkbox"
                                    value="Multiple People
                                    Appointment"
                                    class="w-4 h-4 text-brand-600 accent-brand-400 bg-gray-100 border-gray-300 rounded focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    name="multiple-people-appointment">

                                <label for="multiple-people-appointment"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">Multiple People
                                    Appointment</label>

                            </div>

                            <div class="flex items-center">

                                <input id="bulk-appointment" type="checkbox"
                                    value="Bulk
                                    Appointment"
                                    class="w-4 h-4 text-brand-600 accent-brand-400 bg-gray-100 border-gray-300 rounded focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    name="bulk-appointment">

                                <label for="bulk-appointment"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">Bulk
                                    Appointment</label>

                            </div>

                        </div>
                    </div>

                    <div>
                        <div class="py-2 px-4 border-b border-neutral-400 mb-4">
                            <h1>AVAILABILITY</h1>
                        </div>
                        <div class="py-2 px-4 text-xs space-y-8">

                            <div class="flex items-center">
                                <input id="availability-1" type="radio" value="" name="availability"
                                    class="w-4 h-4 text-brand-600 accent-brand-400  bg-gray-100 border-gray-300 focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="availability-1"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">Show All</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="availability-2" type="radio" value="available" name="availability"
                                    class="w-4 h-4 text-brand-600 accent-brand-400  bg-gray-100 border-gray-300 focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="availability-2"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">Available
                                    Shops</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="availability-3" type="radio" value="unavailable"
                                    name="availability"
                                    class="w-4 h-4 text-brand-600 accent-brand-400  bg-gray-100 border-gray-300 focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="availability-3"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">Unavailable
                                    Shops</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="py-2 px-4 border-b border-neutral-400 mb-4">
                            <h1>SORT POPULARITY</h1>
                        </div>
                        <div class="py-2 px-4 text-xs space-y-8">
                            <div class="flex items-center">
                                <input id="popularity-1" type="radio" value="month" name="popularity"
                                    class="w-4 h-4 text-brand-600 accent-brand-400  bg-gray-100 border-gray-300 focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="popularity-1"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">This
                                    Month</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="popularity-2" type="radio" value="year" name="popularity"
                                    class="w-4 h-4 text-brand-600 accent-brand-400  bg-gray-100 border-gray-300 focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="popularity-2"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">This Year</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="popularity-3" type="radio" value="unavailable"
                                    name="popularity"
                                    class="w-4 h-4 text-brand-600 accent-brand-400  bg-gray-100 border-gray-300 focus:ring-brand-500 dark:focus:ring-brand-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="popularity-3"
                                    class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">All Time</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid place-items-end">
                    <button class="bg-brand-500 text-white py-2 px-4 rounded-full">Apply Filters</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('assets/js/popular.js') }}"></script>
    @stack('scripts')
</x-user-layout>
