<section id="sidebar-container" class="fixed top-0 bottom-0 left-0 pt-24 z-10 transition-all duration-300 ease-in-out overflow-hidden w-[6.8rem]">
    <nav class="">
        <!-- Dashboard -->
        <ul class="flex flex-col items-center gap-6 px-6">
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('shop.index') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('shop.index') }}" class="flex items-center gap-5 ">
                    {{-- <img class="size-7" src="{{ asset('assets/Icons/Menu/More_Grid_Big.svg') }}" alt="icon"> --}}
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 18C17 18.5523 17.4477 19 18 19C18.5523 19 19 18.5523 19 18C19 17.4477 18.5523 17 18 17C17.4477 17 17 17.4477 17 18Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11 18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18C13 17.4477 12.5523 17 12 17C11.4477 17 11 17.4477 11 18Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 18C5 18.5523 5.44772 19 6 19C6.55228 19 7 18.5523 7 18C7 17.4477 6.55228 17 6 17C5.44772 17 5 17.4477 5 18Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 12C17 12.5523 17.4477 13 18 13C18.5523 13 19 12.5523 19 12C19 11.4477 18.5523 11 18 11C17.4477 11 17 11.4477 17 12Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 12C5 12.5523 5.44772 13 6 13C6.55228 13 7 12.5523 7 12C7 11.4477 6.55228 11 6 11C5.44772 11 5 11.4477 5 12Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5C17.4477 5 17 5.44772 17 6Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11 6C11 6.55228 11.4477 7 12 7C12.5523 7 13 6.55228 13 6C13 5.44772 12.5523 5 12 5C11.4477 5 11 5.44772 11 6Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 6C5 6.55228 5.44772 7 6 7C6.55228 7 7 6.55228 7 6C7 5.44772 6.55228 5 6 5C5.44772 5 5 5.44772 5 6Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Dashboard</p>
                </a>
            </li>
        <!-- Shops -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/Navigation/Building_04.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Shops</p>
                </a>
            </li>
        <!-- Customers -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/User/Users_Group.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Customers</p>
                </a>
            </li>
        <!-- Appointments -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/Calendar/Calendar.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Appointments</p>
                </a>
            </li>
        <!-- Sales Report -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/Interface/Tag.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Sales Report</p>
                </a>
            </li>
        <!-- Invoice -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/File/Notebook.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Invoice</p>
                </a>
            </li>
        <!-- Analytics -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/Interface/Chart_Pie.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Analytics</p>
                </a>
            </li>
        <!-- Customer Service -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/Communication/Chat_Circle_Dots.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Customer Service</p>
                </a>
            </li>
        <!-- User Feedback -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/Communication/Mail_Open.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">User Feedback</p>
                </a>
            </li>
        <!-- Restrictions -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/Warning/Triangle_Warning.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Restrictions</p>
                </a>
            </li>
        <!-- Platform Staff -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="staff.html" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/User/User_Card_ID.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Platform Staff</p>
                </a>
            </li>
        <!-- Manage Account -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <img class="size-7" src="{{ asset('assets/Icons/User/User_Circle.svg') }}" alt="icon">
                    <p id="sidebar-link-name" class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">Manage Account</p>
                </a>
            </li>
        </ul>
    </nav>
</section>