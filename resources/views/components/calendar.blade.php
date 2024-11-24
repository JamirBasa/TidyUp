@props(['title'])
<div class="bg-white p-6 rounded-lg shadow-sm max-w-lg">
    <div class="border-b pb-4 px-6 -mx-6 mb-4">
        <h1 class="text-xl">{{ $title ?? 'Calendar' }}</h1>
    </div>
    <div class="flex items-center justify-between mb-4">
        <button id="prevMonth" class="p-2 hover:bg-gray-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div id="currentMonth" class="text-xl font-medium"></div>
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
        <div class="text-center text-sm text-gray-500">Mo</div>
        <div class="text-center text-sm text-gray-500">Tu</div>
        <div class="text-center text-sm text-gray-500">We</div>
        <div class="text-center text-sm text-gray-500">Th</div>
        <div class="text-center text-sm text-gray-500">Fr</div>
        <div class="text-center text-sm text-gray-500">Sa</div>
        <div class="text-center text-sm text-gray-500">Su</div>

        <!-- Calendar days will be inserted here -->
        <div id="calendarDays" class="col-span-7 grid grid-cols-7 gap-1 place-items-center">
        </div>
    </div>

    <!-- Selected date display -->
    <div id="selectedDate" class="mt-4 text-sm text-gray-600"></div>
</div>
<script src="{{ asset('assets/js/calendar.js') }}"></script>
@stack('scripts')
