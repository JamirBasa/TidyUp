<x-shop-layout :user="$user">
    <section>
        <div class="grid grid-cols-5 gap-4 mb-4">
            {{-- General Information Card --}}
            <div class="bg-white p-10 rounded-lg shadow-sm col-span-2">
                <div class="flex items-center justify-between mb-10">
                    <h1 class="text-4xl font-bold">General Information</h1>
                    <a href="">
                        <svg class="stroke-neutral-300 stroke-1 size-10" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 8.00012L4 16.0001V20.0001L8 20.0001L16 12.0001M12 8.00012L14.8686 5.13146L14.8704 5.12976C15.2652 4.73488 15.463 4.53709 15.691 4.46301C15.8919 4.39775 16.1082 4.39775 16.3091 4.46301C16.5369 4.53704 16.7345 4.7346 17.1288 5.12892L18.8686 6.86872C19.2646 7.26474 19.4627 7.46284 19.5369 7.69117C19.6022 7.89201 19.6021 8.10835 19.5369 8.3092C19.4628 8.53736 19.265 8.73516 18.8695 9.13061L18.8686 9.13146L16 12.0001M12 8.00012L16 12.0001"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <div class="mb-4">
                    <h6 class="font-semibold">Owner</h6>
                </div>
                {{-- Basic Owner Info --}}
                <div class="mb-8 flex items-center gap-4">
                    <div class="size-12">
                        <x-user-profile-pic />
                    </div>
                    <div class="flex flex-col gap-1">
                        <h6 class="font-semibold">{{ $user->first_name . ' ' . $user->last_name }}</h6>
                        <p>{{ '@' . $user->username }}</p>
                    </div>
                </div>
                <div class="mb-4 flex items-center gap-8">
                    <div class="flex items-center gap-2">
                        <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 4V2M12 20V22M6.41421 6.41421L5 5M17.728 17.728L19.1422 19.1422M4 12H2M20 12H22M17.7285 6.41421L19.1427 5M6.4147 17.728L5.00049 19.1422M12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Monday - Saturday</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 7V12H17M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>7:00AM - 7:00PM</p>
                    </div>
                </div>
                <div class="mb-4 flex gap-2">
                    <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.50246 4.25722C9.19873 3.4979 8.46332 3 7.64551 3H4.89474C3.8483 3 3 3.8481 3 4.89453C3 13.7892 10.2108 21 19.1055 21C20.1519 21 21 20.1516 21 19.1052L21.0005 16.354C21.0005 15.5361 20.5027 14.8009 19.7434 14.4971L17.1069 13.4429C16.4249 13.1701 15.6483 13.2929 15.0839 13.7632L14.4035 14.3307C13.6089 14.9929 12.4396 14.9402 11.7082 14.2088L9.79222 12.2911C9.06079 11.5596 9.00673 10.3913 9.66895 9.59668L10.2363 8.9163C10.7066 8.35195 10.8305 7.57516 10.5577 6.89309L9.50246 4.25722Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    @foreach ($shops as $shop)
                        <p>{{ $shop->contact_number }}</p>
                    @endforeach
                </div>
                <div class="mb-4 flex gap-2">
                    <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3 12H8M3 12C3 16.9706 7.02944 21 12 21M3 12C3 7.02944 7.02944 3 12 3M8 12H16M8 12C8 16.9706 9.79086 21 12 21M8 12C8 7.02944 9.79086 3 12 3M16 12H21M16 12C16 7.02944 14.2091 3 12 3M16 12C16 16.9706 14.2091 21 12 21M21 12C21 7.02944 16.9706 3 12 3M21 12C21 16.9706 16.9706 21 12 21"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    @foreach ($shops as $shop)
                        <p>{{ $shop->email }}</p>
                    @endforeach
                </div>
                <div class="mb-4 flex gap-2">
                    <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 20H4M4 20H14M4 20V6.2002C4 5.08009 4 4.51962 4.21799 4.0918C4.40973 3.71547 4.71547 3.40973 5.0918 3.21799C5.51962 3 6.08009 3 7.2002 3H10.8002C11.9203 3 12.4796 3 12.9074 3.21799C13.2837 3.40973 13.5905 3.71547 13.7822 4.0918C14 4.5192 14 5.07899 14 6.19691V12M14 20H20M14 20V12M20 20H22M20 20V12C20 11.0681 19.9999 10.6024 19.8477 10.2349C19.6447 9.74481 19.2557 9.35523 18.7656 9.15224C18.3981 9 17.9316 9 16.9997 9C16.0679 9 15.6019 9 15.2344 9.15224C14.7443 9.35523 14.3552 9.74481 14.1522 10.2349C14 10.6024 14 11.0681 14 12M7 10H11M7 7H11"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p>1 Branch/es</p>
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm col-span-3">
                <h1 class="text-4xl font-bold mb-10">Shop Gallery</h1>
                <div class="grid grid-cols-4 gap-4">
                    {{-- Gallery-contents --}}
                    <div id="gallery-"class="contents">
                        <div class="h-36 rounded-xl overflow-hidden">
                            <img class="h-full w-full object-cover rounded-xl"
                                src="{{ asset('assets/images/shops/1.png') }}">
                        </div>
                        <div class="h-36 rounded-xl overflow-hidden">
                            <img class="h-full w-full    object-cover rounded-xl"
                                src="{{ asset('assets/images/shops/1.png') }}">
                        </div>
                        <div class="h-36 rounded-xl overflow-hidden">
                            <img class="h-full w-full    object-cover rounded-xl"
                                src="{{ asset('assets/images/shops/1.png') }}">
                        </div>
                        <div class="h-36 rounded-xl overflow-hidden">
                            <img class="h-full w-full    object-cover rounded-xl"
                                src="{{ asset('assets/images/shops/1.png') }}">
                        </div>
                    </div>
                    {{-- Add Images Button --}}
                    <button
                        class="h-36 rounded-xl overflow-hidden bg-neutral-100 flex flex-col items-center justify-center">
                        <svg class="stroke-neutral-400 stroke-1 size-14" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12H12M12 12H18M12 12V18M12 12V6" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="text-neutral-400">Add Image</p>
                    </button>
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm col-span-2 flex items-start   gap-10">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-8xl font-bold mb-4">4.9</h1>
                    {{-- Star Rating --}}
                    <div class="flex items-start gap-1 mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="stroke-black stroke-1 fill-black size-4" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        @endfor
                    </div>
                    <p class="text-lg">1400 reviews</p>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    @php
                        $barSizes = [0, 20, 10, 0, 50, 95];
                    @endphp
                    @for ($i = 5; $i > 0; $i--)
                        <div class="flex items-center gap-3">
                            <span class="text-lg">{{ $i }}</span>
                            <div class="flex-1 relative">
                                <div class="bg-neutral-300 w-[100%] h-3 rounded-full"></div>
                                <div style="width: {{ $barSizes[$i] }}%"
                                    class="bg-brand-300 h-3 rounded-full absolute top-0 bottom-0">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm col-span-3">
                <p>Shop</p>
                <h1 class="text-4xl font-bold mb-10">Branch Locations</h1>
                <div>
                    <div class="flex flex-wrap gap-4">
                        <div class="border-1 border p-4 rounded-xl">
                            <p>{{ $shopAddress[0]->detailed_address }}</p>
                        </div>
                        <div class="border-1 border p-4 rounded-xl">
                            <p>3rd Floor, KCC Mall de Zamboanga.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="bg-white p-10 rounded-lg shadow-sm w-full">
                <p>Available</p>
                <h1 class="text-4xl font-bold mb-10">Type of Services</h1>
                <div class="flex flex-wrap gap-4">
                    <div class="border-1 border p-4 rounded-xl flex items-center gap-1">
                        <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18 19C18 16.7909 15.3137 15 12 15C8.68629 15 6 16.7909 6 19M12 12C9.79086 12 8 10.2091 8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8C16 10.2091 14.2091 12 12 12Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Solo Appointment</p>
                    </div>
                    <div class="border-1 border p-4 rounded-xl flex items-center gap-1">
                        <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 19.9999C21 18.2583 19.3304 16.7767 17 16.2275M15 20C15 17.7909 12.3137 16 9 16C5.68629 16 3 17.7909 3 20M15 13C17.2091 13 19 11.2091 19 9C19 6.79086 17.2091 5 15 5M9 13C6.79086 13 5 11.2091 5 9C5 6.79086 6.79086 5 9 5C11.2091 5 13 6.79086 13 9C13 11.2091 11.2091 13 9 13Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Multiple People Appointment</p>
                    </div>
                    <div class="border-1 border p-4 rounded-xl flex items-center gap-1">
                        <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 20C17 18.3431 14.7614 17 12 17C9.23858 17 7 18.3431 7 20M21 17.0004C21 15.7702 19.7659 14.7129 18 14.25M3 17.0004C3 15.7702 4.2341 14.7129 6 14.25M18 10.2361C18.6137 9.68679 19 8.8885 19 8C19 6.34315 17.6569 5 16 5C15.2316 5 14.5308 5.28885 14 5.76389M6 10.2361C5.38625 9.68679 5 8.8885 5 8C5 6.34315 6.34315 5 8 5C8.76835 5 9.46924 5.28885 10 5.76389M12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Bulk Appointment</p>
                    </div>
                    <button class="border-1 border p-4 rounded-xl flex items-center gap-1">
                        <svg class="stroke-neutral-300 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 8.00012L4 16.0001V20.0001L8 20.0001L16 12.0001M12 8.00012L14.8686 5.13146L14.8704 5.12976C15.2652 4.73488 15.463 4.53709 15.691 4.46301C15.8919 4.39775 16.1082 4.39775 16.3091 4.46301C16.5369 4.53704 16.7345 4.7346 17.1288 5.12892L18.8686 6.86872C19.2646 7.26474 19.4627 7.46284 19.5369 7.69117C19.6022 7.89201 19.6021 8.10835 19.5369 8.3092C19.4628 8.53736 19.265 8.73516 18.8695 9.13061L18.8686 9.13146L16 12.0001M12 8.00012L16 12.0001"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Edit</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="bg-white p-10 rounded-lg shadow-sm w-full">
                <h1 class="text-4xl font-bold mb-10">Branch Managers</h1>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <div class="mb-8">
                            <img class="size-20 rounded-full object-cover"
                                src="{{ asset('assets/images/DeanWong.png') }}" />
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Name:</h6>
                            <p class="col-span-4">Dean Wong</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Email:</h6>
                            <p class="col-span-4">deanwong@gmail.com</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Branch:</h6>
                            <p class="col-span-4">{{ $shopAddress[0]->detailed_address }}</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Contact Number:</h6>
                            <p class="col-span-4">09877896789</p>
                        </div>
                    </div>
                    <div>
                        <div class="mb-8">
                            <img class="size-20 rounded-full object-cover"
                                src="{{ asset('assets/images/PaulDaveCadiz.png') }}" />
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Name:</h6>
                            <p class="col-span-4">Paul Dave Cadiz</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Email:</h6>
                            <p class="col-span-4">mixman@gmail.com</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Branch:</h6>
                            <p class="col-span-4">3rd Floor, KCC Mall de Zamboanga.</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Contact Number:</h6>
                            <p class="col-span-4">09981234654</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center justify-between mb-10">
                    <div class="inline-flex items-center gap-2">
                        <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
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
                    <p>Regular Haircut</p>
                    <p>44</p>
                </div>
                <div class="py-3 px-4 flex items-center justify-between">
                    <p>Faded Haircut</p>
                    <p>20</p>
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center justify-between mb-10">
                    <div class="inline-flex items-center gap-2">
                        <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
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
                    <h6 class="font-bold">Branch</h6>
                    <h6 class="font-bold">Earning in Percentage</h6>
                </div>
                <div class="py-3 px-4 flex items-center justify-between">
                    <p>KCC Branch</p>
                    <p>73%</p>
                </div>
                <div class="py-3 px-4 flex items-center justify-between">
                    <p>{{ $shopAddress[0]->barangay }} Branch</p>
                    <p>27%</p>
                </div>
            </div>
        </div>
    </section>
</x-shop-layout>
