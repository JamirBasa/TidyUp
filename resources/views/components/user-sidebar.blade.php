<section class="hidden lg:block" id="sidebar-container">
    <div id="user-sidebar"
        class="fixed lg:sticky shadow-lg w-64 lg:w-52 px-4 lg:px-0 lg:pr-2 pb-8 top-16 pt-10 lg:pt-0 lg:top-0 gap-3 flex flex-col overflow-y-auto bg-neutral-100 lg:bg-transparent lg:shadow-none z-50">
        {{-- Home --}}

        <a href="{{ route('index') }}" id="home-link" data-url="{{-- route('home.content') --}}"
            class=" inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150 transition-colors delay-150 ease-out {{ request()->routeIs('index') ? 'bg-neutral-150' : '' }}">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 17.0007V11.4527C20 10.9184 19.9995 10.6511 19.9346 10.4024C19.877 10.1821 19.7825 9.97356 19.6546 9.78513C19.5102 9.5725 19.3096 9.39618 18.9074 9.04431L14.1074 4.84431C13.3608 4.19103 12.9875 3.86455 12.5674 3.74031C12.1972 3.63083 11.8026 3.63083 11.4324 3.74031C11.0126 3.86446 10.6398 4.19063 9.89436 4.84292L5.09277 9.04432C4.69064 9.39618 4.49004 9.5725 4.3457 9.78513C4.21779 9.97356 4.12255 10.1821 4.06497 10.4024C4 10.6511 4 10.9184 4 11.4527V17.0007C4 17.9325 4 18.3983 4.15224 18.7658C4.35523 19.2559 4.74432 19.6457 5.23438 19.8487C5.60192 20.0009 6.06786 20.001 6.99974 20.001C7.93163 20.001 8.39808 20.0009 8.76562 19.8487C9.25568 19.6457 9.64467 19.256 9.84766 18.7659C9.9999 18.3984 10 17.9324 10 17.0006V16.0006C10 14.896 10.8954 14.0006 12 14.0006C13.1046 14.0006 14 14.896 14 16.0006V17.0006C14 17.9324 14 18.3984 14.1522 18.7659C14.3552 19.256 14.7443 19.6457 15.2344 19.8487C15.6019 20.0009 16.0679 20.001 16.9997 20.001C17.9316 20.001 18.3981 20.0009 18.7656 19.8487C19.2557 19.6457 19.6447 19.2559 19.8477 18.7658C19.9999 18.3983 20 17.9325 20 17.0007Z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xs lg:text-sm select-none">Home</span>
        </a>

        {{-- Appointments --}}
        <a href="{{ route('appointments') }}" id="appointments-link" data-url="{{-- route('appointments.content') --}}"
            class=" inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150 transition-colors delay-150 ease-out {{ request()->routeIs('appointments') ? 'bg-neutral-150' : '' }}">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4 8H20M4 8V16.8002C4 17.9203 4 18.4801 4.21799 18.9079C4.40973 19.2842 4.71547 19.5905 5.0918 19.7822C5.5192 20 6.07899 20 7.19691 20H16.8031C17.921 20 18.48 20 18.9074 19.7822C19.2837 19.5905 19.5905 19.2842 19.7822 18.9079C20 18.4805 20 17.9215 20 16.8036V8M4 8V7.2002C4 6.08009 4 5.51962 4.21799 5.0918C4.40973 4.71547 4.71547 4.40973 5.0918 4.21799C5.51962 4 6.08009 4 7.2002 4H8M20 8V7.19691C20 6.07899 20 5.5192 19.7822 5.0918C19.5905 4.71547 19.2837 4.40973 18.9074 4.21799C18.4796 4 17.9203 4 16.8002 4H16M16 2V4M16 4H8M8 2V4"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xs lg:text-sm select-none">Appointments</span>
        </a>

        {{-- Explore --}}

        <a href="{{ route('explore') }}" id="explore-link" data-url="{{-- route('explore.content') --}}"
            class=" inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150 {{ request()->routeIs('explore') ? 'bg-neutral-150' : '' }}">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12Z"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M10.5 10.5L16 8L13.5 13.5L8 16L10.5 10.5Z" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xs lg:text-sm select-none">Explore</span>
        </a>

        {{-- Popular --}}

        <a href="{{ route('popular') }}" id=""
            class="inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150 {{ request()->routeIs('popular') ? 'bg-neutral-150' : '' }}">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.0005 7L14.1543 12.9375C14.0493 13.0441 13.9962 13.0976 13.9492 13.1396C13.1899 13.8193 12.0416 13.8193 11.2822 13.1396C11.2352 13.0976 11.1817 13.0442 11.0767 12.9375C10.9716 12.8308 10.9191 12.7774 10.8721 12.7354C10.1127 12.0557 8.96397 12.0557 8.20461 12.7354C8.15771 12.7773 8.10532 12.8305 8.00078 12.9367L4 17M20.0005 7L20 13M20.0005 7H14"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xs lg:text-sm select-none">Popular</span>
        </a>

        <div class="flex-grow border-t border-gray-400"></div>

        <h1 class="py-2 sm:py-4 px-3 font-semibold">CATEGORIES</h1>
        {{-- Barbershops --}}

        <a href="{{ route('barbershops') }}" id=""
            class="inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150 {{ request()->routeIs('barbershops') ? 'bg-neutral-150' : '' }}">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4 20H10.9433M10.9433 20H11.0567M10.9433 20C10.9622 20.0002 10.9811 20.0002 11 20.0002C11.0189 20.0002 11.0378 20.0002 11.0567 20M10.9433 20C7.1034 19.9695 4 16.8468 4 12.9998V8.92285C4 8.41305 4.41305 8 4.92285 8H17.0767C17.5865 8 18 8.41305 18 8.92285V9M11.0567 20H18M11.0567 20C14.8966 19.9695 18 16.8468 18 12.9998M18 9H19.5C20.8807 9 22 10.1193 22 11.5C22 12.8807 20.8807 14 19.5 14H18V12.9998M18 9V12.9998M15 3L14 5M12 3L11 5M9 3L8 5"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xs lg:text-sm select-none">Barbershops</span>
        </a>

        {{-- Beauty Salon --}}

        <a href="{{ route('beauty-salons') }}" id=""
            class="inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150 {{ request()->routeIs('beauty-salons') ? 'bg-neutral-150' : '' }}">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.2373 6.23731C20.7839 7.78395 20.8432 10.2727 19.3718 11.8911L11.9995 20.0001L4.62812 11.8911C3.15679 10.2727 3.21605 7.7839 4.76269 6.23726C6.48961 4.51034 9.33372 4.66814 10.8594 6.5752L12 8.00045L13.1396 6.57504C14.6653 4.66798 17.5104 4.51039 19.2373 6.23731Z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xs lg:text-sm select-none">Beauty Salon</span>
        </a>

        {{-- Nail Salon --}}

        <a href="{{ route('nail-salons') }}" id=""
            class="inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150 {{ request()->routeIs('nail-salons') ? 'bg-neutral-150' : '' }}">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3 17V15C3 10.0294 7.02944 6 12 6C16.9706 6 21 10.0294 21 15V17M6 17V15C6 11.6863 8.68629 9 12 9C15.3137 9 18 11.6863 18 15V17M9 17V15C9 13.3431 10.3431 12 12 12C13.6569 12 15 13.3431 15 15V17"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xs lg:text-sm select-none">Nail Salon</span>
        </a>

        {{-- Hair Salon --}}

        <a href="{{ route('hair-salons') }}" id=""
            class="inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150 {{ request()->routeIs('hair-salons') ? 'bg-neutral-150' : '' }}">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.0001 13.3848C16.0001 14.6088 15.526 15.7828 14.6821 16.6483C14.203 17.1397 13.6269 17.5091 13 17.7364M19 13.6923C19 7.11538 12 2 12 2C12 2 5 7.11538 5 13.6923C5 15.6304 5.7375 17.4893 7.05025 18.8598C8.36301 20.2302 10.1436 20.9994 12.0001 20.9994C13.8566 20.9994 15.637 20.2298 16.9497 18.8594C18.2625 17.4889 19 15.6304 19 13.6923Z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span class="text-xs lg:text-sm select-none">Hair Salon</span>
        </a>

        <div class="flex-grow border-t border-gray-400"></div>

        <h1 class="py-4 px-3 font-semibold">Help Center</h1>
        {{-- FAQs --}}

        <a href="" id=""
            class="inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16 8H20C20.5523 8 21 8.44772 21 9V20L17.667 17.231C17.4875 17.0818 17.2608 17 17.0273 17H9C8.44771 17 8 16.5523 8 16V13M16 8V5C16 4.44772 15.5523 4 15 4H4C3.44772 4 3 4.44772 3 5V16.0003L6.33301 13.2308C6.51255 13.0817 6.73924 13 6.97266 13H8M16 8V12C16 12.5523 15.5523 13 15 13H8"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xs lg:text-sm select-none">FAQs</span>
        </a>

        {{-- Send Feedback --}}

        <a href="" id=""
            class="inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4 6L10.1076 10.6123L10.1097 10.614C10.7878 11.1113 11.1271 11.3601 11.4988 11.4562C11.8272 11.5412 12.1725 11.5412 12.501 11.4562C12.8729 11.36 13.2132 11.1105 13.8926 10.6123C13.8926 10.6123 17.8101 7.60594 20 6M3 15.8002V8.2002C3 7.08009 3 6.51962 3.21799 6.0918C3.40973 5.71547 3.71547 5.40973 4.0918 5.21799C4.51962 5 5.08009 5 6.2002 5H17.8002C18.9203 5 19.4796 5 19.9074 5.21799C20.2837 5.40973 20.5905 5.71547 20.7822 6.0918C21 6.5192 21 7.07899 21 8.19691V15.8036C21 16.9215 21 17.4805 20.7822 17.9079C20.5905 18.2842 20.2837 18.5905 19.9074 18.7822C19.48 19 18.921 19 17.8031 19H6.19691C5.07899 19 4.5192 19 4.0918 18.7822C3.71547 18.5905 3.40973 18.2842 3.21799 17.9079C3 17.4801 3 16.9203 3 15.8002Z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span class="text-xs lg:text-sm select-none">Send Feedback</span>
        </a>

        {{-- Report An Issue --}}

        <a href="" id=""
            class="inline-flex items-center gap-2 w-full py-2 sm:py-3 px-6 rounded-lg hover:bg-neutral-150">
            <svg class="stroke-black stroke-[1.5] size-6" width="30" height="30" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.002 9.00006V13.0001M4.38086 15.1999C3.47143 16.775 3.01684 17.5629 3.08477 18.2092C3.14402 18.7729 3.43987 19.2851 3.89844 19.6182C4.42399 20.0001 5.33286 20.0001 7.15049 20.0001H16.8534C18.671 20.0001 19.5798 20.0001 20.1053 19.6182C20.5639 19.2851 20.8599 18.7729 20.9191 18.2092C20.9871 17.5629 20.5326 16.775 19.6232 15.1999L14.7734 6.79986C13.864 5.22468 13.4091 4.43722 12.8154 4.17291C12.2976 3.94236 11.706 3.94236 11.1881 4.17291C10.5947 4.43711 10.1401 5.22458 9.23142 6.79845L4.38086 15.1999ZM12.0527 16.0001V16.1001L11.9521 16.1003V16.0001H12.0527Z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-xs lg:text-sm select-none">Report An Issue</span>
        </a>


    </div>
</section>
{{-- <script src="{{ asset('assets/js/sidebar.js') }}"></script>3 --}}
