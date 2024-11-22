@php
    $staffs = [
        [
            'name' => 'Jericho Memoracion',
            'email' => 'jericho@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09877896789',
            'dp_path' => 'assets/images/images/jericho.png',
        ],
        [
            'name' => 'Jomark Abello',
            'email' => 'jomark@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09270180602',
            'dp_path' => 'assets/images/images/jomark.png',
        ],
        [
            'name' => 'Ian Alama',
            'email' => 'alamaian@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09270180602',
            'dp_path' => 'assets/images/images/ian.png',
        ],
        [
            'name' => 'Sharief Kundong',
            'email' => 'sharief@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09877896789',
            'dp_path' => 'assets/images/images/sharief.png',
        ],
        [
            'name' => 'Wenwen Cambeli',
            'email' => 'wenwen@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09877896789',
            'dp_path' => 'assets/images/images/herwayne.png',
        ],
    ];
@endphp
<x-shop-layout :user="$user">
    <section class="grid grid-cols-6 gap-4">
        {{-- 1st Row - 1st Column Of the Grid --}}
        <div class=" col-span-4">
            <div class="bg-white p-10 rounded-lg shadow-sm h-full">
                <div class="flex items-center justify-between mb-10">
                    {{-- Box's Title --}}
                    <div class="inline-flex gap-4 items-center">
                        <h1 class="text-4xl font-bold">Branch Manager</h1>
                        <div class="inline-flex gap-2 items-center">
                            <svg class="stroke-black stroke-1 size-5" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.99902 16H4.99902V21M13.999 8H18.999V3M4.58203 9.0034C5.14272 7.61566 6.08146 6.41304 7.29157 5.53223C8.50169 4.65141 9.93588 4.12752 11.4288 4.02051C12.9217 3.9135 14.4138 4.2274 15.7371 4.92661C17.0605 5.62582 18.1603 6.68254 18.9131 7.97612M19.4166 14.9971C18.8559 16.3848 17.9171 17.5874 16.707 18.4682C15.4969 19.3491 14.0642 19.8723 12.5713 19.9793C11.0784 20.0863 9.58509 19.7725 8.26172 19.0732C6.93835 18.374 5.83785 17.3175 5.08496 16.0239"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-lg">CHANGE</span>
                        </div>
                    </div>
                    {{-- Add Branch Manager Button --}}
                    <div>
                        <button
                            class="bg-brand-500 text-white py-2 px-6 rounded-full hover:shadow-md hover:scale-105 transition-transform ease-in-out">
                            Edit Branch Manager
                        </button>
                    </div>
                </div>
                {{-- Branch Manager Details --}}
                <div class="flex items-center justify-between gap-10">
                    <img class="object-cover size-24 rounded-full" src="{{ asset('assets/images/DeanWong.png') }}">
                    <div class="grid flex-1 gap-10" style="grid-template-columns: min-content 1fr">
                        <div class="grid gap-3">
                            <div class="font-bold text-left">Name:</div>
                            <div class="font-bold text-left">Email:</div>
                            <div class="font-bold text-left">Branch:</div>
                            <div class="font-bold text-left text-nowrap">Contact Number:</div>
                        </div>
                        <div class="grid gap-3">
                            <div class="text-left">Dean Wong</div>
                            <div class="text-left">deanwong@gmail.com</div>
                            <div class="text-left">{{ $shopAddress[0]->detailed_address }}</div>
                            <div class="text-left">09877896789</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- 1st Row - 2nd Column of the Grid --}}
        <div class="col-span-2 grid  gap-4">
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="font-bold text-lg">Branch</h1>
                    <button
                        class="bg-brand-500 text-white text-xs py-2 px-6 rounded-full hover:shadow-md hover:scale-105 transition-transform ease-in-out">
                        Add Branch
                    </button>
                </div>
                <div>
                    <h1 class="text-4xl font-bold">{{ $shopAddress[0]->barangay }}, Zamboanga City</h1>
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="font-bold text-lg">Appointments</h1>
                    <svg class="stroke-black stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class=" flex items-center">
                    <h1 class="text-5xl font-bold">11</h1>
                </div>
                <div class=" flex items-center">
                    <button class="inline-flex gap-2 items-center mt-4">
                        <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="">7 Days</span>
                    </button>
                </div>
            </div>

        </div>
        {{-- 2nd Row - 1st Column of the Grid --}}
        <div class="bg-white p-10 rounded-lg shadow-sm col-span-4">
            <div class="flex items-center justify-between mb-20">
                {{-- Box's Title --}}
                <div class="inline-flex gap-4 items-center">
                    <h1 class="text-4xl font-bold">Staff list</h1>
                </div>
                {{-- Add Branch Manager Button --}}
                <div>
                    <button
                        class="bg-brand-500 text-white py-2 px-6 rounded-full hover:shadow-md hover:scale-105 transition-transform ease-in-out">
                        Add New Staffc
                    </button>
                </div>
            </div>
            {{-- Branch Manager Details --}}
            <div class=" h-[30rem] overflow-y-scroll">
                @foreach ($staffs as $staff)
                    <div class="flex justify-between">
                        <div class="flex items-center justify-between gap-10 mb-10">
                            <img class="object-cover size-24 rounded-full" src="{{ asset($staff['dp_path']) }}">
                            <div class="grid flex-1 gap-10" style="grid-template-columns: min-content 1fr">
                                <div class="grid gap-3">
                                    <div class="font-bold text-left">Name:</div>
                                    <div class="font-bold text-left">Email:</div>
                                    <div class="font-bold text-left">Role:</div>
                                    <div class="font-bold text-left text-nowrap">Contact Number:</div>
                                </div>
                                <div class="grid gap-3">
                                    <div class="text-left">{{ $staff['name'] }}</div>
                                    <div class="text-left">{{ $staff['email'] }}</div>
                                    <div class="text-left">{{ $staff['role'] }}</div>
                                    <div class="text-left">{{ $staff['contact_number'] }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mr-4">
                            <div class="flex gap-4">
                                <button>
                                    <svg class="stroke-1 stroke-neutral-500 hover:stroke-black hover:scale-110 transition-transform ease-in-out"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 8.00012L4 16.0001V20.0001L8 20.0001L16 12.0001M12 8.00012L14.8686 5.13146L14.8704 5.12976C15.2652 4.73488 15.463 4.53709 15.691 4.46301C15.8919 4.39775 16.1082 4.39775 16.3091 4.46301C16.5369 4.53704 16.7345 4.7346 17.1288 5.12892L18.8686 6.86872C19.2646 7.26474 19.4627 7.46284 19.5369 7.69117C19.6022 7.89201 19.6021 8.10835 19.5369 8.3092C19.4628 8.53736 19.265 8.73516 18.8695 9.13061L18.8686 9.13146L16 12.0001M12 8.00012L16 12.0001"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button>
                                    <svg class="stroke-neutral-500 hover:stroke-red-500 hover:scale-110 stroke-1 transition-transform ease-in-out"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 10V17M10 10V17M6 6V17.8C6 18.9201 6 19.4798 6.21799 19.9076C6.40973 20.2839 6.71547 20.5905 7.0918 20.7822C7.5192 21 8.07899 21 9.19691 21H14.8031C15.921 21 16.48 21 16.9074 20.7822C17.2837 20.5905 17.5905 20.2839 17.7822 19.9076C18 19.4802 18 18.921 18 17.8031V6M6 6H8M6 6H4M8 6H16M8 6C8 5.06812 8 4.60241 8.15224 4.23486C8.35523 3.74481 8.74432 3.35523 9.23438 3.15224C9.60192 3 10.0681 3 11 3H13C13.9319 3 14.3978 3 14.7654 3.15224C15.2554 3.35523 15.6447 3.74481 15.8477 4.23486C15.9999 4.6024 16 5.06812 16 6M16 6H18M18 6H20"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- 2nd Row - 2nd Column of the Grid --}}
        <div class="bg-white p-10 rounded-lg shadow-sm col-span-2">
            <div class="flex items-center justify-between mb-10">
                <div class="inline-flex items-center gap-2">
                    <h1 class="text-4xl font-bold">Top Services </h1>
                </div>
                <button class="flex items-center gap-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke="black"
                            stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Sort By</span>
                </button>
            </div>
            <div class="border-b py-3 px-4 flex items-center justify-between">
                <h6 class="font-bold">Service</h6>
                <h6 class="font-bold">Total</h6>
            </div>
            <div class="py-3 px-4 flex items-center justify-between">
                <p>Burst Fade ba to ya</p>
                <p>419</p>
            </div>
            @for ($i = 0; $i < 3; $i++)
                <div class="py-3 px-4 flex items-center justify-between">
                    <p>Faded Haircut</p>
                    <p>20</p>
                </div>
                <div class="py-3 px-4 flex items-center justify-between">
                    <p>Regular Haircut</p>
                    <p>20</p>
                </div>
                <div class="py-3 px-4 flex items-center justify-between">
                    <p>Bald</p>
                    <p>20</p>
                </div>
            @endfor

        </div>
    </section>
    <script>
        // SENG DITO MO LANG MUNA ILAGAY ANG JAVASCRIPT. AKO NA BAHALA MAG SET KUNG SAAN ANG LOC NG JS, MINSAN KASI GALOKO
        // ~ ARTURITO

        // Code here
    </script>
</x-shop-layout>
