@php
    $appointments = [
        [
            'name' => 'Ian Cawili',
            'type' => 'Single Appointment',
            'date' => 'Mon, Nov 27, 2024',
            'time' => '7:00 AM - 7:45 AM',
            'status' => 'NO-SHOW',
            'status_class' => 'text-noshows-main bg-noshows-light',
        ],
        [
            'name' => 'John Doe',
            'type' => 'Single Appointment',
            'date' => 'Tue, Nov 28, 2024',
            'time' => '8:00 AM - 8:45 AM',
            'status' => 'COMPLETED',
            'status_class' => 'text-completed-main bg-completed-light',
        ],
        [
            'name' => 'Jane Smith',
            'type' => 'Single Appointment',
            'date' => 'Wed, Nov 29, 2024',
            'time' => '9:00 AM - 9:45 AM',
            'status' => 'COMPLETED',
            'status_class' => 'text-completed-main bg-completed-light',
        ],
        [
            'name' => 'Alice Johnson',
            'type' => 'Single Appointment',
            'date' => 'Thu, Nov 30, 2024',
            'time' => '10:00 AM - 10:45 AM',
            'status' => 'ONGOING',
            'status_class' => 'text-ongoing-main bg-ongoing-light',
        ],
        [
            'name' => 'Bob Brown',
            'type' => 'Single Appointment',
            'date' => 'Fri, Dec 1, 2024',
            'time' => '11:00 AM - 11:45 AM',
            'status' => 'CANCELLED',
            'status_class' => 'text-cancelled-main bg-cancelled-light',
        ],
        [
            'name' => 'Charlie Davis',
            'type' => 'Single Appointment',
            'date' => 'Sat, Dec 2, 2024',
            'time' => '12:00 PM - 12:45 PM',
            'status' => 'ONGOING',
            'status_class' => 'text-ongoing-main bg-ongoing-light',
        ],
        [
            'name' => 'Diana Evans',
            'type' => 'Single Appointment',
            'date' => 'Sun, Dec 3, 2024',
            'time' => '1:00 PM - 1:45 PM',
            'status' => 'UPCOMING',
            'status_class' => 'text-upcoming-main bg-upcoming-light',
        ],
        [
            'name' => 'Eve Foster',
            'type' => 'Single Appointment',
            'date' => 'Mon, Dec 4, 2024',
            'time' => '2:00 PM - 2:45 PM',
            'status' => 'UPCOMING',
            'status_class' => 'text-upcoming-main bg-upcoming-light',
        ],
        [
            'name' => 'Frank Green',
            'type' => 'Single Appointment',
            'date' => 'Tue, Dec 5, 2024',
            'time' => '3:00 PM - 3:45 PM',
            'status' => 'UPCOMING',
            'status_class' => 'text-upcoming-main bg-upcoming-light',
        ],
        [
            'name' => 'Grace Harris',
            'type' => 'Single Appointment',
            'date' => 'Wed, Dec 6, 2024',
            'time' => '4:00 PM - 4:45 PM',
            'status' => 'UPCOMING',
            'status_class' => 'text-upcoming-main bg-upcoming-light',
        ],
    ];
    $users = [
        [
            'name' => 'Anthony Billedo',
            'username' => '@billintony',
            'dp_path' => 'huesca.png',
        ],
        [
            'name' => 'Reight Huesca',
            'username' => '@weskadean',
            'dp_path' => 'Dean.png',
        ],
        [
            'name' => 'Herwayne Alama',
            'username' => '@herwenwen',
            'dp_path' => 'herwayne.png',
        ],
        [
            'name' => 'Ian Jimenez',
            'username' => '@renaldino',
            'dp_path' => 'ian.png',
        ],
    ];
