<x-admin-layout :user="$user" :userrole="$userRole">
    <div class="bg-white px-7 py-7 rounded-lg shadow-sm mb-4">
        <h6>Super Admin</h6>
        <h1 class="text-4xl font-bold">Dave Jamir Basa</h1>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm relative">
            <svg class="absolute top-7 right-7 stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h6>Revenue</h6>
            <h1 class="text-4xl font-bold mb-3">&#8369;20,400.00</h1>
            <div class="relative flex items-center">
                <svg class="stroke-1 stroke-black absolute" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <select name="" id="" class="focus:outline-none px-8 ">
                    <option value="">7 Days</option>
                    <option value="">Month</option>
                    <option value="">Year</option>
                </select>
            </div>
            <!-- analytics -->
            <x-analytics />
        </div>
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm relative">
            <svg class="absolute top-7 right-7 stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <h6>Account Registered</h6>
            <h1 class="text-4xl font-bold mb-3">15,312</h1>
            <div class="relative flex items-center">
                <svg class="stroke-1 stroke-black absolute" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <select name="" id="" class="focus:outline-none px-8 ">
                    <option value="">7 Days</option>
                    <option value="">Month</option>
                    <option value="">Year</option>
                </select>
            </div>
            <!-- analytics -->
            <x-analytics />
        </div>
    </div>
    <div class="bg-white px-7 py-7 rounded-lg shadow-sm relative mb-4">
        <svg class="absolute top-7 right-7 stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <h6>User</h6>
        <h1 class="text-4xl font-bold mb-10">Feedback</h1>

        <div class="flex items-center gap-4 mb-8">
            <div class="size-12 bg-green-300 rounded-full"></div>
            <div>
                <h6>Ian Cawili</h6>
                <p class="text-xs opacity-60">Great app, Easy to use.</p>
            </div>
        </div>
        <div class="flex items-center gap-4 mb-8">
            <div class="size-12 bg-yellow-300 rounded-full"></div>
            <div>
                <h6>Herwayn Alama</h6>
                <p class="text-xs opacity-60">I love the user-friendliness of the user-interface. Really easy to
                    navigate and find what I’m looking for.</p>
            </div>
        </div>
        <div class="flex items-center gap-4 mb-8">
            <div class="size-12 bg-cyan-300 rounded-full"></div>
            <div>
                <h6>Myke Tumimbang</h6>
                <p class="text-xs opacity-60">Really convenient appointment tracking. Will use again.</p>
            </div>
        </div>
    </div>
    <!-- grid with 2 columns -->
    <div class="grid grid-cols-2 gap-4 mb-4">
        <!-- card -->
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm">
            <div class="flex items-center justify-between mb-10">
                <div class="flex items-center gap-2">
                    <svg class="mt-2 stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h2 class="text-4xl font-semibold">Customers</h2>
                </div>
                <button class="flex items-center gap-3">
                    <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    <span>Sort by</span>
                </button>
            </div>
            <div class="flex items-center justify-between border-b-2 p-3">
                <div class="font-semibold">Username</div>
                <div class="font-semibold">Date Created</div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">Anthony Labang</div>
                <div class="opacity-70">10/5/24</div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">Zachary Batumbakal</div>
                <div class="opacity-70">10/5/24</div>
            </div>
        </div>

        <!-- card -->
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm">
            <div class="flex items-center justify-between mb-10">
                <div class="flex items-center gap-2">
                    <svg class="mt-2 stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h2 class="text-4xl font-semibold">Shops</h2>
                </div>
                <button class="flex items-center gap-3">
                    <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    <span>Sort by</span>
                </button>
            </div>
            <div class="flex items-center justify-between border-b-2 p-3">
                <div class="font-semibold">Shop Name</div>
                <div class="font-semibold">Date Created</div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">Gupit ni John</div>
                <div class="opacity-70">10/5/24</div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">David's Salon</div>
                <div class="opacity-70">10/5/24</div>
            </div>
        </div>
    </div>
    <!-- grid with 2 columns -->
    <div class="grid grid-cols-2 gap-4 mb-4">
        <!-- card -->
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm">
            <div class="flex items-center justify-between mb-10">
                <div class="flex items-center gap-2">
                    <svg class="mt-2 stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h2 class="text-4xl font-semibold">Popular Categories</h2>
                </div>
                <button class="flex items-center gap-3">
                    <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    <span>Sort by</span>
                </button>
            </div>
            <div class="flex items-center justify-between border-b-2 p-3">
                <div class="font-semibold">Category</div>
                <div class="font-semibold">Total Appointments</div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">Haircut</div>
                <div class="opacity-70">4500 </div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">Beard Grooming</div>
                <div class="opacity-70">3700</div>
            </div>
        </div>

        <!-- card -->
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm">
            <div class="flex items-center justify-between mb-10">
                <div class="flex items-center gap-2">
                    <svg class="mt-2 stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h2 class="text-4xl font-semibold">Popular Shops</h2>
                </div>
                <button class="flex items-center gap-3">
                    <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    <span>Sort by</span>
                </button>
            </div>
            <div class="flex items-center justify-between border-b-2 p-3">
                <div class="font-semibold">Service Provider</div>
                <div class="font-semibold">Successful Appointments</div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">Dean Wong</div>
                <div class="opacity-70">300</div>
            </div>
            <div class="flex items-center justify-between p-3">
                <div class="opacity-70">Elou T</div>
                <div class="opacity-70">271</div>
            </div>
        </div>
    </div>
    </div>
</x-admin-layout>
