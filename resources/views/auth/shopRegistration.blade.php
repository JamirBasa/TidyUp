<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resoruces/js/app.js', 'resources/css/app.css', 'resources/css/fonts.css'])
</head>
<body>
    <main class="pb-20 scroll-smooth">
        {{-- Background Image --}}
        <img class="min-h-screen fixed top-0 right-0 left-0 bottom-0 -z-10 lazyload" src="{{ asset('assets/images/signUpBG.png') }}" alt="webimage">

        {{-- Form Container --}}
        <div class="max-w-screen-xl mx-auto bg-white py-20 px-28 rounded-lg mt-28 ">
            
            <div class="mb-10">
                <h1 class="font-clash flex font-medium text-2xl mb-2">Register Your Shop</h1>
                <h1 class="text-sm">Fill up your shop information.</h1>
            </div>

            {{-- Form --}}
            <form action="" method="POST">
                @csrf
                {{-- Shop Name --}}
                <div class="flex flex-col gap-3 mb-8">
                    <label class="font-semibold"  for="shop_name">Shop Name</label>
                    <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('shop_name')ring-1 ring-red-500 @enderror" type="text" name="shop_name" id="shop_name" placeholder="Enter your shop name" value="{{ old('shop_name') }}">
                    @error('shop_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Shop Category --}}
                <div class="mb-8">
                    <label for="category[]" class="font-semibold mt-4 mb-2" >Category</label>
                    <h6 class="text-sm mb-4">You can select multiple categories that fit your shop.</h6>
                    <div class="relative grid grid-cols-4 gap-3 mb-2">

                        {{-- Barbershop --}}
                        <button class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2 " id="button1">
                            <svg id="check-icon1" class="stroke-white stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span id="category1" class="mr-4">Barbershop</span>
                        </button>
                        <input class="absolute invisible -top-4 right-1 pointer-events-none" type="checkbox" name="category[]" id="checkbox1" value="1">

                        {{-- Beauty Salon --}}
                        <button class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2" id="button2">
                            <svg id="check-icon2" class="stroke-white stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span id="category2" class="mr-4">Beauty Salon</span>
                        </button>
                        <input class="absolute invisible -top-4 right-2 pointer-events-none" type="checkbox" name="category[]" id="checkbox2" value="2">

                        {{-- Hair Salon --}}
                        <button class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2" id="button3">
                            <svg id="check-icon3" class="stroke-white stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span id="category3" class="mr-4">Hair Salon</span>
                        </button>
                        <input class="absolute invisible -top-4 right-3 pointer-events-none" type="checkbox" name="category[]" id="checkbox3" value="3">

                        {{-- Nail Salon --}}
                        <button class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2" id="button4">
                            <svg id="check-icon4" class="stroke-white stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span id="category4" class="mr-4">Nail Salon</span>
                        </button>
                        <input class="absolute invisible -top-4 right-4 pointer-events-none" type="checkbox" name="category[]" id="checkbox4" value="4">
                    </div>
                    @error('category')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="grid grid-cols-3 gap-3 mb-8">
                    {{-- Email --}}
                    <div class="flex flex-col gap-3 col-span-2">
                        <label class="font-semibold" for="email">Email</label>
                        <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')ring-1 ring-red-500 @enderror" type="text" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Phone Number --}}
                    <div class="flex flex-col gap-3 col-span-1">
                        <label class="font-semibold" for="contact_number">Phone Number</label>
                        <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('contact_number')ring-1 ring-red-500 @enderror" type="text" name="contact_number" id="contact_number" placeholder="XXXX-XXX-XXXX" value="{{ old('contact_number') }}">
                        @error('contact_number')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        {{-- demo --}}
                    </div>
                </div>
                {{-- Address --}}
                <div class="flex flex-col">
                    <label class="font-semibold mb-3"  for="address">Address</label>
                    <div class="grid grid-cols-4 gap-3 mb-8 flex-1">
                        {{-- Region --}}
                        <div class="flex flex-col gap-3">
                            <label for="region">Region</label>
                            <div class="relative flex items-center">
                                <select class="border flex-1 border-neutral-400 py-3 px-4 rounded-lg truncate @error('region')ring-1 ring-red-500 @enderror" id="regionSelect" name="region">
                                    <option value="">Select Region</option>
                                </select>
                                <svg id="caret-down1" class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
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
                                <select class="border w-full border-neutral-400 py-3 pl-4 pr-9 rounded-lg @error('province')ring-1 ring-red-500 @enderror" id="provinceSelect" name="province">
                                    <option value="">Select Province</option>
                                </select>
                                <svg id="caret-down2" class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
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
                                <select class="border w-full border-neutral-400 py-3 pl-4 pr-9 rounded-lg @error('city')ring-1 ring-red-500 @enderror" id="citySelect" name="city">
                                    <option value="">Select City</option>
                                </select>
                                <svg id="caret-down3" class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
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
                                <select class="border flex-1 border-neutral-400 py-3 px-4 rounded-lg @error('barangay')ring-1 ring-red-500 @enderror" id="barangaySelect" name="barangay">
                                    <option value="">Select Barangay</option>
                                </select>
                                <svg id="caret-down4" class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            @error('barangay')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 mb-8 flex-1">
                       <label  for="detailed_address">Detailed Address</label>
                       <input class="border border-neutral-400 py-3 px-4 rounded-lg @error('detailed_address')ring-1 ring-red-500 @enderror" type="text" name="detailed_address" id="detailed_address" placeholder="Enter your detailed address">
                       @error('detailed_address')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                       @enderror
                    </div>
                </div>
                
                {{-- BUttons Container --}}
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ url()->previous() }}" class="bg-neutral-300 hover:bg-neutral-400 active:bg-neutral-200 rounded-lg p-3 font-semibold w-full transition-colors duration-150 ease-in-out text-center">
                        Back
                    </a>
                    <button class="bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-lg p-3 font-semibold">Submit</button>
                </div>
            </form>

        </div>
    </main>
    <script src="{{ asset('assets/js/regionObj.js') }}"></script>
    <script src="{{ asset('assets/js/provinceObj.js') }}"></script>
    <script src="{{ asset('assets/js/cityObj.js') }}"></script>
    <script src="{{ asset('assets/js/barangayObj.js') }}"></script>
    <script src="{{ asset('assets/js/shopRegistration.js') }}"></script>
    <script src="{{ asset('assets/js/address.js') }}"></script>
    @stack('scripts')
</body>
</html>