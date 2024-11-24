@php
    $staffs = [
        [
            'name' => 'Jericho Memoracion',
            'email' => 'jericho@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09877896789',
            'dp_path' => 'assets/images/images/jericho.png',
        ],
        [
            'name' => 'Jomark Abello',
            'email' => 'jomark@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09270180602',
            'dp_path' => 'assets/images/images/jomark.png',
        ],
        [
            'name' => 'Ian Alama',
            'email' => 'alamaian@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09270180602',
            'dp_path' => 'assets/images/images/ian.png',
        ],
        [
            'name' => 'Sharief Kundong',
            'email' => 'sharief@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09877896789',
            'dp_path' => 'assets/images/images/sharief.png',
        ],
        [
            'name' => 'Wenwen Cambeli',
            'email' => 'wenwen@gmail.com',
            'role' => 'Barber',
            'contact_number' => '09877896789',
            'dp_path' => 'assets/images/images/herwayne.png',
        ],
    ];
@endphp
<x-shop-layout :user="$user">
    <section class="grid grid-cols-6 gap-4">
        {{-- 1st Row - 1st Column Of the Grid --}}
        <div class=" col-span-4">
            <div class="bg-white p-10 rounded-lg shadow-sm h-full">
                <div class="flex items-center justify-between mb-10">
                    {{-- Box's Title --}}
                    <div class="inline-flex gap-4 items-center">
                        <h1 class="text-4xl font-bold">Branch Manager</h1>
                        <div class="inline-flex gap-2 items-center">
                            <svg class="stroke-black stroke-1 size-5" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.99902 16H4.99902V21M13.999 8H18.999V3M4.58203 9.0034C5.14272 7.61566 6.08146 6.41304 7.29157 5.53223C8.50169 4.65141 9.93588 4.12752 11.4288 4.02051C12.9217 3.9135 14.4138 4.2274 15.7371 4.92661C17.0605 5.62582 18.1603 6.68254 18.9131 7.97612M19.4166 14.9971C18.8559 16.3848 17.9171 17.5874 16.707 18.4682C15.4969 19.3491 14.0642 19.8723 12.5713 19.9793C11.0784 20.0863 9.58509 19.7725 8.26172 19.0732C6.93835 18.374 5.83785 17.3175 5.08496 16.0239"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-lg">CHANGE</span>
                        </div>
                    </div>
                    {{-- Add Branch Manager Button --}}
                    <div>
                        <button id="editManager"
                            class="bg-brand-500 text-white py-2 px-6 rounded-full hover:shadow-md hover:scale-105 transition-transform ease-in-out">
                            Edit Branch Manager
                        </button>
                    </div>
                </div>
                <!-- Modal Backdrop (kept static in HTML) -->
                <div id="modalBackdrop"
                    class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-40">
                    <!-- Modal Content (will be dynamically populated by JavaScript) -->
                    <div id="modalContent"
                        class="bg-white rounded-lg w-[calc(100%+450px)] max-w-[calc(450px+450px)] mx-4 p-16 z-50 h-[calc(95%)] ">
                        <!-- This content will be replaced by JavaScript when needed -->
                    </div>
                </div>

                {{-- Branch Manager Details --}}
                <div class="flex items-center justify-between gap-10">
                    <img class="object-cover size-24 rounded-full" src="{{ asset('assets/images/DeanWong.png') }}">
                    <div class="grid flex-1 gap-10" style="grid-template-columns: min-content 1fr">
                        <div class="grid gap-3">
                            <div class="font-bold text-left">Name:</div>
                            <div class="font-bold text-left">Email:</div>
                            <div class="font-bold text-left">Branch:</div>
                            <div class="font-bold text-left text-nowrap">Contact Number:</div>
                        </div>
                        <div class="grid gap-3">
                            <div class="text-left">Dean Wong</div>
                            <div class="text-left">deanwong@gmail.com</div>
                            <div class="text-left">{{ $shopAddress[0]->detailed_address }}</div>
                            <div class="text-left">09877896789</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- 1st Row - 2nd Column of the Grid --}}
        <div class="col-span-2 grid  gap-4">
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="font-bold text-lg">Branch</h1>
                    <button id="addBranch"
                        class="bg-brand-500 text-white text-xs py-2 px-6 rounded-full hover:shadow-md hover:scale-105 transition-transform ease-in-out">
                        Add Branch
                    </button>
                    <div id="modalBackdrop"
                        class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-40 ">
                        <!-- Modal Content (will be dynamically populated by JavaScript) -->
                        <div id="modalContent"
                            class="bg-white rounded-lg w-[calc(100%+450px)] max-w-[calc(450px+450px)] mx-4 p-16 z-50 h-[calc(90%)] overflow-y overflow-x-auto">
                            <!-- This content will be replaced by JavaScript when needed -->
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-4xl font-bold">{{ $shopAddress[0]->barangay }}, Zamboanga City</h1>
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="font-bold text-lg">Appointments</h1>
                    <svg class="stroke-black stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class=" flex items-center">
                    <h1 class="text-5xl font-bold">11</h1>
                </div>
                <div class=" flex items-center">
                    <button class="inline-flex gap-2 items-center mt-4">
                        <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="">7 Days</span>
                    </button>
                </div>
            </div>

        </div>
        {{-- 2nd Row - 1st Column of the Grid --}}
        <div class="bg-white p-10 rounded-lg shadow-sm col-span-4">
            <div class="flex items-center justify-between mb-20">
                {{-- Box's Title --}}
                <div class="inline-flex gap-4 items-center">
                    <h1 class="text-4xl font-bold">Staff list</h1>
                </div>
                {{-- Add Branch Manager Button --}}
                <!-- Add Staff Button -->
                <div>
                    <button id="addStaffButton"
                        class="bg-brand-500 text-white py-2 px-6 rounded-full hover:shadow-md hover:scale-105 transition-transform ease-in-out">
                        Add Staff
                    </button>
                </div>

                <!-- Modal Backdrop (kept static in HTML) -->
                <div id="modalBackdrop"
                    class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-40 ">
                    <!-- Modal Content (will be dynamically populated by JavaScript) -->
                    <div id="modalContent"
                        class="bg-white rounded-lg w-[calc(100%+450px)] max-w-[calc(450px+450px)] mx-4 p-16 z-50 h-[calc(90%)] overflow-y overflow-x-auto">
                        <!-- This content will be replaced by JavaScript when needed -->
                    </div>
                </div>

            </div>
            {{-- Branch Manager Details --}}
            <div class=" h-[30rem] overflow-y-scroll">
                @foreach ($staffs as $staff)
                    <div class="flex justify-between">
                        <div class="flex items-center justify-between gap-10 mb-10">
                            <img class="object-cover size-24 rounded-full" src="{{ asset($staff['dp_path']) }}">
                            <div class="grid flex-1 gap-10" style="grid-template-columns: min-content 1fr">
                                <div class="grid gap-3">
                                    <div class="font-bold text-left">Name:</div>
                                    <div class="font-bold text-left">Email:</div>
                                    <div class="font-bold text-left">Role:</div>
                                    <div class="font-bold text-left text-nowrap">Contact Number:</div>
                                </div>
                                <div class="grid gap-3">
                                    <div class="text-left">{{ $staff['name'] }}</div>
                                    <div class="text-left">{{ $staff['email'] }}</div>
                                    <div class="text-left">{{ $staff['role'] }}</div>
                                    <div class="text-left">{{ $staff['contact_number'] }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mr-4">
                            <div class="flex gap-4">
                                <button>
                                    <svg class="stroke-1 stroke-neutral-500 hover:stroke-black hover:scale-110 transition-transform ease-in-out"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 8.00012L4 16.0001V20.0001L8 20.0001L16 12.0001M12 8.00012L14.8686 5.13146L14.8704 5.12976C15.2652 4.73488 15.463 4.53709 15.691 4.46301C15.8919 4.39775 16.1082 4.39775 16.3091 4.46301C16.5369 4.53704 16.7345 4.7346 17.1288 5.12892L18.8686 6.86872C19.2646 7.26474 19.4627 7.46284 19.5369 7.69117C19.6022 7.89201 19.6021 8.10835 19.5369 8.3092C19.4628 8.53736 19.265 8.73516 18.8695 9.13061L18.8686 9.13146L16 12.0001M12 8.00012L16 12.0001"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button>
                                    <svg class="stroke-neutral-500 hover:stroke-red-500 hover:scale-110 stroke-1 transition-transform ease-in-out"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 10V17M10 10V17M6 6V17.8C6 18.9201 6 19.4798 6.21799 19.9076C6.40973 20.2839 6.71547 20.5905 7.0918 20.7822C7.5192 21 8.07899 21 9.19691 21H14.8031C15.921 21 16.48 21 16.9074 20.7822C17.2837 20.5905 17.5905 20.2839 17.7822 19.9076C18 19.4802 18 18.921 18 17.8031V6M6 6H8M6 6H4M8 6H16M8 6C8 5.06812 8 4.60241 8.15224 4.23486C8.35523 3.74481 8.74432 3.35523 9.23438 3.15224C9.60192 3 10.0681 3 11 3H13C13.9319 3 14.3978 3 14.7654 3.15224C15.2554 3.35523 15.6447 3.74481 15.8477 4.23486C15.9999 4.6024 16 5.06812 16 6M16 6H18M18 6H20"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- 2nd Row - 2nd Column of the grid --}}
        <div class="bg-white p-10 rounded-lg shadow-sm col-span-2">
            <div class="flex items-center justify-between mb-10">
                <div class="inline-flex items-center gap-2">
                    <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h1 class="text-4xl font-bold">Top Services </h1>
                </div>
                <button class="flex items-center gap-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke="black"
                            stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Sort By</span>
                </button>
            </div>
            <div class="border-b py-3 px-4 flex items-center justify-between">
                <h6 class="font-bold">Service</h6>
                <h6 class="font-bold">Total</h6>
            </div>
            <div class="py-3 px-4 flex items-center justify-between">
                <p>Burst Fade Parin to ya?</p>
                <p>419</p>
            </div>
            @for ($i = 0; $i < 9; $i++)
                <div class="py-3 px-4 flex items-center justify-between">
                    <p>Faded Haircut</p>
                    <p>20</p>
                </div>
            @endfor
        </div>
    </section>
    <script>
        // SENG DITO MO LANG MUNA ILAGAY ANG JAVASCRIPT. AKO NA BAHALA MAG SET KUNG SAAN ANG LOC NG JS, MINSAN KASI GALOKO
        // ~ ARTURITO

        // DOM Elements
        const addStaffButton = document.getElementById('addStaffButton');
        const editButton = document.getElementById('editManager'); // For editing manager
        const addBranchButton = document.getElementById('addBranch');
        const modalBackdrop = document.getElementById('modalBackdrop');
        const modalContent = document.getElementById('modalContent');
        const closeModal = document.getElementById('closeModal');
        const editForm = document.getElementById('editForm');

        // Function to set the modal content for Edit Manager
        function setEditManagerContent() {
            modalContent.innerHTML = `
                                <div class="flex justify-between items-center mb-4">
                            <h2 class="text-3xl font-semibold">Edit Branch Manager</h2>
                            <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <form id="editForm" class="space-y-4">
                            <!-- First Name & Last Name -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label class="font-semibold">First Name</label>
                                    <input type="text" name="firstName" value="John" 
                                        class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="font-semibold">Last Name</label>
                                    <input type="text" name="lastName" value="Doe"
                                        class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Role -->                            
                                <div class="flex flex-col gap-2">
                                    <label class="font-semibold" >Role </label>
                                    <div class="relative flex items-center">
                                    <input type="text" name="name" placeholder="Branch Owner" 
                                        class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror" readonly class="block w-full rounded-md border-gray-300 text-gray-500">
                                        </div>
                                </div>
                                <!-- Gender -->
                                <div class="flex flex-col gap-2">
                                    <label class="font-semibold" for="gender">Gender</label>
                                    <div class="relative flex items-center">
                                        <select class="border border-neutral-400 py-3 px-4 rounded-lg w-full appearance-none @error('gender') ring-1 ring-red-500 @enderror" 
                                                name="gender" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                            <option value="Others" {{ old('gender') == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                        <svg class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    @error('gender')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Phone Number -->
                            <div class="flex flex-col gap-2">
                                <label class="font-semibold">Phone Number</label>
                                <input type="tel" name="phoneNumber" placeholder="xxxx xxx xxxx"
                                    class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="font-semibold">Branch</label>
                                <div class="relative">
                                    <select name="branch" 
                                            class="border border-neutral-400 py-3 px-4 rounded-lg w-full appearance-none @error('email') ring-1 ring-red-500 @enderror">
                                        <option value="Upper Calarian" selected>Upper Calarian</option>
                                    </select>
                                    <svg class="absolute top-1/2 right-3 -translate-y-1/2 stroke-black stroke-1 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="flex flex-col gap-2 mb-4">
                                <div class="flex items-center justify-between ">
                                    <label class="font-semibold" for="password">New Password (Optional)</label>
                                    <p id="strengthDisplay" class="text-sm"></p>
                                </div>
                                <div class="relative flex items-center">
                                    <input class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('password') ring-1 ring-red-500 @enderror" 
                                        type="password" name="password" id="password" placeholder="Enter your password">
                                    <!-- Password visibility toggle icons -->
                                </div>
                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                                <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-6 text-left">
                                    <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use 8 or more Characters</li>
                                    <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use a number (e.g. 1234)</li>
                                    <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use upper and lower case letter (e.g. Aa)</li>
                                    <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use a symbol(e.g. !@#$)</li>
                                </ul>
                            <!-- Confirm Password -->
                            <div class="flex flex-col gap-2 ">
                                <label class="font-semibold">Confirm Password</label>
                                <input type="password" name="confirmPassword" placeholder="Confirm new password"
                                    class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror">
                            </div>


                            <!-- Form Buttons -->
                            <div class="grid grid-cols-2 gap-4 pt-2">
                                <button
                                    class="bg-neutral-300 hover:bg-neutral-400 active:bg-neutral-200 rounded-lg p-3 font-semibold w-full transition-colors duration-150 ease-in-out text-center">
                                    Cancel
                                </button>
                                <button
                                    class="bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-lg p-3 font-semibold">Save Changes
                                </button>
                            </div>
                        </form>
    `;
            const closeModal = document.getElementById('closeModal');
            closeModal.addEventListener('click', hideModal);
        }
        // Function to set the modal content adding staff
        function setAddStaffContent() {
            modalContent.innerHTML = `
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-3xl font-semibold">Add a Staff Account</h2>
        <button id="closeModal" class="text-gray-500 hover:text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <form id="editForm" class="space-y-4">
        <!-- First Name & Last Name -->
        <div class="grid grid-cols-2 gap-4">
            <div class="flex flex-col gap-2">
                <label class="font-semibold">First Name</label>
                <input type="text" name="firstName" value="John" 
                    class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror">
            </div>
            <div class="flex flex-col gap-2">
                <label class="font-semibold">Last Name</label>
                <input type="text" name="lastName" value="Doe"
                    class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror">
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <!-- Role -->                            
            <div class="flex flex-col gap-2">
                <label class="font-semibold" >Role </label>
                <div class="relative flex items-center">
                    <select name="name" 
                            class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror block w-full rounded-md text-gray-500">
                        <option value="Barber " selected>Barber</option>
                        <!-- Add more options as needed -->
                    </select>
                                        <svg class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

            </div>
            <!-- Gender -->
            <div class="flex flex-col gap-2">
                <label class="font-semibold" for="gender">Gender</label>
                <div class="relative flex items-center">
                    <select class="border border-neutral-400 py-3 px-4 rounded-lg w-full appearance-none @error('gender') ring-1 ring-red-500 @enderror" 
                            name="gender" id="gender">
                        <option value="">Select Gender</option>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Others" {{ old('gender') == 'Others' ? 'selected' : '' }}>Others</option>
                    </select>
                    <svg class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                @error('gender')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!-- Phone Number -->
        <div class="flex flex-col gap-2">
            <label class="font-semibold">Phone Number</label>
            <input type="tel" name="phoneNumber" placeholder="xxxx xxx xxxx"
                class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror">
        </div>

        <div class="flex flex-col gap-2">
            <label class="font-semibold">Branch</label>
            <div class="relative">
                <select name="branch" 
                        class="border border-neutral-400 py-3 px-4 rounded-lg w-full appearance-none @error('email') ring-1 ring-red-500 @enderror">
                    <option value="Upper Calarian" selected>Upper Calarian</option>
                </select>
                <svg class="absolute top-1/2 right-3 -translate-y-1/2 stroke-black stroke-1 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <!-- Password -->
        <div class="flex flex-col gap-2 mb-4">
            <div class="flex items-center justify-between ">
                <label class="font-semibold" for="password">Password</label>
                <p id="strengthDisplay" class="text-sm"></p>
            </div>
            <div class="relative flex items-center">
                <input class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('password') ring-1 ring-red-500 @enderror" 
                    type="password" name="password" id="password" placeholder="Enter your password">
                <!-- Password visibility toggle icons -->
            </div>
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 mb-6 text-left">
                <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use 8 or more Characters</li>
                <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use a number (e.g. 1234)</li>
                <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use upper and lower case letter (e.g. Aa)</li>
                <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use a symbol(e.g. !@#$)</li>
            </ul>
        <!-- Confirm Password -->
        <div class="flex flex-col gap-2 ">
            <label class="font-semibold">Confirm Password</label>
            <input type="password" name="confirmPassword" placeholder="Confirm new password"
                class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror">
        </div>
        <!-- terms and policy -->
            <div class="flex items-center justify-center  space-x-2 text-sm text-gray-700 pt-2 pb-2">
                <input type="checkbox" id="terms" class="peer h-4 w-4 border-2 border-gray-300 rounded-md focus:outline-none  checked:bg-black checked:border-black checked:accent-black">
                <label for="terms" class="flex items-center" >
                    By creating an account, I agree to our 
                    <a href="#" class="text-black underline ml-1 mr-1" font-bold >Terms of use </a>
                    and
                    <a href="#" class="text-black underline ml-1 ">Privacy Policy</a>.
                </label>
            </div>

        <!-- Form Buttons -->
        <div>
            <button 
                class="w-full bg-brand-500 text-white py-2.5 lg:py-3 rounded-lg text-sm lg:text-base" 
            type="submit">Add Account</button>
        </div>
    </form>
    `;
            const closeModal = document.getElementById('closeModal');
            closeModal.addEventListener('click', hideModal);
        }

        function setAddBranchContent() {
            modalContent.innerHTML = `
    <form>
     <div class="max-w-screen-xl mx-auto bg-white  rounded-lg ">

            <div class="mb-6">
                <h1 class="font-clash flex font-medium text-2xl mb-2">Add a New Branch</h1>
                <h1 class="text-sm">Add appoitment types, service categories, shop services, branches and more!</h1>
            </div>
                    <div class="mb-8">
                    <label for="category[]" class="font-semibold  mb-4">Appointment Type</label>
                    <div class="relative grid grid-cols-3 gap-3 mb-2 mt-2">

                        {{-- Barbershop --}}
                        <button
                            class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2 "
                            id="button1">
                            <svg id="check-icon1" class="stroke-white stroke-2 hidden" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span id="category1">Barbershop</span>
                        </button>
                        <input class="absolute invisible -top-4 right-1 pointer-events-none" type="checkbox"
                            name="category[]" id="checkbox1" value="1">

                        {{-- Beauty Salon --}}
                        <button
                            class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2"
                            id="button2">
                            <svg id="check-icon2" class="stroke-white stroke-2 hidden" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span id="category2">Beauty Salon</span>
                        </button>
                        <input class="absolute invisible -top-4 right-2 pointer-events-none" type="checkbox"
                            name="category[]" id="checkbox2" value="2">

                        {{-- Hair Salon --}}
                        <button
                            class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2"
                            id="button3">
                            <svg id="check-icon3" class="stroke-white stroke-2 hidden" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span id="category3">Hair Salon</span>
                        </button>
                        <input class="absolute invisible -top-4 right-3 pointer-events-none" type="checkbox"
                            name="category[]" id="checkbox3" value="3">
                    </div>
                    @error('category')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                    <label for="category[]" class="font-semibold mt-4 mb-2">Add Branches</label>
                    <h6 class="text-sm mb-4">Leave as is if your shop does not have branches.</h6>
                    <div class="relative grid grid-cols-4 gap-3 mb-2">

                        {{-- Vistoria Branch --}}
                        <button
                            class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2 "
                            id="button1">
                            <svg id="check-icon1" class="stroke-white stroke-2 hidden" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span id="category1">Victoria Branch</span>
                        </button>
                        <input class="absolute invisible -top-4 right-1 pointer-events-none" type="checkbox"
                            name="category[]" id="checkbox1" value="1">

                        {{-- Beauty Salon --}}
                        <button
                            class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2"
                            id="button2">
                            <svg id="check-icon2" class="stroke-white stroke-2 hidden" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span id="category2">Guiwan Branch</span>
                        </button>
                        <input class="absolute invisible -top-4 right-2 pointer-events-none" type="checkbox"
                            name="category[]" id="checkbox2" value="2">

                    </div>
                    @error('category')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

             {{-- Address --}}
                <div class="flex flex-col mt-8">
                    <label class="font-semibold" for="address">Branch Address</label>
                    <div class="grid grid-cols-4 gap-3 mb-8 flex-1">
                        {{-- Region --}}
                        <div class="flex flex-col gap-3">
                            <label for="region">Region</label>
                            <div class="relative flex items-center">
                                <select
                                    class="border w-full border-neutral-400 py-3 px-4 rounded-lg truncate @error('region')ring-1 ring-red-500 @enderror"
                                    id="regionSelect" name="region">
                                    <option value="">Select Region</option>
                                </select>
                                <svg id="caret-down1"
                                    class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            @error('region')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Province --}}
                        <div class="flex flex-col gap-3">
                            <label for="province">Province</label>
                            <div class="relative inline-flex items-center">
                                <select
                                    class="border w-full border-neutral-400 py-3 pl-4 pr-9 rounded-lg @error('province')ring-1 ring-red-500 @enderror"
                                    id="provinceSelect" name="province">
                                    <option value="">Select Province</option>
                                </select>
                                <svg id="caret-down2"
                                    class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            @error('province')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- City --}}
                        <div class="flex flex-col gap-3">
                            <label for="city">City</label>
                            <div class="relative inline-flex items-center">
                                <select
                                    class="border w-full border-neutral-400 py-3 pl-4 pr-9 rounded-lg @error('city')ring-1 ring-red-500 @enderror"
                                    id="citySelect" name="city">
                                    <option value="">Select City</option>
                                </select>
                                <svg id="caret-down3"
                                    class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            @error('city')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Barangay --}}
                        <div class="flex flex-col gap-3">
                            <label for="barangay">Barangay</label>
                            <div class="relative flex items-center">
                                <select
                                    class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('barangay')ring-1 ring-red-500 @enderror"
                                    id="barangaySelect" name="barangay">
                                    <option value="">Select Barangay</option>
                                </select>
                                <svg id="caret-down4"
                                    class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            @error('barangay')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 mb-8 flex-1">
                        <label for="detailed_address">Detailed Address</label>
                        <input
                            class="border border-neutral-400 py-3 px-4 rounded-lg @error('detailed_address')ring-1 ring-red-500 @enderror"
                            type="text" name="detailed_address" id="detailed_address"
                            placeholder="Enter your detailed address" value="{{ old('detailed_address') }}">
                        @error('detailed_address')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="font-semibold">Add Branch Owner</label>
                        <div class="relative">
                            <select name="branch" 
                                    class="border border-neutral-400 py-3 px-4 rounded-lg w-full appearance-none @error('email') ring-1 ring-red-500 @enderror">
                                <option value="Upper Calarian" selected>Select Branch Owner</option>
                            </select>
                            <svg class="absolute top-1/2 right-3 -translate-y-1/2 stroke-black stroke-1 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                            <!-- Form Buttons -->
            <div class="grid grid-cols-2 gap-4 mt-6">
                <button
                    class="bg-neutral-300 hover:bg-neutral-400 active:bg-neutral-200 rounded-lg p-3 font-semibold w-full transition-colors duration-150 ease-in-out text-center">
                    Cancel
                </button>
                <button
                    class="bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-lg p-3 font-semibold">Save Changes
                </button>
            </div>
            </div>

        </form>

    `;
            const addBranchForm = document.getElementById('addBranchForm');
            addBranchForm.addEventListener('submit', handleAddBranch);

            const closeModal = document.getElementById('closeModal');
            closeModal.addEventListener('click', hideModal);
        }
        // Function to handle adding a branch
        function handleAddBranch(e) {
            e.preventDefault();

            const formData = new FormData(e.target);
            const data = Object.fromEntries(formData.entries());

            // Validate form data (e.g. check if required fields are filled)
            if (!data.branchName || !data.location || !data.manager) {
                alert('Please fill in all required fields.');
                return;
            }

            // Log the form data (replace with your API call)
            console.log('Branch data:', data);

            // Close the modal after submission
            hideModal();
        }

        // Function to show the modal
        function showModal(type) {
            modalBackdrop.classList.remove('hidden');
            modalBackdrop.classList.add('flex');

            if (type === 'addStaff') {
                setAddStaffContent();
            } else if (type === 'editManager') {
                setEditManagerContent();
            } else if (type === 'addBranch') {
                setAddBranchContent();
            }

            modalContent.classList.add('animate-fadeIn'); // Optional, if you want to add animation
        }

        // Hide modal
        function hideModal() {
            modalBackdrop.classList.add('hidden');
            modalBackdrop.classList.remove('flex');
            modalContent.classList.remove('animate-fadeIn'); // Optional, if you used the animation
        }

        // Event Listeners
        addStaffButton.addEventListener('click', () => showModal('addStaff')); // Add staff button opens modal
        editButton.addEventListener('click', () => showModal('editManager')); // Edit manager button opens modal
        addBranchButton.addEventListener('click', () => showModal('addBranch')); // Add branch button opens modal

        // Close modal when clicking outside of modalContent (on the backdrop)
        modalBackdrop.addEventListener('click', (e) => {
            // Check if the click target is outside the modal content
            if (!modalContent.contains(e.target)) {
                hideModal();
            }
        });

        // Close modal with ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                hideModal();
            }
        });
    </script>
    <style>
        /* Add animation keyframes */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.2s ease-out;
        }
    </style>
    <script src="{{ asset('assets/js/regionObj.js') }}"></script>
    <script src="{{ asset('assets/js/provinceObj.js') }}"></script>
    <script src="{{ asset('assets/js/cityObj.js') }}"></script>
    <script src="{{ asset('assets/js/barangayObj.js') }}"></script>
    <script src="{{ asset('assets/js/shopRegistration.js') }}"></script>
    <script src="{{ asset('assets/js/address.js') }}"></script>
    @stack('scripts')
</x-shop-layout>
