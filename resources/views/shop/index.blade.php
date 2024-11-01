<x-shop-layout :user="$user">  
    <div class="bg-white px-7 py-7 rounded-lg shadow-sm mb-4 flex items-center justify-between">
        <div>
            <h6>Your Shop</h6>
            @foreach ($shops as $shop)
                <h1 class="text-4xl font-bold">{{ $shop->shop_name }}</h1>
            @endforeach
        </div>
        <div class="flex items-center gap-4">
            <div>
                <div class="text-right font-semibold">{{ $user->first_name . ' ' . $user->last_name  }}</div>
                <div class="text-right text-sm">{{ '@' . $user->username }}</div>
            </div>
            <img class="size-14 object-cover object-top rounded-full " src="{{ asset('assets/images/sampleDp.png') }}" alt="Profile Picture">
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm relative">
            <img class="absolute top-7 right-7" src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}" alt="icon">
            <h6>Recent Sales</h6>
            <h1 class="text-4xl font-bold mb-3">&#8369;0</h1>
            <div class="relative flex items-center">
                <img class="absolute" src="{{ asset('assets/Icons/Arrow/Caret_Down_MD.svg') }}" alt="">
                <select name="" id="" class="focus:outline-none px-8 ">
                    <option value="">7 Days</option>
                    <option value="">Month</option>
                    <option value="">Year</option>
                </select>
            </div>
            <!-- analytics -->
            <div class="w-full p-4 bg-white">
                <svg viewBox="0 0 600 300" class="w-full h-auto">
                  <!-- Grid lines -->
                  <line x1="40" y1="40" x2="560" y2="40" class="stroke-gray-200" />
                  <line x1="40" y1="80" x2="560" y2="80" class="stroke-gray-200" />
                  <line x1="40" y1="120" x2="560" y2="120" class="stroke-gray-200" />
                  <line x1="40" y1="160" x2="560" y2="160" class="stroke-gray-200" />
                  <line x1="40" y1="200" x2="560" y2="200" class="stroke-gray-200" />
                  <line x1="40" y1="240" x2="560" y2="240" class="stroke-gray-200" />
                  <line x1="40" y1="260" x2="560" y2="260" class="stroke-gray-200" />
              
                  <!-- Line chart -->
                  <path 
                    d="M 40 260 L 130 260 L 220 260 L 310 260 L 400 260 L 490 260 L 560 260" 
                    class="stroke-brand-500 stroke-2 fill-none"
                  />
              
                  <!-- Data points -->
                  <circle cx="40" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="130" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="220" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="310" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="400" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="490" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="560" cy="260 r="3" class="fill-brand-500" />
              
                  <!-- X-axis labels -->
                  <text x="40" y="280" class="text-xs fill-gray-500">1</text>
                  <text x="130" y="280" class="text-xs fill-gray-500">2</text>
                  <text x="220" y="280" class="text-xs fill-gray-500">3</text>
                  <text x="310" y="280" class="text-xs fill-gray-500">4</text>
                  <text x="400" y="280" class="text-xs fill-gray-500">5</text>
                  <text x="490" y="280" class="text-xs fill-gray-500">6</text>
                  <text x="560" y="280" class="text-xs fill-gray-500">7</text>
              
                  <!-- Y-axis labels -->
                  <text x="30" y="260" class="text-xs fill-gray-500" text-anchor="end">0</text>
                  <text x="30" y="45" class="text-xs fill-gray-500" text-anchor="end">15000</text>
                  <text x="30" y="85" class="text-xs fill-gray-500" text-anchor="end">10000</text>
                  <text x="30" y="125" class="text-xs fill-gray-500" text-anchor="end">5000</text>
                  <text x="30" y="165" class="text-xs fill-gray-500" text-anchor="end">2500</text>
                  <text x="30" y="205" class="text-xs fill-gray-500" text-anchor="end">1000</text>
                  <text x="30" y="245" class="text-xs fill-gray-500" text-anchor="end">500</text>
                </svg>
            </div>
        </div>
        <div class="bg-white px-7 py-7 rounded-lg shadow-sm relative">
            <img class="absolute top-7 right-7" src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}" alt="icon">
            <h6>Recent Sales</h6>
            <h1 class="text-4xl font-bold mb-3">&#8369;0</h1>
            <div class="relative flex items-center">
                <img class="absolute" src="{{ asset('assets/Icons/Arrow/Caret_Down_MD.svg') }}" alt="">
                <select name="" id="" class="focus:outline-none px-8 ">
                    <option value="">7 Days</option>
                    <option value="">Month</option>
                    <option value="">Year</option>
                </select>
            </div>
            <!-- analytics -->
            <div class="w-full p-4 bg-white">
                <svg viewBox="0 0 600 300" class="w-full h-auto">
                  <!-- Grid lines -->
                  <line x1="40" y1="40" x2="560" y2="40" class="stroke-gray-200" />
                  <line x1="40" y1="80" x2="560" y2="80" class="stroke-gray-200" />
                  <line x1="40" y1="120" x2="560" y2="120" class="stroke-gray-200" />
                  <line x1="40" y1="160" x2="560" y2="160" class="stroke-gray-200" />
                  <line x1="40" y1="200" x2="560" y2="200" class="stroke-gray-200" />
                  <line x1="40" y1="240" x2="560" y2="240" class="stroke-gray-200" />
                  <line x1="40" y1="260" x2="560" y2="260" class="stroke-gray-200" />
              
                  <!-- Line chart -->
                  <path 
                    d="M 40 260 L 130 260 L 220 260 L 310 260 L 400 260 L 490 260 L 560 260" 
                    class="stroke-brand-500 stroke-2 fill-none"
                  />
              
                  <!-- Data points -->
                  <circle cx="40" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="130" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="220" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="310" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="400" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="490" cy="260" r="3" class="fill-brand-500" />
                  <circle cx="560" cy="260 r="3" class="fill-brand-500" />
              
                  <!-- X-axis labels -->
                  <text x="40" y="280" class="text-xs fill-gray-500">1</text>
                  <text x="130" y="280" class="text-xs fill-gray-500">2</text>
                  <text x="220" y="280" class="text-xs fill-gray-500">3</text>
                  <text x="310" y="280" class="text-xs fill-gray-500">4</text>
                  <text x="400" y="280" class="text-xs fill-gray-500">5</text>
                  <text x="490" y="280" class="text-xs fill-gray-500">6</text>
                  <text x="560" y="280" class="text-xs fill-gray-500">7</text>
              
                  <!-- Y-axis labels -->
                  <text x="30" y="260" class="text-xs fill-gray-500" text-anchor="end">0</text>
                  <text x="30" y="45" class="text-xs fill-gray-500" text-anchor="end">15000</text>
                  <text x="30" y="85" class="text-xs fill-gray-500" text-anchor="end">10000</text>
                  <text x="30" y="125" class="text-xs fill-gray-500" text-anchor="end">5000</text>
                  <text x="30" y="165" class="text-xs fill-gray-500" text-anchor="end">2500</text>
                  <text x="30" y="205" class="text-xs fill-gray-500" text-anchor="end">1000</text>
                  <text x="30" y="245" class="text-xs fill-gray-500" text-anchor="end">500</text>
                </svg>
            </div>
        </div>
    </div>
    <div class="bg-white px-7 py-7 rounded-lg shadow-sm relative mb-4">
        <img class="absolute top-7 right-7" src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}" alt="icon">
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
                <p class="text-xs opacity-60">I love the user-friendliness of the user-interface. Really easy to navigate and find what I’m looking for.</p>
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
                    <img class="mt-2" src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}" alt="icon">
                    <h2 class="text-4xl font-semibold">Customers</h2>
                </div>
                <button class="flex items-center gap-3">
                    <img src="{{ asset('assets/Icons/Arrow/Arrow_Down_Up.svg') }}" alt="">
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
                    <img class="mt-2" src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}" alt="icon">
                    <h2 class="text-4xl font-semibold">Shops</h2>
                </div>
                <button class="flex items-center gap-3">
                    <img src="{{ asset('assets/Icons/Arrow/Arrow_Down_Up.svg') }}" alt="">
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
                    <img class="mt-2" src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}" alt="icon">
                    <h2 class="text-4xl font-semibold">Popular Categories</h2>
                </div>
                <button class="flex items-center gap-3">
                    <img src="{{ asset('assets/Icons/Arrow/Arrow_Down_Up.svg') }}" alt="">
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
                    <img class="mt-2" src="{{ asset('assets/Icons/Arrow/Arrow_Up_Right_MD.svg') }}" alt="icon">
                    <h2 class="text-4xl font-semibold">Popular Shops</h2>
                </div>
                <button class="flex items-center gap-3">
                    <img src="{{ asset('assets/Icons/Arrow/Arrow_Down_Up.svg') }}" alt="">
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
</x-shop-layout>