@props(['number' => ''])
<button id="left-arrow{{ $number }}" class="inline-flex justify-center items-center">
    <svg class="bg-white p-1 stroke-black stroke-2 size-6 sm:size-8 rounded-full shadow-md hover:shadow-md hover:scale-110 transition-transform duration-300 ease-in-out"
        width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M17 12H7M7 12L11 16M7 12L11 8" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</button>
<button id="right-arrow{{ $number }}" class="inline-flex justify-center items-center">
    <svg class="bg-white p-1 stroke-black stroke-2 size-6 sm:size-8 rounded-full shadow-md hover:scale-110 transition-transform duration-300 ease-in-out"
        width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 12H17M17 12L13 8M17 12L13 16" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</button>
