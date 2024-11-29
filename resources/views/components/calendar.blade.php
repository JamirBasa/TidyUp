@props(['title'])
<div class="bg-white p-6 rounded-lg shadow-sm max-w-lg">
    <div class="border-b pb-4 px-6 -mx-6 mb-4">
        <h1 class="text-xl">{{ $title ?? 'Calendar' }}</h1>
    </div>
    <div class="flex items-center justify-between mb-4">
        <!-- Previous Month Button -->
        <button id="prevMonth" class="p-2 hover:bg-gray-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Current Month Display -->
        <div id="currentMonth" class="text-lg font-semibold"></div>

        <!-- Next Month Button -->
        <button id="nextMonth" class="p-2 hover:bg-gray-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform rotate-180" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <!-- Calendar grid -->
    <div id="calendarDays" class="grid grid-cols-7 gap-1">
        <!-- Weekday headers -->
        <div class="text-center text-sm text-gray-500">Mo</div>
        <div class="text-center text-sm text-gray-500">Tu</div>
        <div class="text-center text-sm text-gray-500">We</div>
        <div class="text-center text-sm text-gray-500">Th</div>
        <div class="text-center text-sm text-gray-500">Fr</div>
        <div class="text-center text-sm text-gray-500">Sa</div>
        <div class="text-center text-sm text-gray-500">Su</div>
    </div>

    <!-- Selected date display -->
    <div id="selectedDateDisplay" class="mt-4  text-sm text-gray-600"></div>
    <input type="hidden" id="calendar-value" name="appointment_date"
        value="{{ old('appointment_date', now()->toDateString()) }}">
</div>

<script src="{{ asset('assets/js/calendar.js') }}"></script>