@endphp
<x-shop-layout :user="$user" :userrole="$userRole">
    <section class="space-y-4">
        <div class="flex gap-4">
            <div class="grid gap-4 shadow-sm flex-1">
                {{-- Branch Info Wrapper --}}
                <div class="bg-white p-6 rounded-lg ">
                    <div class="border-b pb-4 px-6 -mx-6 mb-4">
                        <h1 class="font-bold">Branch Information</h1>
                    </div>
                    <p class="mb-4">Current Branch: {{ $shopBranches[0]->branch_name }}</p>
                    <p class="mb-4">Branch Manager: Dean Wong</p>
                    <p class="mb-4">Appointments: 12</p>
                    <p class="">Location: {{ $shopBranches[0]->detailed_address }}</p>

                </div>
                {{-- View As Wrapper --}}
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="border-b pb-4 px-6 -mx-6 mb-4 flex items-center justify-between">
                        <h1 class="font-bold">Viewed as</h1>
                        <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="size-16">
                            <x-user-profile-pic />
                        </div>
                        <div class="grid gap-2">
                            @if ($shopOwner[0]->first_name && $shopOwner[0]->last_name)
                                <p class="font-bold">{{ $shopOwner[0]->first_name + ' ' + $shopOwner[0]->last_name }}
                                </p>
                            @else
                                <p class="font-bold">{{ $shopOwner[0]->username }}</p>
                            @endif
                            <p>Shop Owner</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Appointment Calendar Wrapper --}}
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="border-b pb-4 px-6 -mx-6 mb-4">
                    <h1 class="font-bold">Calendar</h1>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <button id="prevMonth" class="p-2 hover:bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="currentMonth" class="text-sm font-medium"></div>
                    <button id="nextMonth" class="p-2 hover:bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Calendar grid -->
                <div class="grid grid-cols-7 gap-1">
                    <!-- Weekday headers -->
                    <div class="text-center text-xs text-gray-500">Mo</div>
                    <div class="text-center text-xs text-gray-500">Tu</div>
                    <div class="text-center text-xs text-gray-500">We</div>
                    <div class="text-center text-xs text-gray-500">Th</div>
                    <div class="text-center text-xs text-gray-500">Fr</div>
                    <div class="text-center text-xs text-gray-500">Sa</div>
                    <div class="text-center text-xs text-gray-500">Su</div>

                    <!-- Calendar days will be inserted here -->
                    <div id="calendarDays" class="col-span-7 grid grid-cols-7 gap-1 place-items-center"></div>
                </div>

                <!-- Selected date display -->
                <div id="selectedDate" class="mt-4 text-sm text-gray-600"></div>
            </div>
            {{-- Pending Approval Wrapper --}}
            <div class="bg-white p-6 rounded-lg shadow-sm flex-1">
                <div class="border-b pb-4 px-6 -mx-6 mb-4 flex items-center justify-between">
                    <h1 class="font-bold">Pending Appointment Approval</h1>
                    <button id="open-pending-btn">
                        <svg class="stroke-black stroke-2 cursor-pointer" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="relative inline-flex items-center mb-4">
                    <svg class="stroke-1 stroke-black absolute left-3 size-4" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 5.6001C20 5.04005 19.9996 4.75981 19.8906 4.5459C19.7948 4.35774 19.6423 4.20487 19.4542 4.10899C19.2403 4 18.9597 4 18.3996 4H5.59961C5.03956 4 4.75981 4 4.5459 4.10899C4.35774 4.20487 4.20487 4.35774 4.10899 4.5459C4 4.75981 4 5.04005 4 5.6001V6.33736C4 6.58195 4 6.70433 4.02763 6.81942C4.05213 6.92146 4.09263 7.01893 4.14746 7.1084C4.20928 7.20928 4.29591 7.29591 4.46875 7.46875L9.53149 12.5315C9.70443 12.7044 9.79044 12.7904 9.85228 12.8914C9.90711 12.9808 9.94816 13.0786 9.97266 13.1807C10 13.2946 10 13.4155 10 13.6552V18.411C10 19.2682 10 19.6971 10.1805 19.9552C10.3382 20.1806 10.5814 20.331 10.8535 20.3712C11.1651 20.4172 11.5487 20.2257 12.3154 19.8424L13.1154 19.4424C13.4365 19.2819 13.5966 19.2013 13.7139 19.0815C13.8176 18.9756 13.897 18.8485 13.9453 18.7084C14 18.5499 14 18.37 14 18.011V13.6626C14 13.418 14 13.2958 14.0276 13.1807C14.0521 13.0786 14.0926 12.9808 14.1475 12.8914C14.2089 12.7911 14.2947 12.7053 14.4653 12.5347L14.4688 12.5315L19.5315 7.46875C19.7044 7.2958 19.7904 7.20932 19.8523 7.1084C19.9071 7.01893 19.9482 6.92146 19.9727 6.81942C20 6.70551 20 6.58444 20 6.3448V5.6001Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <select class="border shadow-md w-[10rem] py-2 px-8 rounded-lg text-xs" id="branchSelect"
                        name="branch">
                        <option value="">All Branch</option>
                        @foreach ($shopBranches as $shopBranch)
                            <option value="{{ $shopBranch->branch_name }}">{{ $shopBranch->branch_name }}</option>
                        @endforeach
                    </select>
                    <svg id="caret-down4" class="absolute stroke-black stroke-1 right-3 pointer-events-none"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="h-[15rem]  space-y-6 ">
                    {{-- Profile Card --}}
                    <div class="flex items-center justify-between ">
                        <div class="flex items-center gap-8">
                            <img class="lazyload size-14 object-cover rounded-full"
                                src="{{ asset('assets/images/huesca.png') }}" alt="">
                            <div>
                                <p class="text-xs ">Single Appointment</p>
                                <p class="font-semibold">Anthony Billedo</p>
                                <p class="text-xs opacity-60 ">Click to check appointment information</p>
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
                    <div class="flex items-center justify-between ">
                        <div class="flex items-center gap-8">
                            <img class="lazyload size-14 object-cover rounded-full"
                                src="{{ asset('assets/images/Dean.png') }}" alt="">
                            <div>
                                <p class="text-xs">Single Appointment</p>
                                <p class="font-semibold">Reight Huesca</p>
                                <p class="text-xs opacity-60">Click to check appointment information</p>
                            </div>
                        </div>
                        <div>
                            <p class="opacity-60 text-sm text-right">Upper Calarian Branch</p>
                            <p class="opacity-60 text-sm text-right">Wed, Nov 29, 2024</p>
                            <p class="opacity-60 text-sm text-right">4:00PM</p>
                        </div>
                    </div>
                    {{-- Profile Card End --}}
                    {{-- Profile Card --}}
                    <div class="flex items-center justify-between ">
                        <div class="flex items-center gap-8">
                            <img class="lazyload size-14 object-cover rounded-full"
                                src="{{ asset('assets/images/huesca.png') }}" alt="">
                            <div>
                                <p class="text-xs ">Single Appointment</p>
                                <p class="font-semibold">Anthony Billedo</p>
                                <p class="text-xs opacity-60 ">Click to check appointment information</p>
                            </div>
                        </div>
                        <div>
                            <p class="opacity-60 text-sm text-right">Divisoria Branch</p>
                            <p class="opacity-60 text-sm text-right">Mon, Nov 27, 2024</p>
                            <p class="opacity-60 text-sm text-right">11:00 AM</p>
                        </div>
                    </div>
                    {{-- Profile Card End --}}

                </div>
            </div>
        </div>
        {{-- Appoinments Table --}}
        <div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex gap-4 justify-between items-center mb-4">
                    {{-- Select --}}
                    <div class="relative inline-flex items-center">
                        <svg class="stroke-1 stroke-black absolute left-3 size-4" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 5.6001C20 5.04005 19.9996 4.75981 19.8906 4.5459C19.7948 4.35774 19.6423 4.20487 19.4542 4.10899C19.2403 4 18.9597 4 18.3996 4H5.59961C5.03956 4 4.75981 4 4.5459 4.10899C4.35774 4.20487 4.20487 4.35774 4.10899 4.5459C4 4.75981 4 5.04005 4 5.6001V6.33736C4 6.58195 4 6.70433 4.02763 6.81942C4.05213 6.92146 4.09263 7.01893 4.14746 7.1084C4.20928 7.20928 4.29591 7.29591 4.46875 7.46875L9.53149 12.5315C9.70443 12.7044 9.79044 12.7904 9.85228 12.8914C9.90711 12.9808 9.94816 13.0786 9.97266 13.1807C10 13.2946 10 13.4155 10 13.6552V18.411C10 19.2682 10 19.6971 10.1805 19.9552C10.3382 20.1806 10.5814 20.331 10.8535 20.3712C11.1651 20.4172 11.5487 20.2257 12.3154 19.8424L13.1154 19.4424C13.4365 19.2819 13.5966 19.2013 13.7139 19.0815C13.8176 18.9756 13.897 18.8485 13.9453 18.7084C14 18.5499 14 18.37 14 18.011V13.6626C14 13.418 14 13.2958 14.0276 13.1807C14.0521 13.0786 14.0926 12.9808 14.1475 12.8914C14.2089 12.7911 14.2947 12.7053 14.4653 12.5347L14.4688 12.5315L19.5315 7.46875C19.7044 7.2958 19.7904 7.20932 19.8523 7.1084C19.9071 7.01893 19.9482 6.92146 19.9727 6.81942C20 6.70551 20 6.58444 20 6.3448V5.6001Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <select class="border shadow-md w-[10rem] py-2 px-8 rounded-lg text-xs" id="branchSelect"
                            name="branch">
                            @foreach ($shopBranches as $shopBranch)
                                <option value="{{ $shopBranch->branch_name }}">{{ $shopBranch->branch_name }}
                                </option>
                            @endforeach

                        </select>
                        <svg id="caret-down4" class="absolute stroke-black stroke-1 right-3 pointer-events-none"
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h1 id="selectedDateDisplay" class="font-bold text-lg">November 23, 2024</h1>

                    <button id="create-appointments-open-btn"
                        class="text-xs bg-brand-500 text-white py-2 px-8 rounded-lg shadow-md">
                        Create new appointment
                    </button>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg border">
                    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-900 uppercase bg-white border-b dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Client Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Type
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($appointments as $appointment)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $appointment['name'] }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $appointment['type'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $appointment['date'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $appointment['time'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="{{ $appointment['status_class'] }} font-bold px-2 rounded-full">{{ $appointment['status'] }}</span>
                                    </td>
                                    <td class="px-6 py-4 space-x-4">
                                        <button href="#"
                                            class="font-medium text-brand-400 dark:text-brand-400 hover:underline">Edit</button>
                                        <button href="#"
                                            class="font-medium text-brand-400 dark:text-brand-400 hover:underline">View
                                            Details</button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    {{-- MODALSSS --}}
    {{-- First Modal --}}
    <div id="pending-appointments-popover"
        class="fixed top-0 bottom-0 left-0 right-0 z-50 backdrop-brightness-50 place-items-center hidden">
        <div id="pending-appointments-popover-content"
            class="bg-white max-w-screen-lg w-full mx-auto p-10 rounded-lg shadow-lg relative">
            <div>
                <h6 class="font-bold">Appointments</h6>
                <h1 class="font-bold text-4xl">Pending Approvals</h1>
                <button id="close-button">
                    <svg class="absolute top-10 right-10" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="relative inline-flex items-center mb-4">
                <svg class="stroke-1 stroke-black absolute left-3 size-4" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 5.6001C20 5.04005 19.9996 4.75981 19.8906 4.5459C19.7948 4.35774 19.6423 4.20487 19.4542 4.10899C19.2403 4 18.9597 4 18.3996 4H5.59961C5.03956 4 4.75981 4 4.5459 4.10899C4.35774 4.20487 4.20487 4.35774 4.10899 4.5459C4 4.75981 4 5.04005 4 5.6001V6.33736C4 6.58195 4 6.70433 4.02763 6.81942C4.05213 6.92146 4.09263 7.01893 4.14746 7.1084C4.20928 7.20928 4.29591 7.29591 4.46875 7.46875L9.53149 12.5315C9.70443 12.7044 9.79044 12.7904 9.85228 12.8914C9.90711 12.9808 9.94816 13.0786 9.97266 13.1807C10 13.2946 10 13.4155 10 13.6552V18.411C10 19.2682 10 19.6971 10.1805 19.9552C10.3382 20.1806 10.5814 20.331 10.8535 20.3712C11.1651 20.4172 11.5487 20.2257 12.3154 19.8424L13.1154 19.4424C13.4365 19.2819 13.5966 19.2013 13.7139 19.0815C13.8176 18.9756 13.897 18.8485 13.9453 18.7084C14 18.5499 14 18.37 14 18.011V13.6626C14 13.418 14 13.2958 14.0276 13.1807C14.0521 13.0786 14.0926 12.9808 14.1475 12.8914C14.2089 12.7911 14.2947 12.7053 14.4653 12.5347L14.4688 12.5315L19.5315 7.46875C19.7044 7.2958 19.7904 7.20932 19.8523 7.1084C19.9071 7.01893 19.9482 6.92146 19.9727 6.81942C20 6.70551 20 6.58444 20 6.3448V5.6001Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <select class="border shadow-md w-[10rem] py-2 px-8 rounded-lg text-xs" id="branchSelect"
                    name="branch">
                    <option value="">All Branch</option>
                    @foreach ($shopBranches as $shopBranch)
                        <option value="{{ $shopBranch->branch_name }}">{{ $shopBranch->branch_name }}</option>
                    @endforeach
                </select>
                <svg id="caret-down4" class="absolute stroke-black stroke-1 right-3 pointer-events-none"
                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="h-[15rem] overflow-y-scroll border shadow-md p-3 space-y-6 rounded-lg">
                {{-- Profile Card --}}
                <div class="flex items-center justify-between ">
                    <div class="flex items-center gap-8">
                        <img class="lazyload size-14 object-cover rounded-full"
                            src="{{ asset('assets/images/huesca.png') }}" alt="">
                        <div>
                            <p class="text-xs ">Single Appointment</p>
                            <p class="font-semibold">Anthony Billedo</p>
                            <p class="text-xs opacity-60 ">Click to check appointment information</p>
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
                <div class="flex items-center justify-between ">
                    <div class="flex items-center gap-8">
                        <img class="lazyload size-14 object-cover rounded-full"
                            src="{{ asset('assets/images/Dean.png') }}" alt="">
                        <div>
                            <p class="text-xs">Single Appointment</p>
                            <p class="font-semibold">Reight Huesca</p>
                            <p class="text-xs opacity-60">Click to check appointment information</p>
                        </div>
                    </div>
                    <div>
                        <p class="opacity-60 text-sm text-right">Upper Calarian Branch</p>
                        <p class="opacity-60 text-sm text-right">Wed, Nov 29, 2024</p>
                        <p class="opacity-60 text-sm text-right">4:00PM</p>
                    </div>
                </div>
                {{-- Profile Card End --}}
                {{-- Profile Card --}}
                <div class="flex items-center justify-between ">
                    <div class="flex items-center gap-8">
                        <img class="lazyload size-14 object-cover rounded-full"
                            src="{{ asset('assets/images/huesca.png') }}" alt="">
                        <div>
                            <p class="text-xs ">Single Appointment</p>
                            <p class="font-semibold">Anthony Billedo</p>
                            <p class="text-xs opacity-60 ">Click to check appointment information</p>
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
                <div class="flex items-center justify-between ">
                    <div class="flex items-center gap-8">
                        <img class="lazyload size-14 object-cover rounded-full"
                            src="{{ asset('assets/images/Dean.png') }}" alt="">
                        <div>
                            <p class="text-xs">Single Appointment</p>
                            <p class="font-semibold">Reight Huesca</p>
                            <p class="text-xs opacity-60">Click to check appointment information</p>
                        </div>
                    </div>
                    <div>
                        <p class="opacity-60 text-sm text-right">Upper Calarian Branch</p>
                        <p class="opacity-60 text-sm text-right">Wed, Nov 29, 2024</p>
                        <p class="opacity-60 text-sm text-right">4:00PM</p>
                    </div>
                </div>
                {{-- Profile Card End --}}
            </div>
        </div>
    </div>
    {{-- Create Appointment Modal --}}
    <div id="create-appointments-popover"
        class="fixed top-0 bottom-0 left-0 right-0 z-50 backdrop-brightness-50 place-items-center hidden">
        <div id="create-appointments-popover-content" class="bg-white w-[40rem] p-10 rounded-lg shadow-lg relative">
            <div>
                <h6 class="font-bold">Appointment</h6>
                <h1 class="font-bold text-4xl">Create New Appointment</h1>
                <button id="close-button2">
                    <svg class="absolute top-10 right-10" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <button id="existing-account-btn">
                    <div
                        class="text-balance border rounded-lg px-2 py-4 hover:outline hover:outline-black hover:outline-2">
                        <div class="grid place-items-center">
                            <h1 class="font-bold">
                                Book for Existing Account
                            </h1>
                        </div>
                        <div class="grid place-items-center">
                            <img class="w-full aspect-square object-contain"
                                src="{{ asset('assets/icons/Vector/existing-account.svg') }}">
                        </div>
                        <div>
                            <p class="text-xs text-center">
                                Book an appointment for an account that already exist.
                            </p>
                        </div>
                    </div>
                </button>
                <button id="create-account-btn">
                    <div
                        class="text-balance border rounded-lg px-2 py-4   hover:outline hover:outline-black hover:outline-2">
                        <div class="grid place-items-center">
                            <h1 class="font-bold">
                                Create a New Account
                            </h1>
                        </div>
                        <div class="grid place-items-center">
                            <img class="w-full aspect-square object-contain"
                                src="{{ asset('assets/icons/Vector/create-new-account.svg') }}">
                        </div>
                        <div>
                            <p class="text-xs text-center">Create a new account for the client to successfully book an
                                Appointment.</p>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
    {{-- Existing Account Modal --}}
    <div id="existing-account-popover"
        class="fixed top-0 bottom-0 left-0 right-0 z-50 backdrop-brightness-50 place-items-center hidden">
        <div id="existing-account-content" class="bg-white w-[40rem] p-10 rounded-lg shadow-lg relative">
            <div>
                <h6 class="font-bold">Book for Existing Account</h6>
                <button id="existing-account-close-btn">
                    <svg class="absolute top-10 right-10" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="mb-4">
                <form action="" class="relative flex items-center">
                    <!-- search bar -->
                    <input placeholder="Search across your shop"
                        class="placeholder:text-black placeholder:font-poppins placeholder:font placeholder:text-base border rounded-full border-neutral-300  pl-12 pr-4 py-[0.5rem] w-full focus:outline-none focus:ring-1 focus:ring-brand-500 focus:border-transparent text-base bg-transparent font-normal"
                        type="search" name="search" id="search" />
                    <img class="absolute left-4 size-5 svg-icon"
                        src="{{ asset('assets/Icons/Interface/Search_Magnifying_Glass.svg') }}" alt="icon" />
                </form>
            </div>
            @php $index = 0; @endphp
            <div class="divide-y">
                @foreach ($users as $user)
                    @php $index = $loop->index; @endphp
                    <div id="account{{ $index }}" class="flex items-center gap-8 p-4 cursor-pointer"
                        onclick="selectAccount({{ $index }})">
                        <img class="lazyload size-14 object-cover rounded-full"
                            src="{{ asset('assets/images/images/' . $user['dp_path']) }}" alt="">
                        <div>
                            <p class="font-semibold">{{ $user['name'] }}</p>
                            <p class="text-xs opacity-60">{{ $user['username'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 flex justify-end">
                <button class="bg-brand-500 text-white py-2 px-8 rounded-lg shadow-md">
                    Confirm
                </button>
            </div>
        </div>
    </div>
    {{-- Create an Account Modal --}}
    <div id="create-account-popover"
        class="fixed top-0 bottom-0 left-0 right-0 z-50 backdrop-brightness-50 place-items-center hidden">
        <div id="create-account-popover-content"
            class="bg-white h-[70dvh] w-full max-w-screen-xl mx-auto p-10 rounded-lg shadow-lg relative pb-24">
            <div>
                <h6 class="font-bold text-4xl">Create an Account</h6>
                <h1 class="font-bold text-4xl"></h1>
                <button id="create-account-close-btn">
                    <svg class="absolute top-10 right-10" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="overflow-y-scroll p-4 h-full">
                <x-user-registration />
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/regionObj.js') }}"></script>
    <script src="{{ asset('assets/js/provinceObj.js') }}"></script>
    <script src="{{ asset('assets/js/cityObj.js') }}"></script>
    <script src="{{ asset('assets/js/barangayObj.js') }}"></script>
    <script src="{{ asset('assets/js/shopRegistration.js') }}"></script>
    <script src="{{ asset('assets/js/address.js') }}"></script>
    <script src="{{ asset('assets/js/shop/appointment.js') }}"></script>
    @stack('scripts')
</x-shop-layout>
