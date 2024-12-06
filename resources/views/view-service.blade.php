@php
    $operationFirstDay = $operationHours->where('branch_id', $currentBranch->id)->first();
    $operationLastDay = $operationHours->where('branch_id', $currentBranch->id)->last();
    $openingTime = $operationFirstDay ? date('h:i A', strtotime($operationFirstDay->opening_time)) : 'N/A';
    $closingTime = $operationLastDay ? date('h:i A', strtotime($operationLastDay->closing_time)) : 'N/A';
    $isNotAvailable = false;

    if ($operationFirstDay && $operationLastDay && $openingTime && $closingTime) {
        $isNotAvailable = !true;
    } else {
        $isNotAvailable = !false;
    }

@endphp
<x-user-layout :user="$sidebarData['user']" :userrole="$sidebarData['userRole']">
    {{-- View Shop --}}
    <div class="content-section">

        {{-- Shop Name and Availability --}}

        <div class="flex items-center gap-4 mb-1">
            {{-- Shop Name --}}
            <div class="p-2 font-clash font-medium text-2xl">{{ $shopName }}</div>
            <svg width="5" height="6" viewBox="0 0 5 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="3" r="2.5" fill="black" />
            </svg>
            {{-- Shop Availability --}}
            <div class="p-2 font-medium  {{ $isNotAvailable === true ? 'text-red-500' : 'text-brand-300' }} text-lg">
                {{ $isNotAvailable === true ? 'Unavailable' : $currentBranch->availability }}</div>
        </div>

        {{-- Shop Rating, Shop Schedule and Shop Location --}}

        <div class="flex items-center gap-4 mb-4 overflow-hidden">
            {{-- Shop Rating --}}
            <div class="flex items-center justify-between">
                <div class="p-2">5.0</div>
                <svg width="78" height="14" viewBox="0 0 57 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.5 0L6.02963 2.60796L9 3.24671L6.975 5.49727L7.28115 8.5L4.5 7.28296L1.71885 8.5L2.025 5.49727L0 3.24671L2.97037 2.60796L4.5 0Z"
                        fill="#DFB300" />
                    <path
                        d="M16.5 0L18.0296 2.60796L21 3.24671L18.975 5.49727L19.2812 8.5L16.5 7.28296L13.7188 8.5L14.025 5.49727L12 3.24671L14.9704 2.60796L16.5 0Z"
                        fill="#DFB300" />
                    <path
                        d="M28.5 0L30.0296 2.60796L33 3.24671L30.975 5.49727L31.2812 8.5L28.5 7.28296L25.7188 8.5L26.025 5.49727L24 3.24671L26.9704 2.60796L28.5 0Z"
                        fill="#DFB300" />
                    <path
                        d="M40.5 0L42.0296 2.60796L45 3.24671L42.975 5.49727L43.2812 8.5L40.5 7.28296L37.7188 8.5L38.025 5.49727L36 3.24671L38.9704 2.60796L40.5 0Z"
                        fill="#DFB300" />
                    <path
                        d="M52.5 0L54.0296 2.60796L57 3.24671L54.975 5.49727L55.2812 8.5L52.5 7.28296L49.7188 8.5L50.025 5.49727L48 3.24671L50.9704 2.60796L52.5 0Z"
                        fill="#DFB300" />
                </svg>
                <div class="p-2 font-medium text-brand-300">(1500) </div>
            </div>
            <svg width="5" height="6" viewBox="0 0 5 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="3" r="2.5" fill="black" />
            </svg>
            {{-- Shop Schedule --}}

            <div class="p-2 uppercase">Open {{ $operationFirstDay ? substr($operationFirstDay->day, 0, 3) : 'N/A' }} -
                {{ $operationLastDay ? substr($operationLastDay->day, 0, 3) : 'N/A' }} from
                {{ $openingTime }} - {{ $closingTime }} </div>
            <svg width="5" height="6" viewBox="0 0 5 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="3" r="2.5" fill="black" />
            </svg>
            {{-- Shop Location --}}
            <div class="p-2">{{ $currentBranch->detailed_address }}</div>
        </div>

        {{-- Grid Layout --}}
        <section class="grid grid-cols-3 gap-4 mb-4">

            {{-- Service Information --}}
            <div class="grid grid-cols-1 gap-2 col-span-2">


                {{-- Displaye pictures --}}
                <div class="mb-4">
                    <div class="relative mb-4 overflow-hidden">
                        @php
                            $imagePath = $firstImage
                                ? asset('storage/' . $firstImage->path)
                                : asset('path/to/default/image.jpg');
                        @endphp
                        <img id="displayPicture" class="h-[26rem] w-full object-cover rounded-lg" loading="lazy"
                            src="{{ $imagePath }}" alt="Shop Display Image">
                    </div>
                    {{-- 3 more pictures --}}
                    <div class="relative grid grid-cols-3 mb-2 gap-4 overflow-hidden">
                        @foreach ($shopGallery as $image)
                            @php
                                $imagePath = asset('storage/' . $image->path);
                            @endphp
                            @if ($image->branch_id !== $currentBranch->id)
                                @continue
                            @endif
                            <img class="lazyload h-[10rem] w-full object-cover rounded-lg cursor-pointer hover:opacity-80 transition-opacity"
                                src="{{ asset($imagePath) }}" onclick="updateDisplayPicture('{{ $imagePath }}')"
                                alt="">
                        @endforeach
                    </div>
                    <style>
                        #displayPicture {
                            transition: opacity 0.3s ease-in-out;
                        }
                    </style>
                </div>

                {{-- Offered Services --}}
                <div class="flex flex-col col-span-2 w-full mb-20">
                    <div class="flex items-center justify-between mb-4 col-span-2">
                        <div class="font-clash font-medium text-xl p-2">Offered Services</div>
                        <div class="inline-flex items-center gap-2">
                            <button id="left-arrow">
                                <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:shadow-md hover:scale-110 transition-transform duration-300 ease-in-out"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 12H7M7 12L11 16M7 12L11 8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button id="right-arrow">
                                <svg class="bg-white p-1 stroke-black stroke-2 size-8 rounded-full shadow-md hover:scale-110 transition-transform duration-300 ease-in-out"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 12H17M17 12L13 8M17 12L13 16" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    @php
                        $serviceCategories = $branchServiceCategories
                            ->filter(fn($item) => $item->branch_id === $currentBranch->id)
                            ->unique('category_name');
                    @endphp

                    {{-- Categories Carousel --}}
                    <div id="carousel" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-4">
                        @foreach ($serviceCategories as $serviceCategory)
                            @php
                                $index = $loop->index;
                            @endphp
                            <button id="category-card"
                                class="inline-block rounded-full p-4 px-32 button text-black hover:bg-neutral-200 {{ $index === 0 ? ' text-white bg-black' : 'bg-neutral-150 text-black hover:bg-neutral-200' }}"
                                data-category-id="{{ $serviceCategory->id }}"
                                data-branch-id="{{ $serviceCategory->branch_id }}">
                                {{ $serviceCategory->category_name }}
                            </button>
                        @endforeach
                    </div>
                    {{-- Services List --}}
                    @php
                        $services = $branchServiceCategories->filter(
                            fn($item) => $item->branch_id === $currentBranch->id,
                        );
                    @endphp
                    <div id="services-list relative top-0 left-0 right-0">
                        @foreach ($services as $service)
                            <div class=" flex items-center justify-between py-3 px-4 space-y-2 border-b border-black service-item"
                                data-category-id="{{ $service->id }}">
                                <div>
                                    <h1>{{ $service->service_name }}</h1>
                                    <p class="text-xs">{{ $service->duration }} minutes</p>
                                </div>
                                <h1>Php {{ $service->cost }}.00</h1>
                            </div>
                        @endforeach

                    </div>
                </div>
                <script></script>

                {{-- Ratings and Reviews --}}
                <div class="flex flex-col col-span-2 w-full mb-20">
                    <div class=" col-span-2">
                        <div class="font-clash font-medium text-xl p-2">Shop Reviews</div>
                        <div class="font-medium p-2">Only verified users who have had a successful appointment with the
                            provider can leave reviews.</div>
                    </div>
                    {{-- Rating --}}
                    <div class="flex items-center col-span-2 gap-4 mb-8">

                        {{-- Rating, Stars and Number of Reviews --}}
                        <div class="flex flex-col items-center justify-center">
                            <div class="p-2 font-semibold text-9xl">5.0</div>
                            <svg width="120" height="30" viewBox="0 0 57 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.5 0L6.02963 2.60796L9 3.24671L6.975 5.49727L7.28115 8.5L4.5 7.28296L1.71885 8.5L2.025 5.49727L0 3.24671L2.97037 2.60796L4.5 0Z"
                                    fill="#DFB300" />
                                <path
                                    d="M16.5 0L18.0296 2.60796L21 3.24671L18.975 5.49727L19.2812 8.5L16.5 7.28296L13.7188 8.5L14.025 5.49727L12 3.24671L14.9704 2.60796L16.5 0Z"
                                    fill="#DFB300" />
                                <path
                                    d="M28.5 0L30.0296 2.60796L33 3.24671L30.975 5.49727L31.2812 8.5L28.5 7.28296L25.7188 8.5L26.025 5.49727L24 3.24671L26.9704 2.60796L28.5 0Z"
                                    fill="#DFB300" />
                                <path
                                    d="M40.5 0L42.0296 2.60796L45 3.24671L42.975 5.49727L43.2812 8.5L40.5 7.28296L37.7188 8.5L38.025 5.49727L36 3.24671L38.9704 2.60796L40.5 0Z"
                                    fill="#DFB300" />
                                <path
                                    d="M52.5 0L54.0296 2.60796L57 3.24671L54.975 5.49727L55.2812 8.5L52.5 7.28296L49.7188 8.5L50.025 5.49727L48 3.24671L50.9704 2.60796L52.5 0Z"
                                    fill="#DFB300" />
                            </svg>
                            <div class="p-2 font-medium text-lg"> 1500 User Reviews </div>
                        </div>

                        {{-- Rating Graphs --}}
                        <div class="w-full">
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">5</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 100%"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">4</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">3</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">2</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-4">
                                <div class="p-2 font-semibold text-xl">1</div>
                                <div class="flex-1">
                                    <div class="h-4 bg-neutral-150 rounded-full">
                                        <div class="h-4 bg-brand-300 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="">
                        {{-- User Reviews --}}
                        <div class="mb-8">
                            <div class="border-t border-gray-200 pt-4 mb-4">
                                <div class="flex items-center mb-2">
                                    <div class="font-medium">Anthony Huesca</div>
                                    <div class="text-gray-500 ml-2">Fri, Sep 3, 2024 at 12:30 PM</div>
                                </div>
                                <div class="text-gray-700">The barber was friendly and professional. Felt comfortable
                                    with him.
                                </div>
                            </div>

                            <div class="border-t border-gray-200 pt-4 mb-4">
                                <div class="flex items-center mb-2">
                                    <div class="font-medium">Dean Billedo</div>
                                    <div class="text-gray-500 ml-2">Fri, Sep 3, 2024 at 12:30 PM</div>
                                </div>
                                <div class="text-gray-700">I got the Drake haircut I always wanted.</div>
                            </div>

                            <div class="border-t border-gray-200 pt-4 mb-4">
                                <div class="flex items-center mb-2">
                                    <div class="font-medium">Steven Tumimbang</div>
                                    <div class="text-gray-500 ml-2">Fri, Sep 3, 2024 at 12:30 PM</div>
                                </div>
                                <div class="text-gray-700">Great service and field expertise. Got what I wanted. Would
                                    recommend this shop.</div>
                            </div>

                            <div class="border-t border-gray-200 pt-4 mb-4">
                                <div class="flex items-center mb-2">
                                    <div class="font-medium">Herwayne Cawili</div>
                                    <div class="text-gray-500 ml-2">Fri, Sep 3, 2024 at 12:30 PM</div>
                                </div>
                                <div class="text-gray-700">Thank you for the great customer service. The massage after
                                    the
                                    haircut was a huge plus!</div>
                            </div>
                        </div>

                        {{-- See More Reviews Button --}}
                        <a href="" class="flex items-center hover:text-brand-300">
                            <div class="text-lg">See More Reviews</div>
                            <svg class="stroke-current stroke-2" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 9L14 12L11 15" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                    </div>

                </div>


                {{-- Reviews --}}


            </div>

            {{-- Call to Action Card --}}
            <div class="flex flex-col col-span-1 bg-white rounded-lg h-min shadow-md p-6 gap-4 sticky top-32">

                {{-- Shop Name, Availability and Rating --}}
                <div class="flex flex-col items-start gap-2">
                    {{-- Shop Name, Availability --}}
                    <div class=" {{ $isNotAvailable === true ? 'text-red-500' : 'text-brand-300' }} ">
                        {{ $isNotAvailable === true ? 'Unavailable' : $currentBranch->availability }}</div>

                    <div class="inline-flex items-center gap-2">
                        <div class="w-auto max-w-[19rem]">
                            @if (count($shopBranches) > 1)
                                <h1 class="font-medium text-3xl text-balance">{{ $currentBranch->branch_name }}
                                @else
                                    <h1 class="text-4xl font-medium text-balance font-clash">{{ $shopName }}</h1>
                            @endif
                        </div>
                        <div class="relative">
                            {{-- Switch Button --}}
                            @if (count($shopBranches) > 1)
                                <button class="branch-change-btn  transition-transform ease-in-out group">
                                    <svg class="stroke-1 stroke-black group-hover:scale-105 group-hover:stroke-2"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99902 16H4.99902V21M13.999 8H18.999V3M4.58203 9.0034C5.14272 7.61566 6.08146 6.41304 7.29157 5.53223C8.50169 4.65141 9.93588 4.12752 11.4288 4.02051C12.9217 3.9135 14.4138 4.2274 15.7371 4.92661C17.0605 5.62582 18.1603 6.68254 18.9131 7.97612M19.4166 14.9971C18.8559 16.3848 17.9171 17.5874 16.707 18.4682C15.4969 19.3491 14.0642 19.8723 12.5713 19.9793C11.0784 20.0863 9.58509 19.7725 8.26172 19.0732C6.93835 18.374 5.83785 17.3175 5.08496 16.0239"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            @endif

                            <div id="branch-dropdown"
                                class="hidden absolute right-0 border mt-2 m-w-48 bg-white rounded-lg shadow overflow-hidden z-50">
                                @foreach ($shopBranches as $branch)
                                    @if ($branch->id === $currentBranch->id)
                                        @continue
                                    @endif
                                    <a
                                        href="{{ route('shop.view', ['id' => $shop->id, 'branchId' => $branch->id]) }}">
                                        <div class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-nowrap">
                                            {{ $branch->branch_name }}
                                        </div>
                                    </a>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    {{-- Shop Rating --}}
                    <div class="flex items-center gap-2">
                        <div class="font-semibold">5.0</div>
                        <svg width="78" height="14" viewBox="0 0 57 9" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.5 0L6.02963 2.60796L9 3.24671L6.975 5.49727L7.28115 8.5L4.5 7.28296L1.71885 8.5L2.025 5.49727L0 3.24671L2.97037 2.60796L4.5 0Z"
                                fill="#DFB300" />
                            <path
                                d="M16.5 0L18.0296 2.60796L21 3.24671L18.975 5.49727L19.2812 8.5L16.5 7.28296L13.7188 8.5L14.025 5.49727L12 3.24671L14.9704 2.60796L16.5 0Z"
                                fill="#DFB300" />
                            <path
                                d="M28.5 0L30.0296 2.60796L33 3.24671L30.975 5.49727L31.2812 8.5L28.5 7.28296L25.7188 8.5L26.025 5.49727L24 3.24671L26.9704 2.60796L28.5 0Z"
                                fill="#DFB300" />
                            <path
                                d="M40.5 0L42.0296 2.60796L45 3.24671L42.975 5.49727L43.2812 8.5L40.5 7.28296L37.7188 8.5L38.025 5.49727L36 3.24671L38.9704 2.60796L40.5 0Z"
                                fill="#DFB300" />
                            <path
                                d="M52.5 0L54.0296 2.60796L57 3.24671L54.975 5.49727L55.2812 8.5L52.5 7.28296L49.7188 8.5L50.025 5.49727L48 3.24671L50.9704 2.60796L52.5 0Z"
                                fill="#DFB300" />
                        </svg>

                    </div>
                </div>

                @if (count($shopBranches) > 1)
                    <div>
                        <p class="text-center text-sm opacity-80">Make sure to check other branches as well!</p>
                    </div>
                @endif

                {{-- Book Now Button --}}
                @if ($isNotAvailable === true)
                    <div class="w-full">
                        <div
                            class="bg-gray-300  rounded-full p-3 font-medium w-full grid place-items-center">
                            Not Available
                        </div>
                    </div>
                @else
                    <div class="w-full">
                        <a
                            href="{{ route('book-appointment', ['id' => $shop->id, 'branchId' => $currentBranch->id]) }}">
                            {{-- Remove the anchor tags once the backend is --}}
                            <div
                                class="bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-full p-3 font-medium w-full grid place-items-center">
                                Book Now
                            </div>
                        </a>
                    </div>
                @endif

                {{-- </form> --}}

                <div class="flex-grow border-t border-gray-400"></div>

                {{-- Time, Share and Report --}}
                <div class="flex flex-col">
                    {{-- Time --}}
                    <div class="flex mb-1">
                        <div class="p-2 flex items-center">
                            <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 7V12H17M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="p-2 text-sm">Open until {{ $closingTime }} </div>
                    </div>
                    {{-- Share --}}
                    <a href="" class="flex mb-1 hover:bg-neutral-100 rounded-lg">
                        <div class="stroke-black stroke-1 p-2 flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 13.5L15 16.5M15 7.5L9 10.5M18 21C16.3431 21 15 19.6569 15 18C15 16.3431 16.3431 15 18 15C19.6569 15 21 16.3431 21 18C21 19.6569 19.6569 21 18 21ZM6 15C4.34315 15 3 13.6569 3 12C3 10.3431 4.34315 9 6 9C7.65685 9 9 10.3431 9 12C9 13.6569 7.65685 15 6 15ZM18 9C16.3431 9 15 7.65685 15 6C15 4.34315 16.3431 3 18 3C19.6569 3 21 4.34315 21 6C21 7.65685 19.6569 9 18 9Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="p-2 text-sm">Share</div>
                    </a>
                    {{-- Report --}}
                    <a href="" class="flex mb-1 hover:bg-neutral-100 rounded-lg">
                        <div class="stroke-black stroke-1 p-2 flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.002 9.00006V13.0001M4.38086 15.1999C3.47143 16.775 3.01684 17.5629 3.08477 18.2092C3.14402 18.7729 3.43987 19.2851 3.89844 19.6182C4.42399 20.0001 5.33286 20.0001 7.15049 20.0001H16.8534C18.671 20.0001 19.5798 20.0001 20.1053 19.6182C20.5639 19.2851 20.8599 18.7729 20.9191 18.2092C20.9871 17.5629 20.5326 16.775 19.6232 15.1999L14.7734 6.79986C13.864 5.22468 13.4091 4.43722 12.8154 4.17291C12.2976 3.94236 11.706 3.94236 11.1881 4.17291C10.5947 4.43711 10.1401 5.22458 9.23142 6.79845L4.38086 15.1999ZM12.0527 16.0001V16.1001L11.9521 16.1003V16.0001H12.0527Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="p-2 text-sm">Report</div>
                    </a>
                </div>
            </div>

        </section>

        {{-- Recommended for you Start --}}
        <div class="flex items-center justify-between mb-8">
            <h1 class="font-clash font-medium text-xl p-2 border-b-2 border-black">You May Also Like</h1>
            <div class="inline-flex items-center gap-2">
                <x-carousel-arrow :number="2" />
            </div>
        </div>
        {{-- Shop Cards For Recommended For You --}}


        <div id="carousel2" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-10 -mr-[12rem]">
            @foreach ($sidebarData['shops'] as $shop)
                <x-shop-card :shop="$shop" :shopbranches="$sidebarData['shopBranches']" :shopgallery="$sidebarData['shopGallery']" :branchcategory="$sidebarData['branchCategory']"
                    :class="'w-[21rem] sm:w-[25.6rem] inline-block mr-6 mb-8'" />
            @endforeach
        </div>

    </div>
    <script src="{{ asset('assets/js/explore.js') }}"></script>
    <script src="{{ asset('assets/js/view-service.js') }}"></script>
    <script src="{{ asset('assets/js/filterService.js') }}"></script>
    @stack('scripts')
</x-user-layout>
