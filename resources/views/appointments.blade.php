@php
    $appointmentsArray = $appointments->toArray();
    $pendingCount = count(array_filter($appointmentsArray, fn($appointment) => $appointment->status === 'pending'));
    $upcomingCount = count(array_filter($appointmentsArray, fn($appointment) => $appointment->status === 'upcoming'));
    $completedCount = count(array_filter($appointmentsArray, fn($appointment) => $appointment->status === 'completed'));
    $cancelledCount = count(array_filter($appointmentsArray, fn($appointment) => $appointment->status === 'cancelled'));
    $noShowCount = count(array_filter($appointmentsArray, fn($appointment) => $appointment->status === 'no-show'));
@endphp
<x-user-layout :user="$user" :userrole="$userRole">
    <div class="content-section flex-1 w-full">
        {{-- back button --}}
        <a href="" class="inline-flex gap-2 items-center border-b border-black p-1 mb-10">
            <svg class="size-4 stroke-black stroke-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <p class="">Back</p>
        </a>

        {{-- Appointments Menu --}}
        <div class="relative flex items-center justify-between mb-10">
            <ul class="flex items-center">
                <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group" data-status="pending">
                    <a href="#"
                        class="text-pretty text-gray-500 group-hover:text-gray-900 transition-colors">Pending</a>
                    @if ($pendingCount > 0)
                        <div
                            class="w-4 h-5 text-xs text-white bg-black rounded-[3px] inline-flex items-center justify-center font-bold">
                            {{ $pendingCount }}
                        </div>
                    @endif
                </li>
                <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group active"
                    data-status="upcoming">
                    <a href="#" class="text-pretty text-gray-900">Upcoming</a>
                    @if ($upcomingCount > 0)
                        <div
                            class="w-4 h-5 text-xs text-white bg-black rounded-[3px] inline-flex items-center justify-center font-bold">
                            {{ $upcomingCount }}
                        </div>
                    @endif
                </li>
                <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group" data-status="completed">
                    <a href="#"
                        class="text-pretty text-gray-500 group-hover:text-gray-900 transition-colors">Completed</a>
                    @if ($completedCount > 0)
                        <div
                            class="w-4 h-5 text-xs text-white bg-black rounded-[3px] inline-flex items-center justify-center font-bold">
                            {{ $completedCount }}
                        </div>
                    @endif
                </li>
                <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group" data-status="cancelled">
                    <a href="#"
                        class="text-pretty text-gray-500 group-hover:text-gray-900 transition-colors">Cancelled</a>
                    @if ($cancelledCount > 0)
                        <div
                            class="w-4 h-5 text-xs text-white bg-black rounded-[3px] inline-flex items-center justify-center font-bold">
                            {{ $cancelledCount }}
                        </div>
                    @endif
                </li>
                <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group" data-status="no-show">
                    <a href="#"
                        class="text-pretty text-gray-500 group-hover:text-gray-900 transition-colors">No-shows</a>
                    @if ($noShowCount > 0)
                        <div
                            class="w-4 h-5 text-xs text-white bg-black rounded-[3px] inline-flex items-center justify-center font-bold">
                            {{ $noShowCount }}
                        </div>
                    @endif
                </li>
            </ul>
            <div class="slide-indicator absolute bottom-0 h-[1px] bg-black"></div>
            <div>
                <button class="inline-flex items-center p-1 border-b border-black gap-2">
                    <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span>Sort By</span>
                </button>
            </div>
        </div>

        <div id="appointments-content">
            {{-- Shop Cards --}}
            @if (count($appointments) === 0)
                <div class="flex items center justify-center">
                    <p class="text-lg font-semibold">No appointments found</p>
                </div>
            @else
                @foreach ($appointments as $appointment)
                    <div class="border-y border-neutral-400 flex items-center justify-between py-4 px-2 mb-4">
                        <div class="flex items-center gap-8 ">
                            <img class="h-28 w-52 rounded-lg object-cover flex-shrink-0"
                                src="{{ asset('storage/' . $appointment->path) }}" loading="lazy" alt="">
                            <div class="flex flex-col gap-3">
                                <p class="text-sm leading-none">{{ $appointment->type }}</p>
                                <p class="text-lg font-semibold leading-none">
                                    {{ $appointment->shop_name }}</p>
                                <p class="text-sm leading-tight">
                                    {{ $appointment->branch_name . ', ' . $appointment->detailed_address }}</p>
                            </div>
                        </div>
                        <div class="text-right flex flex-col gap-3">
                            <p class="text-lg font-semibold leading-none">{{ $appointment->total_price }}</p>
                            <p class="text-sm leading-none">
                                {{ \Carbon\Carbon::parse($appointment->date)->format('D, M. d, Y') }}</p>
                            <p class="text-sm leading-none">
                                {{ \Carbon\Carbon::parse($appointment->time)->format('h:i A') }}</p>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                const $tabs = $('li');
                const $indicator = $('.slide-indicator');
                const $appointmentsContent = $('#appointments-content');
                const appointments = @json($appointments);

                function updateIndicator($tab) {
                    $indicator.css({
                        'width': $tab.outerWidth() + 'px',
                        'transform': `translateX(${$tab.position().left}px)`
                    });
                }

                function filterAppointments(status) {
                    const filteredAppointments = appointments.filter(appointment => appointment.status === status);
                    $appointmentsContent.empty();
                    if (filteredAppointments.length === 0) {
                        $appointmentsContent.append(`
                        <div class="flex flex-col items-center justify-center">
                            <svg class="stroke-2 stroke-neutral-300 size-48" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.8291 17.0806C13.9002 21.3232 19.557 15.6663 18.8499 5.0598C8.24352 4.35269 2.58692 10.0097 6.8291 17.0806ZM6.8291 17.0806C6.82902 17.0805 6.82918 17.0807 6.8291 17.0806ZM6.8291 17.0806L5 18.909M6.8291 17.0806L10.6569 13.2522" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-2xl font-semibold text-neutral-300">No appointments found</p>
                        </div>
                        `);
                        return;
                    } else {
                        filteredAppointments.forEach(appointment => {
                            $appointmentsContent.append(`
                        <div class="border-y border-neutral-400 flex items-center justify-between py-4 px-2 mb-4">
                            <div class="flex items-center gap-8 ">
                                <img class="h-28 w-52 rounded-lg object-cover flex-shrink-0"
                                    src="{{ asset('storage/') }}/${appointment.path}" loading="lazy"
                                    alt="">
                                <div class="flex flex-col gap-3">
                                    <p class="text-sm leading-none">${appointment.status.charAt(0).toUpperCase() + appointment.status.slice(1)} Appointment</p>
                                    <p class="text-lg font-semibold leading-none">
                                        ${appointment.shop_name}</p>
                                    <p class="text-sm leading-tight">${appointment.branch_name}, ${appointment.detailed_address}</p>
                                </div>
                            </div>
                            <div class="text-right flex flex-col gap-3">
                                <p class="text-lg font-semibold leading-none">${appointment.total_price}</p>
                                <p class="text-sm leading-none">${new Date(appointment.date).toLocaleDateString('en-US', { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' })}</p>
                                <p class="text-sm leading-none">${new Date('1970-01-01T' + appointment.time + 'Z').toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</p>
                            </div>
                        </div>
                    `);
                        });
                    }

                }

                // Initialize indicator position and filter appointments
                const $activeTab = $('li.active');
                if ($activeTab.length) {
                    updateIndicator($activeTab);
                    filterAppointments($activeTab.data('status'));
                }

                // Add click handlers
                $tabs.on('click', function(e) {
                    e.preventDefault();

                    // Remove active class and text color from all tabs
                    $tabs.removeClass('active')
                        .find('a')
                        .removeClass('text-gray-900')
                        .addClass('text-gray-500');

                    // Add active class and text color to clicked tab
                    $(this).addClass('active')
                        .find('a')
                        .removeClass('text-gray-500')
                        .addClass('text-gray-900');

                    // Update indicator position
                    updateIndicator($(this));

                    // Filter appointments based on clicked tab
                    filterAppointments($(this).data('status'));
                });
            });
        </script>
    </div>
    <script>
        // this is for the menu tabs in the appointments page to make the transition of the line indicator smooth
        $(document).ready(function() {
            const $tabs = $('li');
            const $indicator = $('.slide-indicator');

            function updateIndicator($tab) {
                $indicator.css({
                    'width': $tab.outerWidth() + 'px',
                    'transform': `translateX(${$tab.position().left}px)`
                });
            }

            // Initialize indicator position
            const $activeTab = $('li.active');
            if ($activeTab.length) {
                updateIndicator($activeTab);
            }

            // Add click handlers
            $tabs.on('click', function(e) {
                e.preventDefault();

                // Remove active class and text color from all tabs
                $tabs.removeClass('active')
                    .find('a')
                    .removeClass('text-gray-900')
                    .addClass('text-gray-500');

                // Add active class and text color to clicked tab
                $(this).addClass('active')
                    .find('a')
                    .removeClass('text-gray-500')
                    .addClass('text-gray-900');

                // Update indicator position
                updateIndicator($(this));
            });
        });
    </script>
    @stack('scripts')

</x-user-layout>
