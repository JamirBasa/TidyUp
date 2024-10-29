<header class="max-w-screen-2xl mx-auto fixed top-0 right-0 left-0 bg-transparent">
    <nav class="flex items-center justify-between  gap-40">
        {{-- Logo --}}
        <a class="flex items-center gap-2 -ml-2" href="{{ route('index') }}">
            <img class="size-18" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="logo">  
            <h1 class="font-clash font-medium text-xl">TidyUp</h1>
        </a>

        {{-- Form for Search Bar --}}
        <form action="" method="POST" class="relative flex items-center flex-1">
            @csrf
            {{-- Search Bar --}}
            <input
            placeholder="Browse for Services"
            class="placeholder:text-neutral-600 placeholder:font-poppins placeholder:font placeholder:text-sm border rounded-full border-neutral-300  pl-12 pr-40 py-[0.5rem] focus:outline-none focus:ring-1 focus:ring-brand-500 focus:border-transparent text-base bg-transparent flex-1"
            type="search"
            name="search"
            id="search"
            />
            {{-- <img  src="{{ asset('assets/icons/Interface/Search_Magnifying_Glass.svg') }}" alt="icon"/> --}}
            <svg class="absolute left-4 size-5 stroke-brand-500 hover:stroke-2 cursor-pointer"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            {{-- the Set Location Button --}}
            <button class="absolute border-l border-neutral-300 py-2 px-4 rounded-r-full flex items-center gap-3 right-0">
                <span class="text-sm">Set Location</span>
                <img class="size-5" src="{{ asset('assets/icons/Navigation/Map_Pin.svg') }}" alt="">
            </button>
        </form> 
        {{-- Only for Guest --}}
        @guest
        {{-- Sing Up --}}
            <a href="{{ route('choose') }}">
                <button class="flex items-center gap-2 bg-brand-500 py-2 px-4 rounded-full">
                    <img class="invert" src="{{ asset('assets/icons/User/User_Circle.svg') }}" alt="icon">
                    <span class="text-sm text-white">Sign In</span>
                </button>
            </a>
        @endguest
        {{-- Only For Logged In Users --}}
        @auth
            <div class="flex items-center justify-between gap-6">
                <!-- notification bell -->
                <button class="relative bg-neutral-150 rounded-full size-12 shadow-sm" >
                    <img class="absolute top-[0.60rem] right-[0.55rem]" src="{{ asset('assets/icons/Communication/Bell_Notification.svg') }}" alt="icon">
                </button>
                <!-- profile picture -->
                <div class="inline-flex items-center relative">
                    <button  class="shadow-sm rounded-full">
                        <img id="user-profile-button" class="size-12 object-cover object-top rounded-full " src="{{ asset('assets/images/sampleDp.png') }}" alt="Profile Picture">
                    </button>
                    {{-- Dropdown --}}
                    <div id="user-header-dropdown" class="w-96 bg-white rounded-lg border border-neutral-300  absolute top-14 right-0 hidden">
                        <!-- Profile Header -->
                        <div class="p-6 border-b">
                            <div class="flex items-center gap-6">
                                <img class="size-16 object-cover object-top rounded-full " src="{{ asset('assets/images/sampleDp.png') }}" alt="Profile Picture">
                                <div>
                                    <div class="font-semibold mb-1">John Doe</div>
                                    <div class="text-xs text-neutral-700">@johndoe</div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Menu Items -->
                        <div class="">

                            <div class="border-b">
                                <button class="w-full px-6 py-3 text-sm text-left hover:bg-neutral-100 inline-flex items-center gap-3">
                                    <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 8.00012L4 16.0001V20.0001L8 20.0001L16 12.0001M12 8.00012L14.8686 5.13146L14.8704 5.12976C15.2652 4.73488 15.463 4.53709 15.691 4.46301C15.8919 4.39775 16.1082 4.39775 16.3091 4.46301C16.5369 4.53704 16.7345 4.7346 17.1288 5.12892L18.8686 6.86872C19.2646 7.26474 19.4627 7.46284 19.5369 7.69117C19.6022 7.89201 19.6021 8.10835 19.5369 8.3092C19.4628 8.53736 19.265 8.73516 18.8695 9.13061L18.8686 9.13146L16 12.0001M12 8.00012L16 12.0001"  stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Edit Profile</span>
                                </button>
                                
                                <form action="{{ route('user.logout') }}" method="POST">
                                    @csrf
                                    <button class="w-full px-6 py-3 text-sm text-left hover:bg-neutral-100 inline-flex items-center gap-3" type="submit">
                                        <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15L15 12M15 12L12 9M15 12H4M4 7.24802V7.2002C4 6.08009 4 5.51962 4.21799 5.0918C4.40973 4.71547 4.71547 4.40973 5.0918 4.21799C5.51962 4 6.08009 4 7.2002 4H16.8002C17.9203 4 18.4796 4 18.9074 4.21799C19.2837 4.40973 19.5905 4.71547 19.7822 5.0918C20 5.5192 20 6.07899 20 7.19691V16.8036C20 17.9215 20 18.4805 19.7822 18.9079C19.5905 19.2842 19.2837 19.5905 18.9074 19.7822C18.48 20 17.921 20 16.8031 20H7.19691C6.07899 20 5.5192 20 5.0918 19.7822C4.71547 19.5905 4.40973 19.2839 4.21799 18.9076C4 18.4798 4 17.9201 4 16.8V16.75" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </div>
                        
                            <div class="border-b">
                                <button class="w-full px-6 py-3 text-sm text-left hover:bg-neutral-100 inline-flex items-center gap-3">
                                    <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 6.00098C9 10.9715 13.0294 15.001 18 15.001C18.9093 15.001 19.787 14.8665 20.6144 14.6157C19.4943 18.3113 16.0613 21.0008 12 21.0008C7.02944 21.0008 3 16.9717 3 12.0011C3 7.93981 5.69007 4.50681 9.38561 3.38672C9.13484 4.21409 9 5.09172 9 6.00098Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Appearance: Set to Dark Mode</span>
                                </button>
                                <button class="w-full px-6 py-3 text-sm text-left hover:bg-neutral-100 inline-flex items-center gap-3">
                                    <svg class="stroke-black stroke-1"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.3499 8.92293L19.9837 8.7192C19.9269 8.68756 19.8989 8.67169 19.8714 8.65524C19.5983 8.49165 19.3682 8.26564 19.2002 7.99523C19.1833 7.96802 19.1674 7.93949 19.1348 7.8831C19.1023 7.82677 19.0858 7.79823 19.0706 7.76998C18.92 7.48866 18.8385 7.17515 18.8336 6.85606C18.8331 6.82398 18.8332 6.79121 18.8343 6.72604L18.8415 6.30078C18.8529 5.62025 18.8587 5.27894 18.763 4.97262C18.6781 4.70053 18.536 4.44993 18.3462 4.23725C18.1317 3.99685 17.8347 3.82534 17.2402 3.48276L16.7464 3.1982C16.1536 2.85658 15.8571 2.68571 15.5423 2.62057C15.2639 2.56294 14.9765 2.56561 14.6991 2.62789C14.3859 2.69819 14.0931 2.87351 13.5079 3.22396L13.5045 3.22555L13.1507 3.43741C13.0948 3.47091 13.0665 3.48779 13.0384 3.50338C12.7601 3.6581 12.4495 3.74365 12.1312 3.75387C12.0992 3.7549 12.0665 3.7549 12.0013 3.7549C11.9365 3.7549 11.9024 3.7549 11.8704 3.75387C11.5515 3.74361 11.2402 3.65759 10.9615 3.50224C10.9334 3.48658 10.9056 3.46956 10.8496 3.4359L10.4935 3.22213C9.90422 2.86836 9.60915 2.69121 9.29427 2.62057C9.0157 2.55807 8.72737 2.55634 8.44791 2.61471C8.13236 2.68062 7.83577 2.85276 7.24258 3.19703L7.23994 3.1982L6.75228 3.48124L6.74688 3.48454C6.15904 3.82572 5.86441 3.99672 5.6517 4.23614C5.46294 4.4486 5.32185 4.69881 5.2374 4.97018C5.14194 5.27691 5.14703 5.61896 5.15853 6.3027L5.16568 6.72736C5.16676 6.79166 5.16864 6.82362 5.16817 6.85525C5.16343 7.17499 5.08086 7.48914 4.92974 7.77096C4.9148 7.79883 4.8987 7.8267 4.86654 7.88237C4.83436 7.93809 4.81877 7.96579 4.80209 7.99268C4.63336 8.26452 4.40214 8.49186 4.12733 8.65572C4.10015 8.67193 4.0715 8.68752 4.01521 8.71871L3.65365 8.91908C3.05208 9.25245 2.75137 9.41928 2.53256 9.65669C2.33898 9.86672 2.19275 10.1158 2.10349 10.3872C2.00259 10.6939 2.00267 11.0378 2.00424 11.7255L2.00551 12.2877C2.00706 12.9708 2.00919 13.3122 2.11032 13.6168C2.19979 13.8863 2.34495 14.134 2.53744 14.3427C2.75502 14.5787 3.05274 14.7445 3.64974 15.0766L4.00808 15.276C4.06907 15.3099 4.09976 15.3266 4.12917 15.3444C4.40148 15.5083 4.63089 15.735 4.79818 16.0053C4.81625 16.0345 4.8336 16.0648 4.8683 16.1255C4.90256 16.1853 4.92009 16.2152 4.93594 16.2452C5.08261 16.5229 5.16114 16.8315 5.16649 17.1455C5.16707 17.1794 5.16658 17.2137 5.16541 17.2827L5.15853 17.6902C5.14695 18.3763 5.1419 18.7197 5.23792 19.0273C5.32287 19.2994 5.46484 19.55 5.65463 19.7627C5.86915 20.0031 6.16655 20.1745 6.76107 20.5171L7.25478 20.8015C7.84763 21.1432 8.14395 21.3138 8.45869 21.379C8.73714 21.4366 9.02464 21.4344 9.30209 21.3721C9.61567 21.3017 9.90948 21.1258 10.4964 20.7743L10.8502 20.5625C10.9062 20.5289 10.9346 20.5121 10.9626 20.4965C11.2409 20.3418 11.5512 20.2558 11.8695 20.2456C11.9015 20.2446 11.9342 20.2446 11.9994 20.2446C12.0648 20.2446 12.0974 20.2446 12.1295 20.2456C12.4484 20.2559 12.7607 20.3422 13.0394 20.4975C13.0639 20.5112 13.0885 20.526 13.1316 20.5519L13.5078 20.7777C14.0971 21.1315 14.3916 21.3081 14.7065 21.3788C14.985 21.4413 15.2736 21.4438 15.5531 21.3855C15.8685 21.3196 16.1657 21.1471 16.7586 20.803L17.2536 20.5157C17.8418 20.1743 18.1367 20.0031 18.3495 19.7636C18.5383 19.5512 18.6796 19.3011 18.764 19.0297C18.8588 18.7252 18.8531 18.3858 18.8417 17.7119L18.8343 17.2724C18.8332 17.2081 18.8331 17.1761 18.8336 17.1445C18.8383 16.8247 18.9195 16.5104 19.0706 16.2286C19.0856 16.2007 19.1018 16.1726 19.1338 16.1171C19.166 16.0615 19.1827 16.0337 19.1994 16.0068C19.3681 15.7349 19.5995 15.5074 19.8744 15.3435C19.9012 15.3275 19.9289 15.3122 19.9838 15.2818L19.9857 15.2809L20.3472 15.0805C20.9488 14.7472 21.2501 14.5801 21.4689 14.3427C21.6625 14.1327 21.8085 13.8839 21.8978 13.6126C21.9981 13.3077 21.9973 12.9658 21.9958 12.2861L21.9945 11.7119C21.9929 11.0287 21.9921 10.6874 21.891 10.3828C21.8015 10.1133 21.6555 9.86561 21.463 9.65685C21.2457 9.42111 20.9475 9.25526 20.3517 8.92378L20.3499 8.92293Z" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8.00033 12C8.00033 14.2091 9.79119 16 12.0003 16C14.2095 16 16.0003 14.2091 16.0003 12C16.0003 9.79082 14.2095 7.99996 12.0003 7.99996C9.79119 7.99996 8.00033 9.79082 8.00033 12Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Setting</span>
                                </button>
                            </div>
                            
                            <div class="border-b">
                                <button  class="w-full px-6 py-3 text-sm text-left hover:bg-neutral-100 inline-flex items-center gap-3">
                                    <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.14648 9.07361C9.31728 8.54732 9.63015 8.07896 10.0508 7.71948C10.4714 7.36001 10.9838 7.12378 11.5303 7.03708C12.0768 6.95038 12.6362 7.0164 13.1475 7.22803C13.6587 7.43966 14.1014 7.78875 14.4268 8.23633C14.7521 8.68391 14.9469 9.21256 14.9904 9.76416C15.0339 10.3158 14.9238 10.8688 14.6727 11.3618C14.4215 11.8548 14.0394 12.2685 13.5676 12.5576C13.0958 12.8467 12.5533 12.9998 12 12.9998V14.0002M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 17V17.1L11.9502 17.1002V17H12.0498Z"  stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                        
                                    <span>Help</span>
                                </button>
                                <button class="w-full px-6 py-3 text-sm text-left hover:bg-neutral-100 inline-flex items-center gap-3">
                                    <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.3078 13.6914L15.1539 8.84522M20.1113 5.8877L16.0207 19.1823C15.6541 20.3737 15.4706 20.9697 15.1544 21.1673C14.8802 21.3386 14.5406 21.3673 14.2419 21.2433C13.8975 21.1004 13.618 20.5423 13.0603 19.427L10.4694 14.2451C10.3809 14.0681 10.3366 13.98 10.2775 13.9033C10.225 13.8353 10.1645 13.774 10.0965 13.7215C10.0215 13.6637 9.93486 13.6204 9.76577 13.5359L4.57192 10.939C3.45662 10.3813 2.89892 10.1022 2.75601 9.75781C2.63207 9.45912 2.66033 9.11925 2.83169 8.845C3.02928 8.52876 3.62523 8.34505 4.81704 7.97834L18.1116 3.8877C19.0486 3.5994 19.5173 3.45537 19.8337 3.57155C20.1094 3.67275 20.3267 3.88986 20.4279 4.16553C20.544 4.48185 20.3999 4.95029 20.1119 5.88631L20.1113 5.8877Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                        
                                    <span>Send Feedback</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div">
            </div>
        @endauth
    </nav>
</header>