@props(['user'])
<header class="transition-all duration-1000 ease-in-out fixed top-0 left-0 right-0 z-20">
    <nav class=" flex items-center  justify-between px-6">
        <!-- logo -->
        <div class="flex items-center gap-4">
            <button class="" onclick="toggleSidebar()">
                <img id="sidebar-toggle" class="size-9" src="{{ asset('assets/Icons/Menu/Menu_Alt_04.svg') }}" alt="">
            </button>
            <a class="flex items-center gap-2 -ml-2" href="{{ route('index') }}">
                <img class="size-18" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="logo">  
                <h1 class="font-clash font-medium text-xl">TidyUp</h1>
            </a>
        </div>
        <div class="flex items-center justify-between gap-16">
            <form action="" class="relative flex items-center">
                <!-- search bar -->
                <input
                placeholder="Search across your shop"
                class="placeholder:text-black placeholder:font-poppins placeholder:font placeholder:text-base border rounded-full border-neutral-300  pl-12 pr-4 py-[0.5rem] w-[30rem] focus:outline-none focus:ring-1 focus:ring-brand-500 focus:border-transparent text-base bg-transparent font-normal"
                type="search"
                name="search"
                id="search"
                />
                <img class="absolute left-4 size-5 svg-icon" src="{{ asset('assets/Icons/Interface/Search_Magnifying_Glass.svg') }}" alt="icon"/>
            </form>
            
            <div class="flex items-center justify-between gap-6">
                <!-- notification bell -->
                <button class="relative bg-neutral-150 rounded-full size-12 shadow-sm" >
                    <img class="absolute top-[0.60rem] right-[0.55rem]" src="{{ asset('assets/Icons/Communication/Bell_Notification.svg') }}" alt="">
                </button>
                <!-- profile picture -->
                <button id="user-profile" class="shadow-sm rounded-full relative">
                    <img class="size-12 object-cover object-top rounded-full " src="{{ asset('assets/images/sampleDp.png') }}" alt="Profile Picture">
                    {{-- <x-profile-dropdown :user="$user"/> --}}
                    
                </button>
            </div>
            
        </div>
    </nav>
</header>
<script>
    const userHeaderDropdown = document.getElementById('user-header-dropdown');
const userProfileButton = document.getElementById('user-profile');

userProfileButton.addEventListener('click', (event) => {
    event.stopPropagation();
    userHeaderDropdown.classList.toggle('hidden');
});

document.addEventListener('click', (event) => {
    if (!userHeaderDropdown.contains(event.target) && !userProfileButton.contains(event.target)) {
    userHeaderDropdown.classList.add('hidden');
    }
});

const hideIcon = document.querySelector('#hide-icon');
const showIcon = document.querySelector('#show-icon');
const password = document.querySelector('#password');

hideIcon.addEventListener('click', () => {
    password.type = 'text';
    hideIcon.classList.add('hidden');
    showIcon.classList.remove('hidden');
});

showIcon.addEventListener('click', () => {
    password.type = 'password';
    hideIcon.classList.remove('hidden');
    showIcon.classList.add('hidden');
});
</script>