{{-- 
NOTE: MAKE SURE TO REMEMBER TO ADD A TOOLTIP FOR THE SIDEBAR NAV SO THAT THE USER WONT HAVE TO OPEN THE SIDE BAR EVERYTIME TO SEE THE NAME OF THE NAVIGATION.
--}}
<section id="sidebar-container"
    class="fixed top-0 bottom-0 left-0 pt-24 z-10 transition-all duration-300 ease-in-out overflow-hidden w-[6.8rem]">
    <nav class="">
        <!-- Dashboard -->
        <ul class="flex flex-col items-center gap-5 px-6">
            <li
                class=" flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.dashboard') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-5">
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
                        class="font-poppins font-normal opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Dashboard</p>
                </a>

            </li>
            {{-- Shops --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.shops') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.shops') }}" class="flex items-center gap-5">
                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 20H4M4 20H14M4 20V6.2002C4 5.08009 4 4.51962 4.21799 4.0918C4.40973 3.71547 4.71547 3.40973 5.0918 3.21799C5.51962 3 6.08009 3 7.2002 3H10.8002C11.9203 3 12.4796 3 12.9074 3.21799C13.2837 3.40973 13.5905 3.71547 13.7822 4.0918C14 4.5192 14 5.07899 14 6.19691V12M14 20H20M14 20V12M20 20H22M20 20V12C20 11.0681 19.9999 10.6024 19.8477 10.2349C19.6447 9.74481 19.2557 9.35523 18.7656 9.15224C18.3981 9 17.9316 9 16.9997 9C16.0679 9 15.6019 9 15.2344 9.15224C14.7443 9.35523 14.3552 9.74481 14.1522 10.2349C14 10.6024 14 11.0681 14 12M7 10H11M7 7H11"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Shops</p>
                </a>
            </li>
            {{-- Customers --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.customers') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.customers') }}" class="flex items-center gap-5">

                    <svg class="size-7 stroke-[1.5] stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 20C17 18.3431 14.7614 17 12 17C9.23858 17 7 18.3431 7 20M21 17.0004C21 15.7702 19.7659 14.7129 18 14.25M3 17.0004C3 15.7702 4.2341 14.7129 6 14.25M18 10.2361C18.6137 9.68679 19 8.8885 19 8C19 6.34315 17.6569 5 16 5C15.2316 5 14.5308 5.28885 14 5.76389M6 10.2361C5.38625 9.68679 5 8.8885 5 8C5 6.34315 6.34315 5 8 5C8.76835 5 9.46924 5.28885 10 5.76389M12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Customers</p>
                </a>
            </li>
            <!-- Appointments -->
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.appointments') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.appointments') }}" class="flex items-center gap-5">
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
            {{-- Manage Branches --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.manage-branches') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.manage-branches') }}" class="flex items-center gap-5">
                    <svg class="stroke-[1.5] stroke-black size-7" width="24" height="24" viewBox="0 0 24 24"
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
            {{-- Invoice --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.invoice') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.invoice') }}" class="flex items-center gap-5">
                    <svg class="stroke-[1.5] stroke-black size-7" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 4H7.2002C6.08009 4 5.51962 4 5.0918 4.21799C4.71547 4.40973 4.40973 4.71547 4.21799 5.0918C4 5.51962 4 6.08009 4 7.2002V16.8002C4 17.9203 4 18.4801 4.21799 18.9079C4.40973 19.2842 4.71547 19.5905 5.0918 19.7822C5.5192 20 6.07899 20 7.19691 20H8M8 4H16.8002C17.9203 4 18.4796 4 18.9074 4.21799C19.2837 4.40973 19.5905 4.71547 19.7822 5.0918C20 5.5192 20 6.07899 20 7.19691V16.8036C20 17.9215 20 18.4805 19.7822 18.9079C19.5905 19.2842 19.2837 19.5905 18.9074 19.7822C18.48 20 17.921 20 16.8031 20H8M8 4V20M12 11H16M12 8H16"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Invoice</p>
                </a>
            </li>
            {{-- Analytics --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.analytics') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.analytics') }}" class="flex items-center gap-5">
                    <svg class="stroke-[1.5] stroke-black size-7" width="24" height="24" viewBox="0 0 24 24"
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
            {{-- Customer Service --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.customer-service') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.customer-service') }}" class="flex items-center gap-5">
                    <svg class="stroke-[1.5] stroke-black size-7" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 8H20C20.5523 8 21 8.44772 21 9V20L17.667 17.231C17.4875 17.0818 17.2608 17 17.0273 17H9C8.44771 17 8 16.5523 8 16V13M16 8V5C16 4.44772 15.5523 4 15 4H4C3.44772 4 3 4.44772 3 5V16.0003L6.33301 13.2308C6.51255 13.0817 6.73924 13 6.97266 13H8M16 8V12C16 12.5523 15.5523 13 15 13H8"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>



                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Customer Service</p>
                </a>
            </li>
            {{-- User Feedback --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.user-feedback') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.user-feedback') }}" class="flex items-center gap-5">
                    <svg class="stroke-[1.5] stroke-black size-7" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 10.001L10.1076 14.6132L10.1097 14.6149C10.7878 15.1122 11.1271 15.361 11.4988 15.4571C11.8272 15.5421 12.1725 15.5421 12.501 15.4571C12.8729 15.3609 13.2132 15.1114 13.8926 14.6132L20 10.001M19.8002 9.04042L14.2012 4.55755C13.506 4.00093 13.1581 3.72271 12.7715 3.61223C12.4304 3.51475 12.0692 3.50959 11.7255 3.59759C11.336 3.69732 10.9809 3.96571 10.2705 4.50286L4.26953 9.04064C3.8038 9.39282 3.57123 9.56902 3.40332 9.79157C3.2546 9.9887 3.14377 10.2116 3.07624 10.4491C3 10.7173 3 11.0093 3 11.5932V17.8011C3 18.9212 3 19.4815 3.21799 19.9093C3.40973 20.2856 3.71547 20.5914 4.0918 20.7831C4.5192 21.0009 5.07899 21.0009 6.19691 21.0009H17.8031C18.921 21.0009 19.48 21.0009 19.9074 20.7831C20.2837 20.5914 20.5905 20.2854 20.7822 19.9091C21 19.4817 21 18.9224 21 17.8045V11.5274C21 10.9703 21 10.69 20.9287 10.4311C20.8651 10.2002 20.7595 9.98259 20.619 9.78865C20.4604 9.56974 20.2409 9.39324 19.8002 9.04042Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        User Feedback</p>
                </a>
            </li>
            {{-- Restrictions --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.restrictions') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.restrictions') }}" class="flex items-center gap-5">
                    <svg class="stroke-[1.5] stroke-black size-7" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.002 9.00006V13.0001M4.38086 15.1999C3.47143 16.775 3.01684 17.5629 3.08477 18.2092C3.14402 18.7729 3.43987 19.2851 3.89844 19.6182C4.42399 20.0001 5.33286 20.0001 7.15049 20.0001H16.8534C18.671 20.0001 19.5798 20.0001 20.1053 19.6182C20.5639 19.2851 20.8599 18.7729 20.9191 18.2092C20.9871 17.5629 20.5326 16.775 19.6232 15.1999L14.7734 6.79986C13.864 5.22468 13.4091 4.43722 12.8154 4.17291C12.2976 3.94236 11.706 3.94236 11.1881 4.17291C10.5947 4.43711 10.1401 5.22458 9.23142 6.79845L4.38086 15.1999ZM12.0527 16.0001V16.1001L11.9521 16.1003V16.0001H12.0527Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Restrictions</p>
                </a>
            </li>
            {{-- Platform Staff --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.platform-staff') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.platform-staff') }}" class="flex items-center gap-5">
                    <svg class="stroke-[1.5] stroke-black size-7" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 18C6.06366 18 6.12926 18 6.19691 18H12M6 18C5.01173 17.9992 4.49334 17.9868 4.0918 17.7822C3.71547 17.5905 3.40973 17.2837 3.21799 16.9074C3 16.4796 3 15.9203 3 14.8002V9.2002C3 8.08009 3 7.51962 3.21799 7.0918C3.40973 6.71547 3.71547 6.40973 4.0918 6.21799C4.51962 6 5.08009 6 6.2002 6H17.8002C18.9203 6 19.4796 6 19.9074 6.21799C20.2837 6.40973 20.5905 6.71547 20.7822 7.0918C21 7.5192 21 8.07899 21 9.19691V14.8031C21 15.921 21 16.48 20.7822 16.9074C20.5905 17.2837 20.2837 17.5905 19.9074 17.7822C19.48 18 18.921 18 17.8031 18H12M6 18C6.00004 16.8954 7.34317 16 9 16C10.6569 16 12 16.8954 12 18M6 18C6 18 6 17.9999 6 18ZM18 14H14M18 11H15M9 13C7.89543 13 7 12.1046 7 11C7 9.89543 7.89543 9 9 9C10.1046 9 11 9.89543 11 11C11 12.1046 10.1046 13 9 13Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Platform Staff</p>
                </a>
            </li>
            {{-- Manage Account --}}
            <li
                class="group flex px-4 py-2 w-full relative rounded-lg overflow-hidden {{ request()->routeIs('admin.manage-accounts') ? 'bg-neutral-150' : '' }}">
                <a href="{{ route('admin.manage-accounts') }}" class="flex items-center gap-5">
                    <svg class="stroke-black stroke-[1.5] size-7" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.2166 19.3323C15.9349 17.9008 14.0727 17 12 17C9.92734 17 8.06492 17.9008 6.7832 19.3323M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p id="sidebar-link-name"
                        class="font-poppins font-normal text-nowrap opacity-0 transition-opacity duration-300 ease-in-out hidden">
                        Manage Account</p>
                </a>
            </li>
        </ul>
    </nav>
</section>
