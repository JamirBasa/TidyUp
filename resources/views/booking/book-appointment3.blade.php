@php
    $serviceCategories = $branchServiceCategories
        ->filter(fn($item) => $item->branch_id === $currentBranch->id)
        ->unique('category_name');
    $services = $branchServiceCategories->filter(fn($item) => $item->branch_id === $currentBranch->id);
@endphp
<x-user-layout :user="$user" :userrole="$userRole">
    <section>
        <div class="flex items-center justify-between mb-6">
            <div class="w-[5rem]">
                <a href="{{ route('book-appointment', ['id' => $shop->id, 'branchId' => $branchId]) }}"
                    class="inline-flex gap-2 items-center border-b border-black p-1">
                    <svg class="size-4 stroke-black stroke-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <p class="">Back</p>
                </a>
            </div>
            <div>
                <h1 class="font-clash font-medium text-xl">Appointment Proccessing</h1>
            </div>
            <div class="ml-[6rem]">
                <a href="{{ route('shop.view', ['id' => $shop->id, 'branchId' => $branchId]) }}"
                    class="inline-flex gap-2 items-center border-b border-black p-1">
                    <p class="">Exit</p>
                    <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 15L15 12M15 12L12 9M15 12H4M4 7.24802V7.2002C4 6.08009 4 5.51962 4.21799 5.0918C4.40973 4.71547 4.71547 4.40973 5.0918 4.21799C5.51962 4 6.08009 4 7.2002 4H16.8002C17.9203 4 18.4796 4 18.9074 4.21799C19.2837 4.40973 19.5905 4.71547 19.7822 5.0918C20 5.5192 20 6.07899 20 7.19691V16.8036C20 17.9215 20 18.4805 19.7822 18.9079C19.5905 19.2842 19.2837 19.5905 18.9074 19.7822C18.48 20 17.921 20 16.8031 20H7.19691C6.07899 20 5.5192 20 5.0918 19.7822C4.71547 19.5905 4.40973 19.2839 4.21799 18.9076C4 18.4798 4 17.9201 4 16.8V16.75"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="grid place-items-center mb-6">
            <x-process-flow :class1="'brand-500'" :color1="'white'" :class2="'brand-500'" :color2="'white'" :class3="'brand-500'"
                :color3="'white'" />
        </div>
        <div class="grid grid-cols-7 gap-10">
            <div class="col-span-2 bg-white p-6 rounded-lg shadow-sm">
                <div class="mb-4">
                    <img class="object-cover rounded-lg h-48 w-full" src="{{ asset('storage/' . $firstImage->path) }}">
                </div>
                <div class="space-y-2 pb-2 mb-4 border-b border-neutral-200">
                    <h1 class="text-2xl">{{ $shopName }}</h1>
                    <div class="inline-flex gap-1 items-center">
                        <div>
                            <svg class="stroke-1 stroke-black size-4" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 9.92285C5 14.7747 9.24448 18.7869 11.1232 20.3252C11.3921 20.5454 11.5281 20.6568 11.7287 20.7132C11.8849 20.7572 12.1148 20.7572 12.271 20.7132C12.472 20.6567 12.6071 20.5463 12.877 20.3254C14.7557 18.7871 18.9999 14.7751 18.9999 9.9233C18.9999 8.08718 18.2625 6.32605 16.9497 5.02772C15.637 3.72939 13.8566 3 12.0001 3C10.1436 3 8.36301 3.7295 7.05025 5.02783C5.7375 6.32616 5 8.08674 5 9.92285Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7C10.8954 7 10 7.89543 10 9Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm">{{ $currentBranch->branch_name }}</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-2  pb-6 mb-4 border-b border-neutral-200">
                    <div class="flex items-center justify-between mb-4">
                        <div class="inline-flex gap-2 items-center">
                            <button>
                                <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 12H18" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <h1 class="text-lg">Person 1</h1>
                        </div>
                        <button>
                            <svg class="stroke-1 stroke-neutral-400" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 8.00012L4 16.0001V20.0001L8 20.0001L16 12.0001M12 8.00012L14.8686 5.13146L14.8704 5.12976C15.2652 4.73488 15.463 4.53709 15.691 4.46301C15.8919 4.39775 16.1082 4.39775 16.3091 4.46301C16.5369 4.53704 16.7345 4.7346 17.1288 5.12892L18.8686 6.86872C19.2646 7.26474 19.4627 7.46284 19.5369 7.69117C19.6022 7.89201 19.6021 8.10835 19.5369 8.3092C19.4628 8.53736 19.265 8.73516 18.8695 9.13061L18.8686 9.13146L16 12.0001M12 8.00012L16 12.0001"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        @foreach ($services as $service)
                            <div>
                                <h6 class="text-sm">{{ $service->service_name }}</h6>
                                <p class="text-xs opacity-80">{{ $service->duration }}</p>
                            </div>
                            <p>Php {{ $service->cost }}</p>
                        @break
                    @endforeach
                </div>
            </div>

            <div class="flex items-center justify-between mb-4">
                <h6 class="text-lg">Total</h6>
                <p>Php 150.00</p>
            </div>
            <form action="" method="POST">
                @csrf
                @method('put')
                <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                <input type="hidden" name="branch_id" value="{{ $currentBranch->id }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                @foreach ($services as $service)
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                @endforeach
                <input type="hidden" name="total_price" value="150">
                {{-- submit button --}}
                <button class="p-3 bg-brand-500 text-white rounded-full w-full">Continue</button>
            </form>
        </div>
        <div class="col-span-5">
            {{-- <div>
                    <div class="mb-6">
                        <h1 class="text-xl">Choose services for</h1>
                    </div>
                    <div class="mb-6 flex gap-4 items-center">
                        <button class="py-3 px-8 rounded-full bg-neutral-150">Person 1</button>
                        <button class="py-3 px-8 rounded-full bg-neutral-150">Person 2</button>
                        <button class="py-3 px-8 rounded-full bg-brand-500 text-white">Person 3</button>
                        <button class="size-10 grid place-content-center rounded-full bg-neutral-150">
                            <svg class="stroke-2 stroke-black" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12H12M12 12H18M12 12V18M12 12V6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div> --}}
            <div class="mb-10">
                <div class="mb-6 flex items-center justify-between">
                    <h1 class="text-xl">Offered Services</h1>
                    <div>
                        <x-carousel-arrow />
                    </div>
                </div>


                <div id="carousel" class="carousel overflow-x-hidden whitespace-nowrap snap-x mb-4">
                    @foreach ($serviceCategories as $serviceCategory)
                        @php
                            $index = $loop->index;
                        @endphp
                        <button id="category-card"
                            class="inline-block rounded-full p-3 px-8 button text-black hover:bg-neutral-200 {{ $index === 0 ? ' text-white bg-black' : 'bg-neutral-150 text-black hover:bg-neutral-200' }}"
                            data-category-id="{{ $serviceCategory->id }}"
                            data-branch-id="{{ $serviceCategory->branch_id }}">
                            {{ $serviceCategory->category_name }}
                        </button>
                    @endforeach
                </div>

                <div id="services-list relative top-0 left-0 right-0">
                    @foreach ($services as $service)
                        <div class=" flex items-center justify-between py-3 px-4 space-y-2 border-b border-black service-item"
                            data-category-id="{{ $service->id }}">
                            <div>
                                <h1>{{ $service->service_name }}</h1>
                                <p class="text-xs">{{ $service->duration }} minutes</p>
                            </div>
                            <h1>Php {{ $service->cost }}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
</section>
<script src="{{ asset('assets/js/filterService.js') }}"></script>
<script src="{{ asset('assets/js/view-service.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/booking3.js') }}"></script>
@stack('scripts')
</x-user-layout>
