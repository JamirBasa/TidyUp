<div class="content-section pt-28 pl-[17rem] max-w-screen-2xl mx-auto">
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
            <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group">
                <a href="#"
                    class="text-pretty text-gray-500 group-hover:text-gray-900 transition-colors">Pending</a>
            </li>
            <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group active">
                <a href="#" class="text-pretty text-gray-900">Upcoming</a>
                <div
                    class="w-4 h-5 text-xs text-white bg-black rounded-[3px] inline-flex items-center justify-center font-bold">
                    1</div>
            </li>
            <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group">
                <a href="#"
                    class="text-pretty text-gray-500 group-hover:text-gray-900 transition-colors">Completed</a>
                <div
                    class="w-4 h-5 text-xs text-white bg-black rounded-[3px] inline-flex items-center justify-center font-bold">
                    2</div>
            </li>
            <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group">
                <a href="#"
                    class="text-pretty text-gray-500 group-hover:text-gray-900 transition-colors">Cancelled</a>
                <div
                    class="w-4 h-5 text-xs text-white bg-black rounded-[3px] inline-flex items-center justify-center font-bold">
                    1</div>
            </li>
            <li class="inline-flex items-center gap-2 mr-4 py-2 px-1 cursor-pointer group">
                <a href="#"
                    class="text-pretty text-gray-500 group-hover:text-gray-900 transition-colors">No-shows</a>
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
        @if(isset($appointmentsView))
            @include('partial.appointmentsPartial.' . $appointmentsView)
        @else
            @include('partial.appointmentsPartial.upcoming')
        @endif
    </div>
</div>
<script src="{{ asset('assets/js/appointments.js') }}"></script>
@stack('scripts')