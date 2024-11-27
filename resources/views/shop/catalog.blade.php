<x-shop-layout :user="$user" :userrole="$userRole">
    <div class="flex mb-4">
        {{-- Container --}}
        <div class="bg-white p-5 rounded-lg shadow-sm w-full flex items-center justify-between gap-20">
            {{-- Branch Selection --}}
            <div class="relative inline-flex items-center">
                <svg class="stroke-neutral-400 stroke-1 absolute left-3" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 9.92285C5 14.7747 9.24448 18.7869 11.1232 20.3252C11.3921 20.5454 11.5281 20.6568 11.7287 20.7132C11.8849 20.7572 12.1148 20.7572 12.271 20.7132C12.472 20.6567 12.6071 20.5463 12.877 20.3254C14.7557 18.7871 18.9999 14.7751 18.9999 9.9233C18.9999 8.08718 18.2625 6.32605 16.9497 5.02772C15.637 3.72939 13.8566 3 12.0001 3C10.1436 3 8.36301 3.7295 7.05025 5.02783C5.7375 6.32616 5 8.08674 5 9.92285Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7C10.8954 7 10 7.89543 10 9Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                {{-- Branch Selector --}}
                <select class="border border-neutral-400 w-[13rem] py-3 px-10 rounded-lg" id="branchSelect"
                    name="branch">
                    @foreach ($shopBranches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                    @endforeach
                </select>
                <svg id="caret-down4" class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            {{-- Search Bar --}}
            <form action="" class="relative flex items-center flex-1">
                <input placeholder="Search service or category"
                    class="placeholder:text-black placeholder:font-poppins placeholder:font placeholder:text-base border rounded-full border-neutral-300  pl-12 pr-4 py-3 min-w-[20rem] focus:outline-none focus:ring-1 focus:ring-brand-500 focus:border-transparent text-base bg-transparent font-normal w-full"
                    type="search" name="search" id="search" />
                <img class="absolute left-4 size-5 svg-icon"
                    src="{{ asset('assets/Icons/Interface/Search_Magnifying_Glass.svg') }}" alt="icon" />
            </form>
            {{-- Sort By --}}
            <button class="flex items-center gap-2 p-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke="black" stroke-width="1"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Sort By</span>
            </button>
        </div>

    </div>
    <div class="grid grid-cols-6 gap-4">
        {{-- First Column --}}
        <div class="col-span-2 grid gap-4">
            {{-- Categories Card --}}
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center justify-between mb-10">
                    <h1 class="text-4xl font-bold">Categories</h1>
                    <button id="action-button"
                        class="border border-neutral-400 py-3 px-4 inline-flex items-center gap-2 rounded-lg relative">
                        <span>Action</span>
                        <svg id="caret-down4" class="stroke-black stroke-1 right-3 pointer-events-none" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div id="action-dropdown" class="absolute bg-white -bottom-[10rem] right-0 hidden">
                            <ul class="border border-neutral-400 rounded-lg divide-x-0 div overflow-hidden">
                                <li class="p-3 text-nowrap hover:bg-neutral-100 text-left">Add Category</li>
                                <li class="p-3 text-nowrap hover:bg-neutral-100 text-left">Edit Category</li>
                                <li class="p-3 text-nowrap hover:bg-neutral-100">Remove Category</li>
                            </ul>
                        </div>
                    </button>
                </div>

                @php
                    $serviceCategories = DB::table('service_categories')->get(['id', 'category_name']);
                    $branchServiceCategories = DB::table('branch_service_categories')
                        ->where('branch_id', $shopBranches[0]->id)
                        ->get(['service_category_id'])
                        ->groupBy('service_category_id');
                @endphp

                @foreach ($branchServiceCategories as $branchServiceCategory)
                    @foreach ($serviceCategories as $serviceCategory)
                        @php
                            $index = $loop->index;
                        @endphp
                        @if ($serviceCategory->id == $branchServiceCategory[0]->service_category_id)
                            <button id="category-button[{{ $index }}]"
                                class="flex items-center justify-between p-4 w-full rounded-lg">
                                {{ $serviceCategory->category_name }}
                            </button>
                        @endif
                    @endforeach
                @endforeach

            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="mb-10">
                    <h1 class="text-4xl font-bold">Add Discount</h1>
                </div>
                <div>
                    <button id="add-discount-btn1" class="bg-brand-500 p-4 rounded-xl w-full text-white">
                        Add Discount
                    </button>
                    {{-- Add Discount Modal --}}
                    <div id="add-discount-popover"
                        class="absolute top-0 bottom-0 left-0 right-0 z-50 backdrop-brightness-50 place-items-center hidden">
                        <div id="add-discount-popover-content"
                            class="bg-white max-w-screen-lg w-full mx-auto p-10 rounded-lg shadow-lg">
                            <div class="mb-10 flex items-center justify-between">
                                <h1 class="text-3xl font-bold">Add Discount to Services</h1>
                                <button id="close-button">
                                    <svg class="stroke-black stroke-2" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            {{-- Category Field --}}
                            <div class="mb-4">
                                <label for="categoriesSelect" class="font-semibold mb-2">Categories</label>
                                <div class="relative flex items-center">
                                    <select class="border border-neutral-400 w-full py-3 pl-5 pr-10 rounded-lg"
                                        id="categoriesSelect" name="categoriesSelect">
                                        <option value="">All Categories</option>
                                        {{-- @php $index = 0; @endphp
                                        @foreach ($categories as $category)
                                            @php $index = $loop->index; @endphp
                                            <option value="{{ $category }}" data-index="{{ $index }}">
                                                {{ $category }}</option>
                                        @endforeach --}}
                                    </select>
                                    <svg id="caret-down4"
                                        class="absolute stroke-black stroke-1 right-3 pointer-events-none"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                {{-- Service Field --}}
                                <div>
                                    <label for="servicesSelect" class="font-semibold mb-2">Services</label>
                                    <div class="relative flex items-center">
                                        <select class="border border-neutral-400 w-full py-3 pl-5 pr-10 rounded-lg"
                                            id="servicesSelect" name="servicesSelect">
                                            <option value="">All Services</option>
                                            {{-- @foreach ($services[0] as $item)
                                                <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                                            @endforeach --}}

                                        </select>
                                        <svg id="caret-down4"
                                            class="absolute stroke-black stroke-1 right-3 pointer-events-none"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 10L12 14L8 10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                {{-- Discount Percentages Field --}}
                                <div class="mb-8">
                                    <label for="discount" class="font-semibold mb-2">Discount Percentages</label>
                                    <div class="relative flex items-center">
                                        <input type="text"
                                            class="border border-neutral-400 w-full py-3 pl-5 pr-10 rounded-lg"
                                            id="discount" name="discount" placeholder="%" value="%" />
                                    </div>
                                </div>
                                <button class="p-4 bg-brand-500 text-white rounded-lg col-span-2">Add Discount</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- 2nd Column --}}
        <div class="bg-white p-10 rounded-lg shadow-sm col-span-4">
            <div class="flex items-center justify-between mb-10">
                <h1 class="text-4xl font-bold">Services</h1>
                <button id="action-button2"
                    class="border border-neutral-400 py-3 px-4 inline-flex items-center gap-2 rounded-lg relative">
                    <span>Action</span>
                    <svg id="caret-down4" class="stroke-black stroke-1 right-3 pointer-events-none" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div id="action-dropdown2" class="absolute bg-white -bottom-[10rem] right-0 hidden">
                        <ul class="border border-neutral-400 rounded-lg divide-x-0 div overflow-hidden">
                            <li id="add-service-btn" class="p-3 text-nowrap hover:bg-neutral-100 text-left">Add
                                Services
                            </li>
                            <li id="edit-service-btn" class="p-3 text-nowrap hover:bg-neutral-100 text-left">Edit
                                Services
                            </li>
                            <li id="delete-service-btn" class="p-3 text-nowrap hover:bg-neutral-100">Remove Services
                            </li>
                        </ul>
                    </div>
                </button>
                {{-- Add ServiceModal --}}
                <div id="add-service-popover"
                    class="absolute top-0 bottom-0 left-0 right-0 z-50 backdrop-brightness-50 place-items-center hidden">
                    <div id="add-service-popover-content"
                        class="bg-white max-w-screen-lg w-full mx-auto p-10 rounded-lg shadow-lg">
                        <div class="mb-10 flex items-center justify-between">
                            <h1 class="text-3xl font-bold">Add Services</h1>
                            <button id="close-button2">
                                <svg class="stroke-black stroke-2" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        {{-- Category Field --}}
                        <div class="mb-4">
                            <label for="categorySelect" class="font-semibold mb-2">Select Category</label>
                            <div class="relative flex items-center">
                                <select class="border border-neutral-400 w-full py-3 pl-5 pr-10 rounded-lg"
                                    id="categorySelect" name="categorySelect">
                                    <option value="">Select Category</option>
                                    @php $index = 0; @endphp
                                    {{-- @foreach ($categories as $category)
                                        @php $index = $loop->index; @endphp
                                        <option value="{{ $category }}" data-index="{{ $index }}">
                                            {{ $category }}</option>
                                    @endforeach --}}
                                </select>
                                <svg id="caret-down4"
                                    class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            {{-- Service Name Field --}}
                            <div>
                                <label for="service_name" class="font-semibold mb-2">Service Name</label>
                                <div class="relative flex items-center">
                                    <input type="text"
                                        class="border border-neutral-400 w-full py-3 pl-5 pr-10 rounded-lg "
                                        id="service_name" name="service_name" placeholder="Name of your service" />
                                </div>
                            </div>
                            {{-- Service Price Field --}}
                            <div class="mb-8">
                                <label for="discount" class="font-semibold mb-2">Service Fee</label>
                                <div class="relative flex items-center">
                                    <input type="text"
                                        class="border border-neutral-400 w-full py-3 pl-5 pr-10 rounded-lg"
                                        id="discount" name="discount" placeholder="PHP" />
                                </div>
                            </div>
                            <button class="p-4 bg-brand-500 text-white rounded-lg col-span-2">Add Service</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between py-3 px-4 border-b border-black">
                <h1 class="font-bold">Services</h1>
                <h1 class="font-bold">Price</h1>
            </div>
            {{-- @foreach ($services[0] as $service)
                <div class="flex items-center justify-between py-3 px-4">
                    <div>
                        <h1 class="">{{ $service['name'] }}</h1>
                        <p class="text-xs">30 minutes</p>
                    </div>
                    <h1 class="">Php {{ $service['price'] }}.00</h1>
                </div>
            @endforeach --}}
        </div>
        <script></script>
        <script src="{{ asset('assets/js/shop/catalog.js') }}"></script>
        @stack('scripts')
</x-shop-layout>
