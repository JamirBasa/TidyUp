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
        <a href="{{ url()->previous() }}" class="inline-flex gap-2 items-center border-b border-black p-1 mb-10">
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
                            <div class="grid place-items-center">
                                <input type="checkbox" name="select" id="">
                            </div>
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
                            <p class="text-lg font-semibold leading-none">
                                {{ number_format($appointment->total_price, 2) }}</p>
                            <p class="text-sm leading-none">
                                {{ \Carbon\Carbon::parse($appointment->date)->format('D, M. d, Y') }}</p>
                            <p class="text-sm leading-none">
                                {{ \Carbon\Carbon::parse($appointment->time)->format('h:i A') }}</p>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <div class="flex my-6 justify-end w-full">
            <button class="flex items-center gap-2" id="open-cancel-appointments" onclick="openCancelPopup()">
                <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.99902 16H4.99902V21M13.999 8H18.999V3M4.58203 9.0034C5.14272 7.61566 6.08146 6.41304 7.29157 5.53223C8.50169 4.65141 9.93588 4.12752 11.4288 4.02051C12.9217 3.9135 14.4138 4.2274 15.7371 4.92661C17.0605 5.62582 18.1603 6.68254 18.9131 7.97612M19.4166 14.9971C18.8559 16.3848 17.9171 17.5874 16.707 18.4682C15.4969 19.3491 14.0642 19.8723 12.5713 19.9793C11.0784 20.0863 9.58509 19.7725 8.26172 19.0732C6.93835 18.374 5.83785 17.3175 5.08496 16.0239"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Cancel Appointment Request</span>
            </button>
        </div>
        <div id="cancel-popup"
            class=" fixed top-0 right-0 bottom-0 left-0 backdrop-brightness-50 hidden place-items-center z-[3000]">
            <div class="bg-white p-10 rounded-lg w-[40rem]">
                <div class="flex items-start justify-between mb-6">
                    <h1 class="text-4xl font-bold">Cancel Appointment</h1>
                    <button class="" onclick=" closeCancelPopup()">
                        <svg class="stroke-2 stroke-black" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" >
                            <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="mb-2">
                    <h1 class="mb-2">Reason for cancellation of Appointment</h1>
                    <form action="">
                        <textarea class="border rounded-lg w-full p-3" name="reason" id="" cols="30" rows="5" placeholder="Put the reason of the cancellation"></textarea>
                    </form>
                </div>
                <div class="mb-6">
                    <p class="text-red-500 text-sm">Disclaimer: If the cancellation was made 24 hours before the scheduled appointment, sanction to the account will be enforced.</p>
                </div>
                <div class="w-full grid grid-cols-2 gap-3">
                    <button class="bg-neutral-100 text-black p-3 font-bold rounded-lg" onclick="closeCancelPopup()">Cancel</button>
                    <button class="bg-brand-500 text-white p-3 font-bold rounded-lg" onclick="closeCancelPopup()">Confirm</button>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function openCancelPopup() {
                const openCancelPopup = document.getElementById('open-cancel-appointments');
                const cancelPopup = document.getElementById('cancel-popup');
                cancelPopup.classList.remove('hidden');
                cancelPopup.classList.add('grid');
            }

            function closeCancelPopup() {
                const openCancelPopup = document.getElementById('open-cancel-appointments');
                const cancelPopup = document.getElementById('cancel-popup');
                cancelPopup.classList.add('hidden');
                cancelPopup.classList.remove('grid');
            }
        </script>

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
                                ${appointment.status === 'pending' ? `
                                        <div class="grid place-items-center" id="">
                                            <input type="checkbox" name="select" id="appointments-checkbox">
                                        </div>
                                        ` : ''}
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
                                <p class="text-lg font-semibold leading-none">Php ${numberWithCommas(appointment.total_price.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }))}</p>
                                
                                <p class="text-sm leading-none">${new Date(appointment.date).toLocaleDateString('en-US', { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' })}</p>
                                <p class="text-sm leading-none">${new Date('1970-01-01T' + appointment.time + 'Z').toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</p>
                            </div>
                        </div>
                    `);
                        });
                    }

                }
                const $cancelAppointmentsButton = $('#cancel-appointments-button');
                const $appointmentsCheckboxes = $('input[name="select"]');

                function updateCancelButtonVisibility() {
                    const anyChecked = $appointmentsCheckboxes.is(':checked');
                    if (anyChecked) {
                        $cancelAppointmentsButton.show();
                    } else {
                        $cancelAppointmentsButton.hide();
                    }
                }

                $appointmentsCheckboxes.on('change', updateCancelButtonVisibility);

                // Initial check
                updateCancelButtonVisibility();

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
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
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
