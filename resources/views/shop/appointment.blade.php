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
                    <p class="mb-4">
                        Branch Manager: 
                        @if ($shopOwner[0]->first_name && $shopOwner[0]->last_name)
                            {{ $shopOwner[0]->first_name . ' ' . $shopOwner[0]->last_name }}
                        @else
                            {{ $shopOwner[0]->username }}
                        @endif
                    </p>
                    <p class="mb-4">Appointments: {{ $shopAppointments->count() }}</p>
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
                                <p class="font-bold">{{ $shopOwner[0]->first_name . ' ' . $shopOwner[0]->last_name }}
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
                <div class="h-[19rem]  space-y-6  overflow-y-scroll">
                    @php
                        $index = 0;
                    @endphp
                    @if ($shopPendingAppointments->count() == 0)
                        <div class="flex flex-col items-center justify-center">
                            <svg class="stroke-2 stroke-gray-300 size-40" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.8291 17.0806C13.9002 21.3232 19.557 15.6663 18.8499 5.0598C8.24352 4.35269 2.58692 10.0097 6.8291 17.0806ZM6.8291 17.0806C6.82902 17.0805 6.82918 17.0807 6.8291 17.0806ZM6.8291 17.0806L5 18.909M6.8291 17.0806L10.6569 13.2522"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="text-gray-300 text-4xl">No pending appointments</p>
                        </div>
                    @else
                        @foreach ($shopPendingAppointments as $appointment)
                            @php
                                $index = $loop->index;
                            @endphp
                            @if ($appointment->status == 'pending')
                                <button onclick="openModal({{ $index }})"
                                    class="flex items-center justify-between w-full">
                                    <div class="flex items-center gap-8">
                                        <div class="size-14">
                                            <x-user-profile-pic />
                                        </div>
                                        <div class="space-y-2">
                                            <p class="text-xs text-left">{{ $appointment->appointment_type }}</p>
                                            @if ($appointment->first_name && $appointment->last_name)
                                                <p class="font-semibold text-left">
                                                    {{ $appointment->first_name . ' ' . $appointment->last_name }}</p>
                                            @else
                                                <p class="font-semibold text-left">{{ $appointment->username }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div>
                                        <p class="opacity-60 text-sm text-right">{{ $appointment->branch_name }}</p>
                                        <p class="opacity-60 text-sm text-right">
                                            {{ date('l, F j, Y', strtotime($appointment->date)) }}</p>
                                        <p class="opacity-60 text-sm text-right">
                                            {{ date('h:i A', strtotime($appointment->time)) }}</p>
                                    </div>
                                </button>
                                {{-- MODAL --}}
                                <div id="approval-modal-{{ $index }}"
                                    class="fixed -top-10 right-0 bottom-0 left-0 place-items-center backdrop-brightness-50 z-20 hidden">
                                    <div id="approval-modal-contents"
                                        class="bg-white rounded-lg p-10 shadow-lg w-[45rem]">
                                        <div class="mb-6 flex items-center justify-between">
                                            <h1 class="text-4xl font-bold">Pending Appointments</h1>
                                            <button class="approval-modal-close-btn"
                                                onclick="closeModal({{ $index }})">
                                                <svg class="stroke-2 stroke-black" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center justify-between w-full mb-6">
                                            <div class="flex items-center gap-8 mb-6">
                                                <div class="size-14">
                                                    <x-user-profile-pic />
                                                </div>
                                                <div class="space-y-2">
                                                    <p class="text-xs text-left">{{ $appointment->appointment_type }}
                                                    </p>
                                                    @if ($appointment->first_name && $appointment->last_name)
                                                        <p class="font-semibold text-left">
                                                            {{ $appointment->first_name . ' ' . $appointment->last_name }}
                                                        </p>
                                                    @else
                                                        <p class="font-semibold text-left">
                                                            {{ $appointment->username }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div>

                                            </div>
                                            <div>
                                                <p class="opacity-60 text-sm text-right">
                                                    {{ $appointment->branch_name }}</p>
                                                <p class="opacity-60 text-sm text-right">
                                                    {{ date('l, F j, Y', strtotime($appointment->date)) }}</p>
                                                <p class="opacity-60 text-sm text-right">
                                                    {{ date('h:i A', strtotime($appointment->time)) }}</p>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="border p-4 rounded-lg">
                                                <h1 class="font-bold">Service Details</h1>
                                                <div
                                                    class="flex items
                                                -center justify-between border-b pb-4">
                                                    <div>
                                                        <p>{{ $appointment->service_name }}</p>
                                                        <p class="text-sm">{{ $appointment->duration }}</p>
                                                    </div>
                                                    <p class="font-bold text-lg">
                                                        P{{ number_format($appointment->cost) }}</p>
                                                </div>
                                                <div class="mt-2">
                                                    <h1 class="font-bold">Appointment Notes</h1>
                                                    <p>{{ $appointment->note }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-2 gap-4">
                                            <form
                                                action="{{ route('shop.approve-appointment', ['id' => $appointment->appointment_id]) }}"
                                                method="POST" class="w-full">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="appointment_id"
                                                    value="{{ $appointment->appointment_id }}">
                                                <input type="hidden" name="status" value="declined">
                                                <button type="submit"
                                                    class=" bg-neutral-200 py-2 px-8 rounded-lg w-full">Decline
                                                    Booking</button>
                                            </form>
                                            <form
                                                action="{{ route('shop.approve-appointment', ['id' => $appointment->appointment_id]) }}"
                                                method="POST" class="w-full">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="appointment_id"
                                                    value="{{ $appointment->appointment_id }}">
                                                <input type="hidden" name="status" value="upcoming">
                                                <button type="submit"
                                                    class=" bg-brand-500 text-white py-2 px-8 rounded-lg w-full">Approve
                                                    Booking</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    @endif
                    <script>
                        function openModal(id) {
                            document.getElementById(`approval-modal-${id}`).classList.remove('hidden');
                            document.getElementById(`approval-modal-${id}`).classList.add('grid');
                        }

                        function closeModal(id) {
                            document.getElementById(`approval-modal-${id}`).classList.add('hidden');
                            document.getElementById(`approval-modal-${id}`).classList.remove('grid');
                        }
                    </script>
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
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg border ">
                    @if ($shopAppointments->count() == 0)
                        <div class="flex flex-col items-center justify-center">
                            <svg class="stroke-2 stroke-gray-300 size-40" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.8291 17.0806C13.9002 21.3232 19.557 15.6663 18.8499 5.0598C8.24352 4.35269 2.58692 10.0097 6.8291 17.0806ZM6.8291 17.0806C6.82902 17.0805 6.82918 17.0807 6.8291 17.0806ZM6.8291 17.0806L5 18.909M6.8291 17.0806L10.6569 13.2522"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="text-gray-300 text-4xl">No appointments</p>
                        </div>
                    @else
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
                                @php
                                    $index = 0;
                                @endphp
                                @foreach ($shopAppointments as $appointment)
                                    @php
                                        $index = $loop->index;
                                    @endphp
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        @if ($appointment->first_name && $appointment->last_name)
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $appointment->first_name . ' ' . $appointment->last_name }}
                                            </th>
                                        @else
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $appointment->username }}
                                            </th>
                                        @endif
                                        <td class="px-6 py-4">
                                            {{ $appointment->appointment_type }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ date('l, F j, Y', strtotime($appointment->date)) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ date('h:i A', strtotime($appointment->time)) }}
                                        </td>
                                        <td class="px-6 py-4 uppercase">
                                            @switch($appointment->status)
                                                @case('no-show')
                                                    <span
                                                        class="text-noshows-main bg-noshows-light font-bold px-2 rounded-full uppercase">{{ $appointment->status }}</span>
                                                @break

                                                @case('completed')
                                                    <span
                                                        class="text-completed-main bg-completed-light font-bold px-2 rounded-full uppercase">{{ $appointment->status }}</span>
                                                @break

                                                @case('ongoing')
                                                    <span
                                                        class="text-ongoing-main bg-ongoing-light font-bold px-2 rounded-full uppercase">{{ $appointment->status }}</span>
                                                @break

                                                @case('cancelled')
                                                    <span
                                                        class="text-cancelled-main bg-cancelled-light font-bold px-2 rounded-full uppercase">{{ $appointment->status }}</span>
                                                @break

                                                @case('upcoming')
                                                    <span
                                                        class="text-upcoming-main bg-upcoming-light font-bold px-2 rounded-full uppercase">{{ $appointment->status }}</span>
                                                @break

                                                @case('started')
                                                    <span
                                                        class="text-orange-500 bg-orange-100 font-bold px-2 rounded-full uppercase">{{ $appointment->status }}</span>
                                                @break

                                                @case('declined')
                                                    <span
                                                        class="text-gray-500 bg-gray-100 font-bold px-2 rounded-full uppercase">{{ $appointment->status }}</span>
                                                @break
                                            @endswitch
                                            {{-- {{ $appointment->status }} --}}
                                        </td>
                                        <td class="px-6 py-4 space-x-4">
                                            <button
                                                class="font-medium text-brand-400 dark:text-brand-400 hover:underline"
                                                onclick="openEditModal({{ $index }})">Edit</button>
                                            {{-- <button
                                            class="font-medium text-brand-400 dark:text-brand-400 hover:underline">View
                                            Details</button> --}}
                                        </td>
                                    </tr>
                                    <div id="edit-appointment-modal-{{ $index }}"
                                        class="fixed -top-10 right-0 bottom-0 left-0 place-items-center backdrop-brightness-50 z-20 hidden ">
                                        <div class="grid grid-cols-3 w-[70rem]">
                                            {{-- Column1 --}}
                                            <div id="edit-appointment-modal-contents"
                                                class="bg-white rounded-lg p-6  col-span-2">
                                                <div class="mb-6 flex items-start justify-between">
                                                    <h1 class="text-4xl font-bold">Pending Appointments</h1>
                                                    <button class="edit-appointment-modal-close-btn"
                                                        onclick="closeEditModal({{ $index }})">
                                                        <svg class="stroke-2 stroke-black" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                {{-- Customer Details or Appointment Summary --}}
                                                <div class="flex items-center justify-between w-full mb-6">
                                                    <div class="flex items-center gap-8">
                                                        <div class="size-14">
                                                            <x-user-profile-pic />
                                                        </div>
                                                        <div class="space-y-2">
                                                            <p class="text-xs text-left">
                                                                {{ $appointment->appointment_type }}</p>
                                                            @if ($appointment->first_name && $appointment->last_name)
                                                                <p class="font-semibold text-left">
                                                                    {{ $appointment->first_name . ' ' . $appointment->last_name }}
                                                                </p>
                                                            @else
                                                                <p class="font-semibold text-left">
                                                                    {{ $appointment->username }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="opacity-60 text-sm text-right">
                                                            {{ $appointment->branch_name }}</p>
                                                        <p class="opacity-60 text-sm text-right">
                                                            {{ date('l, F j, Y', strtotime($appointment->date)) }}</p>
                                                        <p class="opacity-60 text-sm text-right">
                                                            {{ date('h:i A', strtotime($appointment->time)) }}</p>
                                                    </div>
                                                </div>
                                                {{-- Service Detail --}}
                                                <div class="w-full mb-6">
                                                    <div class="border p-4 rounded-lg">
                                                        <h1 class="font-bold">Service Details</h1>
                                                        <div
                                                            class="flex items
                                                    -center justify-between border-b pb-4">
                                                            <div>
                                                                <p>{{ $appointment->service_name }}</p>
                                                                <p class="text-sm">{{ $appointment->duration }}</p>
                                                            </div>
                                                            <p class="font-bold text-lg">
                                                                P{{ number_format($appointment->cost) }}</p>
                                                        </div>
                                                        <div class="mt-2">
                                                            <h1 class="font-bold">Appointment Notes</h1>
                                                            <p>{{ $appointment->note }}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            {{-- Column2 --}}
                                            <div class="bg-white rounded-lg p-6 border col-span-1 ">
                                                <form
                                                    action="{{ route('shop.approve-appointment', ['id' => $appointment->appointment_id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div
                                                        class="flex flex-col justify-between items-center h-full w-full">
                                                        <div class="w-full">
                                                            <div class="inline-flex gap-4 items-center mb-6">
                                                                <div class="size-12">
                                                                    <x-user-profile-pic />
                                                                </div>
                                                                <div>
                                                                    <p class="font-bold">
                                                                        {{ $appointment->first_name . ' ' . $appointment->last_name }}
                                                                    </p>
                                                                    <p class="text-sm">
                                                                        {{ '@' . $appointment->username }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="mb-4">
                                                                <div class="mb-2">
                                                                    <h1 class="font-bold">Appointment Status</h1>
                                                                </div>
                                                                <div class="flex items-center relative">
                                                                    <select name="status" id="selectstatus"
                                                                        class="w-full p-2 rounded-lg border">
                                                                        <option value="started">Started</option>
                                                                        <option value="completed">Completed</option>
                                                                        <option value="cancelled">Cancelled</option>
                                                                        <option value="no-show">No Show</option>
                                                                        <option value="upcoming">Upcoming</option>
                                                                    </select>
                                                                    <svg class="stroke-1 stroke-black absolute top-2 right-2"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M16 10L12 14L8 10"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <div class="my-2 border-b py-2">
                                                                        <h1 class="font-bold">Appointment Status</h1>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-sm">No Allergies</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 grid grid-cols-2 gap-4 w-full">
                                                            <button
                                                                class="bg-neutral-200 w-full p-2 rounded-lg">Reschedule</button>
                                                            <button type="submit"
                                                                class="bg-brand-500 w-full p-2 text-white rounded-lg">Save
                                                                Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                    <script>
                        function openEditModal(id) {
                            document.getElementById(`edit-appointment-modal-${id}`).classList.remove('hidden');
                            document.getElementById(`edit-appointment-modal-${id}`).classList.add('grid');
                        }

                        function closeEditModal(id) {
                            document.getElementById(`edit-appointment-modal-${id}`).classList.add('hidden');
                            document.getElementById(`edit-appointment-modal-${id}`).classList.remove('grid');
                        }
                    </script>
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
                @if ($shopPendingAppointments->count() == 0)
                    <div class="flex flex-col items-center justify-center">
                        <svg class="stroke-2 stroke-gray-300 size-40" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.8291 17.0806C13.9002 21.3232 19.557 15.6663 18.8499 5.0598C8.24352 4.35269 2.58692 10.0097 6.8291 17.0806ZM6.8291 17.0806C6.82902 17.0805 6.82918 17.0807 6.8291 17.0806ZM6.8291 17.0806L5 18.909M6.8291 17.0806L10.6569 13.2522"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-gray-300 text-4xl">No upcoming appointments</p>
                    </div>
                @else
                    @foreach ($shopPendingAppointments as $appointment)
                        @if ($appointment->status == 'pending')
                            <div class="flex items-center justify-between ">
                                <div class="flex items-center gap-8">
                                    <div class="size-14">
                                        <x-user-profile-pic />
                                    </div>
                                    <div>
                                        <p class="text-xs ">{{ $appointment->appointment_type }}</p>
                                        @if ($appointment->first_name && $appointment->last_name)
                                            <p class="font-semibold">
                                                {{ $appointment->first_name . ' ' . $appointment->last_name }}</p>
                                        @else
                                            <p class="font-semibold">{{ $appointment->username }}</p>
                                        @endif
                                        <p class="text-xs opacity-60 ">Click to check appointment information</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="opacity-60 text-sm text-right">{{ $appointment->branch_name }}</p>
                                    <p class="opacity-60 text-sm text-right">
                                        {{ date('l, F j, Y', strtotime($appointment->date)) }}</p>
                                    <p class="opacity-60 text-sm text-right">
                                        {{ date('h:i A', strtotime($appointment->time)) }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
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
            <div class="divide-y h-[30rem] overflow-y-scroll">
                @foreach ($users as $user)
                    @php $index = $loop->index; @endphp
                    <div id="account{{ $index }}" class="flex items-center gap-8 p-4 cursor-pointer"
                        onclick="selectAccount({{ $index }})">
                        <div class="size-14">
                            <x-user-profile-pic />
                        </div>
                        <div>
                            <p class="font-semibold">{{ $user->first_name . ' ' . $user->last_name }}</p>
                            <p class="text-xs opacity-60">{{ $user->username }}</p>
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
    <script src="{{ asset('assets/js/showModal.js') }}"></script>
    <script src="{{ asset('assets/js/shop/appointment.js') }}"></script>
    @stack('scripts')
</x-shop-layout>
