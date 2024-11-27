<x-shop-layout :user="$user" :userrole="$userrole">
    <div class="bg-white p-10 rounded-lg shadow-sm mb-4 flex items-center justify-between">
        <div>
            <h6>Your Shop</h6>
            @foreach ($shops as $shop)
                <h1 class="text-4xl font-bold">{{ $shop->shop_name }}</h1>
            @endforeach
            {{-- <p>{{ $shopBranches[0]->city }}</p> --}}
        </div>
        <div class="flex items-center gap-4">
            <div>

                @if ($user->first_name && $user->last_name)
                    <div class="text-right font-semibold">{{ $user->first_name . ' ' . $user->last_name }}</div>
                @else
                    <div class="text-right font-semibold">{{ $user->username }}</div>
                @endif
                <div class="text-right text-sm">{{ '@' . $user->username }}</div>
            </div>
            <div class=" size-14">
                <x-user-profile-pic />
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="bg-white p-10 rounded-lg shadow-sm relative">
            <img class="lazyload absolute top-10 right-10" src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}"
                alt="icon">
            <h6 class="font-semibold mb-2">Recent Income</h6>
            <h1 class="text-4xl font-bold mb-3">&#8369;0</h1>
            <div class="relative flex items-center">
                <img class="lazyload absolute" src="{{ asset('assets/Icons/Arrow/Caret_Down_MD.svg') }}" alt="">
                <select name="" id="" class="focus:outline-none px-8 ">
                    <option value="">7 Days</option>
                    <option value="">Month</option>
                    <option value="">Year</option>
                </select>
            </div>
            <!-- analytics -->
            <div class="w-full p-4 bg-white">
                <svg viewBox="0 0 600 300" class="w-full h-auto">
                    <!-- Grid lines -->
                    <line x1="40" y1="40" x2="560" y2="40" class="stroke-gray-200" />
                    <line x1="40" y1="80" x2="560" y2="80" class="stroke-gray-200" />
                    <line x1="40" y1="120" x2="560" y2="120" class="stroke-gray-200" />
                    <line x1="40" y1="160" x2="560" y2="160" class="stroke-gray-200" />
                    <line x1="40" y1="200" x2="560" y2="200" class="stroke-gray-200" />
                    <line x1="40" y1="240" x2="560" y2="240" class="stroke-gray-200" />
                    <line x1="40" y1="260" x2="560" y2="260" class="stroke-gray-200" />

                    <!-- Line chart -->
                    <path d="M 40 260 L 130 260 L 220 260 L 310 260 L 400 260 L 490 260 L 560 260"
                        class="stroke-brand-500 stroke-2 fill-none" />

                    <!-- Data points -->
                    <circle cx="40" cy="260" r="3" class="fill-brand-500" />
                    <circle cx="130" cy="260" r="3" class="fill-brand-500" />
                    <circle cx="220" cy="260" r="3" class="fill-brand-500" />
                    <circle cx="310" cy="260" r="3" class="fill-brand-500" />
                    <circle cx="400" cy="260" r="3" class="fill-brand-500" />
                    <circle cx="490" cy="260" r="3" class="fill-brand-500" />
                    <circle cx="560" cy="260 r="3" class="fill-brand-500" />

                    <!-- X-axis labels -->
                    <text x="40" y="280" class="text-xs fill-gray-500">1</text>
                    <text x="130" y="280" class="text-xs fill-gray-500">2</text>
                    <text x="220" y="280" class="text-xs fill-gray-500">3</text>
                    <text x="310" y="280" class="text-xs fill-gray-500">4</text>
                    <text x="400" y="280" class="text-xs fill-gray-500">5</text>
                    <text x="490" y="280" class="text-xs fill-gray-500">6</text>
                    <text x="560" y="280" class="text-xs fill-gray-500">7</text>

                    <!-- Y-axis labels -->
                    <text x="30" y="260" class="text-xs fill-gray-500" text-anchor="end">0</text>
                    <text x="30" y="45" class="text-xs fill-gray-500" text-anchor="end">15000</text>
                    <text x="30" y="85" class="text-xs fill-gray-500" text-anchor="end">10000</text>
                    <text x="30" y="125" class="text-xs fill-gray-500" text-anchor="end">5000</text>
                    <text x="30" y="165" class="text-xs fill-gray-500" text-anchor="end">2500</text>
                    <text x="30" y="205" class="text-xs fill-gray-500" text-anchor="end">1000</text>
                    <text x="30" y="245" class="text-xs fill-gray-500" text-anchor="end">500</text>
                </svg>
            </div>
        </div>
        <div class="bg-white p-10 rounded-lg shadow-sm relative">
            <img class="lazyload absolute top-10 right-10"
                src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}" alt="icon">
            <h6 class="font-semibold mb-2">Appointments</h6>
            <h1 class="text-4xl font-bold mb-8">Awaiting Approval</h1>

            {{-- Upcoming Appointments --}}

            {{-- Profile Card --}}
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center gap-8">
                    <img class="lazyload size-14 object-cover rounded-full"
                        src="{{ asset('assets/images/huesca.png') }}" alt="">
                    <div>
                        <p class="text-xs mb-2">Single Appointment</p>
                        <p class="font-semibold">Anthony Billedo</p>
                    </div>
                </div>
                <div>
                    <p class="opacity-60 text-sm text-right">Divisoria Branch</p>
                    <p class="opacity-60 text-sm text-right">Mon, Nov 27, 2024</p>
                    <p class="opacity-60 text-sm text-right">11:00 AM</p>
                </div>
            </div>
            {{-- Profile Card End --}}
            {{-- Profile Card --}}
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center gap-8">
                    <img class="lazyload size-14 object-cover rounded-full"
                        src="{{ asset('assets/images/Dean.png') }}" alt="">
                    <div>
                        <p class="text-xs mb-2">Single Appointment</p>
                        <p class="font-semibold">Reight Huesca</p>
                    </div>
                </div>
                <div>
                    <p class="opacity-60 text-sm text-right">Oppere Calarian Branch</p>
                    <p class="opacity-60 text-sm text-right">Wed, Nov 29, 2024</p>
                    <p class="opacity-60 text-sm text-right">4:00PM</p>
                </div>
            </div>
            {{-- Profile Card End --}}


        </div>
    </div>
    <div class="bg-white p-10 rounded-lg shadow-sm relative mb-4">
        <img class="lazyload absolute top-10 right-10" src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}"
            alt="icon">
        <h6 class="font-semibold mb-2">Upcoming</h6>
        <h1 class="text-4xl font-bold mb-8">Appointments</h1>

        {{-- Upcoming Appointments --}}

        {{-- Profile Card --}}
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center gap-8">
                <img class="lazyload size-14 object-cover rounded-full" src="{{ asset('assets/images/huesca.png') }}"
                    alt="">
                <div>
                    <p class="text-xs mb-2">Single Appointment</p>
                    <p class="font-semibold">Anthony Billedo</p>
                </div>
            </div>
            <div>
                <p class="opacity-60 text-sm text-right">Divisoria Branch</p>
                <p class="opacity-60 text-sm text-right">Mon, Nov 27, 2024</p>
                <p class="opacity-60 text-sm text-right">11:00 AM</p>
            </div>
        </div>
        {{-- Profile Card End --}}
        {{-- Profile Card --}}
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center gap-8">
                <img class="lazyload size-14 object-cover rounded-full" src="{{ asset('assets/images/Dean.png') }}"
                    alt="">
                <div>
                    <p class="text-xs mb-2">Single Appointment</p>
                    <p class="font-semibold">Reight Huesca</p>
                </div>
            </div>
            <div>
                <p class="opacity-60 text-sm text-right">Oppere Calarian Branch</p>
                <p class="opacity-60 text-sm text-right">Wed, Nov 29, 2024</p>
                <p class="opacity-60 text-sm text-right">4:00PM</p>
            </div>
        </div>
        {{-- Profile Card End --}}
    </div>
    <!-- grid with 2 columns -->
    <div class="grid grid-cols-2 gap-4 mb-4">
        <!-- card -->
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm">
            <div class="flex items-center justify-between mb-10">
                <div class="flex items-center gap-2">
                    <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h2 class="text-4xl font-semibold">Customers</h2>
                </div>
                <button class="flex items-center gap-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke="black"
                            stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span>Sort by</span>
                </button>
            </div>
            <div class="flex items-center justify-between border-b-2 p-3">
                <div class="font-semibold">Username</div>
                <div class="font-semibold">Date Created</div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">Anthony Labang</div>
                <div class="opacity-70">10/5/24</div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">Zachary Batumbakal</div>
                <div class="opacity-70">10/5/24</div>
            </div>
        </div>

        <!-- card -->
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm">
            <div class="flex items-center justify-between mb-10">
                <div class="flex items-center gap-2">
                    <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h2 class="text-4xl font-semibold">Branch</h2>
                </div>
                <button class="flex items-center gap-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke="black"
                            stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span>Sort by</span>
                </button>
            </div>
            <div class="flex items-center justify-between border-b-2 p-3">
                <div class="font-semibold">Branch Name</div>
                <div class="font-semibold">Date Created</div>
            </div>
            @foreach ($shopBranches as $branch)
                <div class="flex items-center justify-between p-3">
                    <div class="opacity-70">{{ $branch->branch_name }}</div>
                    <div class="opacity-70">{{ \Carbon\Carbon::parse($branch->created_at)->format('F d, Y') }}</div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- grid with 2 columns -->

</x-shop-layout>
