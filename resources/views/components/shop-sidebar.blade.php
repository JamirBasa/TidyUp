<section id="sidebar-container"
    class="fixed top-0 bottom-0 left-0 pt-24 z-10 transition-all duration-300 ease-in-out overflow-hidden w-[6.8rem]">
    <nav class="">
        <!-- Dashboard -->
        <ul class="flex flex-col items-center gap-5 px-6">
            <li
                class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('shop.index') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('shop.index') }}" class="flex items-center gap-5 ">
                    {{-- <img class="size-7" src="{{ asset('assets/Icons/Menu/More_Grid_Big.svg') }}" alt="icon"> --}}
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 18C17 18.5523 17.4477 19 18 19C18.5523 19 19 18.5523 19 18C19 17.4477 18.5523 17 18 17C17.4477 17 17 17.4477 17 18Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M11 18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18C13 17.4477 12.5523 17 12 17C11.4477 17 11 17.4477 11 18Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M5 18C5 18.5523 5.44772 19 6 19C6.55228 19 7 18.5523 7 18C7 17.4477 6.55228 17 6 17C5.44772 17 5 17.4477 5 18Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M17 12C17 12.5523 17.4477 13 18 13C18.5523 13 19 12.5523 19 12C19 11.4477 18.5523 11 18 11C17.4477 11 17 11.4477 17 12Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M5 12C5 12.5523 5.44772 13 6 13C6.55228 13 7 12.5523 7 12C7 11.4477 6.55228 11 6 11C5.44772 11 5 11.4477 5 12Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5C17.4477 5 17 5.44772 17 6Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M11 6C11 6.55228 11.4477 7 12 7C12.5523 7 13 6.55228 13 6C13 5.44772 12.5523 5 12 5C11.4477 5 11 5.44772 11 6Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M5 6C5 6.55228 5.44772 7 6 7C6.55228 7 7 6.55228 7 6C7 5.44772 6.55228 5 6 5C5.44772 5 5 5.44772 5 6Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Dashboard</p>
                </a>
            </li>
            {{-- Appoinments --}}
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 8H20M4 8V16.8002C4 17.9203 4 18.4801 4.21799 18.9079C4.40973 19.2842 4.71547 19.5905 5.0918 19.7822C5.5192 20 6.07899 20 7.19691 20H16.8031C17.921 20 18.48 20 18.9074 19.7822C19.2837 19.5905 19.5905 19.2842 19.7822 18.9079C20 18.4805 20 17.9215 20 16.8036V8M4 8V7.2002C4 6.08009 4 5.51962 4.21799 5.0918C4.40973 4.71547 4.71547 4.40973 5.0918 4.21799C5.51962 4 6.08009 4 7.2002 4H8M20 8V7.19691C20 6.07899 20 5.5192 19.7822 5.0918C19.5905 4.71547 19.2837 4.40973 18.9074 4.21799C18.4796 4 17.9203 4 16.8002 4H16M16 2V4M16 4H8M8 2V4"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Appoinments</p>
                </a>
            </li>
            {{-- Shop Profile --}}
            <li
                class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('shop.profile') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('shop.profile') }}" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 20H4M4 20H14M4 20V6.2002C4 5.08009 4 4.51962 4.21799 4.0918C4.40973 3.71547 4.71547 3.40973 5.0918 3.21799C5.51962 3 6.08009 3 7.2002 3H10.8002C11.9203 3 12.4796 3 12.9074 3.21799C13.2837 3.40973 13.5905 3.71547 13.7822 4.0918C14 4.5192 14 5.07899 14 6.19691V12M14 20H20M14 20V12M20 20H22M20 20V12C20 11.0681 19.9999 10.6024 19.8477 10.2349C19.6447 9.74481 19.2557 9.35523 18.7656 9.15224C18.3981 9 17.9316 9 16.9997 9C16.0679 9 15.6019 9 15.2344 9.15224C14.7443 9.35523 14.3552 9.74481 14.1522 10.2349C14 10.6024 14 11.0681 14 12M7 10H11M7 7H11"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Shop Profile</p>
                </a>
            </li>
            <!-- Shop Catalog -->
            <li
                class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('shop.catalog') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('shop.catalog') }}" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 9.7998V19.9998M12 9.7998C12 8.11965 12 7.27992 12.327 6.63818C12.6146 6.0737 13.0732 5.6146 13.6377 5.32698C14.2794 5 15.1196 5 16.7998 5H19.3998C19.9599 5 20.2401 5 20.454 5.10899C20.6422 5.20487 20.7948 5.35774 20.8906 5.5459C20.9996 5.75981 21 6.04004 21 6.6001V15.4001C21 15.9601 20.9996 16.2398 20.8906 16.4537C20.7948 16.6419 20.6425 16.7952 20.4543 16.8911C20.2406 17 19.961 17 19.402 17H16.5693C15.6301 17 15.1597 17 14.7334 17.1295C14.356 17.2441 14.0057 17.4317 13.701 17.6821C13.3568 17.965 13.096 18.3557 12.575 19.1372L12 19.9998M12 9.7998C12 8.11965 11.9998 7.27992 11.6729 6.63818C11.3852 6.0737 10.9263 5.6146 10.3618 5.32698C9.72004 5 8.87977 5 7.19961 5H4.59961C4.03956 5 3.75981 5 3.5459 5.10899C3.35774 5.20487 3.20487 5.35774 3.10899 5.5459C3 5.75981 3 6.04004 3 6.6001V15.4001C3 15.9601 3 16.2398 3.10899 16.4537C3.20487 16.6419 3.35774 16.7952 3.5459 16.8911C3.7596 17 4.03901 17 4.59797 17H7.43073C8.36994 17 8.83942 17 9.26569 17.1295C9.64306 17.2441 9.99512 17.4317 10.2998 17.6821C10.6426 17.9638 10.9017 18.3526 11.4185 19.1277L12 19.9998"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Shop Catalog</p>
                </a>
            </li>
            {{-- Manage Branches --}}
            <li
                class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('shop.manage-branches') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('shop.manage-branches') }}" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 11.0006L11 15.0006L9 13.0006M4 16.8007V11.4527C4 10.9184 4 10.6511 4.06497 10.4024C4.12255 10.1821 4.21779 9.97356 4.3457 9.78513C4.49004 9.5725 4.69064 9.39618 5.09277 9.04432L9.89436 4.84292C10.6398 4.19063 11.0126 3.86446 11.4324 3.74031C11.8026 3.63083 12.1972 3.63083 12.5674 3.74031C12.9875 3.86455 13.3608 4.19103 14.1074 4.84431L18.9074 9.04431C19.3096 9.39618 19.5102 9.5725 19.6546 9.78513C19.7825 9.97356 19.877 10.1821 19.9346 10.4024C19.9995 10.6511 20 10.9184 20 11.4527V16.8041C20 17.9221 20 18.4816 19.7822 18.909C19.5905 19.2854 19.2837 19.591 18.9074 19.7828C18.48 20.0006 17.921 20.0006 16.8031 20.0006H7.19691C6.07899 20.0006 5.5192 20.0006 5.0918 19.7828C4.71547 19.591 4.40973 19.2854 4.21799 18.909C4 18.4812 4 17.9208 4 16.8007Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Manage Branches</p>
                </a>
            </li>

            {{-- Separator --}}
            <div class="flex-grow border-t border-neutral-400 w-full"></div>
            {{-- Analytics  --}}
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12M12 3C16.9706 3 21 7.02944 21 12M12 3V12M21 12H12M18 18.5L12 12"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Analytics</p>
                </a>
            </li>
            {{-- Shop Sales --}}
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.74693 7.64551L4.41571 11.289C4.36665 11.8286 4.34192 12.1006 4.38682 12.3589C4.42695 12.5896 4.50708 12.8117 4.62398 13.0147C4.75532 13.2427 4.94945 13.4368 5.33549 13.8228L10.511 18.9983C11.298 19.7854 11.6918 20.1791 12.147 20.327C12.5487 20.4575 12.9821 20.4578 13.3837 20.3273C13.8404 20.1789 14.2372 19.7826 15.0293 18.9906L18.9891 15.0308C19.7811 14.2387 20.1765 13.8429 20.3248 13.3862C20.4553 12.9845 20.4546 12.5516 20.324 12.15C20.1757 11.6933 19.7809 11.2975 18.9889 10.5055L13.8261 5.34278C13.4366 4.95321 13.2417 4.75841 13.0127 4.62647C12.8097 4.50957 12.5876 4.42909 12.3569 4.38897C12.0965 4.34368 11.822 4.36858 11.2733 4.41846L7.64351 4.74844C6.69875 4.83433 6.22608 4.87746 5.8564 5.08303C5.53048 5.26428 5.26179 5.53296 5.08055 5.85889C4.876 6.22672 4.83334 6.69604 4.74831 7.6314L4.74693 7.64551Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M9.71161 9.71346C10.1021 9.32293 10.1021 8.68977 9.71161 8.29924C9.32109 7.90872 8.68747 7.90872 8.29695 8.29924C7.90642 8.68977 7.90605 9.32278 8.29657 9.71331C8.6871 10.1038 9.32109 10.104 9.71161 9.71346Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Shop Sales</p>
                </a>
            </li>
            {{-- Shop Reviews --}}
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 10L11 14L9 12M12.0001 21C10.365 21 8.83174 20.5639 7.51025 19.8018C7.3797 19.7265 7.31434 19.6888 7.25293 19.6719C7.19578 19.6561 7.14475 19.6507 7.08559 19.6548C7.02253 19.6591 6.9573 19.6808 6.82759 19.7241L4.51807 20.4939L4.51625 20.4947C4.02892 20.6572 3.7848 20.7386 3.62256 20.6807C3.4812 20.6303 3.36979 20.5187 3.31938 20.3774C3.26157 20.2152 3.34268 19.9719 3.50489 19.4853L3.50586 19.4823L4.27468 17.1758L4.27651 17.171C4.31936 17.0424 4.34106 16.9773 4.34535 16.9146C4.3494 16.8554 4.34401 16.804 4.32821 16.7469C4.31146 16.6863 4.27448 16.6221 4.20114 16.495L4.19819 16.4899C3.43604 15.1684 3 13.6351 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9707 21 12.0001 21Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Shop Reviews</p>
                </a>
            </li>
            {{-- Separator --}}
            <div class="flex-grow border-t border-neutral-400 w-full"></div>
            <!-- FAQs -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 8H20C20.5523 8 21 8.44772 21 9V20L17.667 17.231C17.4875 17.0818 17.2608 17 17.0273 17H9C8.44771 17 8 16.5523 8 16V13M16 8V5C16 4.44772 15.5523 4 15 4H4C3.44772 4 3 4.44772 3 5V16.0003L6.33301 13.2308C6.51255 13.0817 6.73924 13 6.97266 13H8M16 8V12C16 12.5523 15.5523 13 15 13H8"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        FAQs</p>
                </a>
            </li>
            <!-- Send Feedback -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 6L10.1076 10.6123L10.1097 10.614C10.7878 11.1113 11.1271 11.3601 11.4988 11.4562C11.8272 11.5412 12.1725 11.5412 12.501 11.4562C12.8729 11.36 13.2132 11.1105 13.8926 10.6123C13.8926 10.6123 17.8101 7.60594 20 6M3 15.8002V8.2002C3 7.08009 3 6.51962 3.21799 6.0918C3.40973 5.71547 3.71547 5.40973 4.0918 5.21799C4.51962 5 5.08009 5 6.2002 5H17.8002C18.9203 5 19.4796 5 19.9074 5.21799C20.2837 5.40973 20.5905 5.71547 20.7822 6.0918C21 6.5192 21 7.07899 21 8.19691V15.8036C21 16.9215 21 17.4805 20.7822 17.9079C20.5905 18.2842 20.2837 18.5905 19.9074 18.7822C19.48 19 18.921 19 17.8031 19H6.19691C5.07899 19 4.5192 19 4.0918 18.7822C3.71547 18.5905 3.40973 18.2842 3.21799 17.9079C3 17.4801 3 16.9203 3 15.8002Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Send Feedback</p>
                </a>
            </li>
            <!-- Report An Issue -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="staff.html" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.002 9.00006V13.0001M4.38086 15.1999C3.47143 16.775 3.01684 17.5629 3.08477 18.2092C3.14402 18.7729 3.43987 19.2851 3.89844 19.6182C4.42399 20.0001 5.33286 20.0001 7.15049 20.0001H16.8534C18.671 20.0001 19.5798 20.0001 20.1053 19.6182C20.5639 19.2851 20.8599 18.7729 20.9191 18.2092C20.9871 17.5629 20.5326 16.775 19.6232 15.1999L14.7734 6.79986C13.864 5.22468 13.4091 4.43722 12.8154 4.17291C12.2976 3.94236 11.706 3.94236 11.1881 4.17291C10.5947 4.43711 10.1401 5.22458 9.23142 6.79845L4.38086 15.1999ZM12.0527 16.0001V16.1001L11.9521 16.1003V16.0001H12.0527Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Report An Issue</p>
                </a>
            </li>
            {{-- Separator --}}
            <div class="flex-grow border-t border-neutral-400 w-full"></div>
            <!-- About Us -->
            <li class="flex px-4 py-2 w-full relative rounded-lg overflow-hidden">
                <a href="" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.14648 9.07361C9.31728 8.54732 9.63015 8.07896 10.0508 7.71948C10.4714 7.36001 10.9838 7.12378 11.5303 7.03708C12.0768 6.95038 12.6362 7.0164 13.1475 7.22803C13.6587 7.43966 14.1014 7.78875 14.4268 8.23633C14.7521 8.68391 14.9469 9.21256 14.9904 9.76416C15.0339 10.3158 14.9238 10.8688 14.6727 11.3618C14.4215 11.8548 14.0394 12.2685 13.5676 12.5576C13.0958 12.8467 12.5533 12.9998 12 12.9998V14.0002M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 17V17.1L11.9502 17.1002V17H12.0498Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        About Us</p>
                </a>
            </li>
        </ul>
    </nav>
</section>
