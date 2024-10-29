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
    <main class="pb-20">
        {{-- Background Image --}}
        <img class="min-h-screen fixed top-0 right-0 left-0 bottom-0 -z-10 " src="{{ asset('assets/images/signUpBG.png') }}" alt="webimage">

        {{-- Form Container --}}
        <div class="max-w-screen-xl mx-auto bg-white py-20 px-28 rounded-lg mt-28 ">
            
            <div class="mb-10">
                <h1 class="font-clash flex font-medium text-2xl mb-2">Register Your Shop</h1>
                <h1 class="text-sm">Fill up your shop information.</h1>
            </div>

            {{-- Form --}}
            <form action="">
                @csrf
                {{-- Shop Name --}}
                <div class="flex flex-col gap-3 mb-8">
                    <label class="font-semibold"  for="shop_name">Shop Name</label>
                    <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full" type="text" name="shop_name" id="shop_name" placeholder="Enter your shop name">
                </div>
                {{-- Shop Category --}}
                <div class="mb-8">
                    <label class="font-semibold mt-4 mb-2" for="category">Category</label>
                    <h6 class="text-sm mb-4">You can select multiple categories that fit your shop.</h6>
                    <div class="relative grid grid-cols-4 gap-3">

                        {{-- Barbershop --}}
                        <button class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2 " id="button1">
                            <svg id="check-icon1" class="stroke-white stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span id="category1" class="mr-4">Barbershop</span>
                        </button>
                        <input class="absolute invisible -top-4 right-1 pointer-events-none" type="checkbox" name="category" id="checkbox1" value="Barbershop">

                        {{-- Beauty Salon --}}
                        <button class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2" id="button2">
                            <svg id="check-icon2" class="stroke-white stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span id="category2" class="mr-4">Beauty Salon</span>
                        </button>
                        <input class="absolute invisible -top-4 right-2 pointer-events-none" type="checkbox" name="category" id="checkbox2" value="Beauty Salon">

                        {{-- Hair Salon --}}
                        <button class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2" id="button3">
                            <svg id="check-icon3" class="stroke-white stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span id="category3" class="mr-4">Hair Salon</span>
                        </button>
                        <input class="absolute invisible -top-4 right-3 pointer-events-none" type="checkbox" name="category" id="checkbox3" value="Hair Salon">

                        {{-- Nail Salon --}}
                        <button class="border border-neutral-400 rounded-lg p-4 inline-flex items-center justify-center gap-2" id="button4">
                            <svg id="check-icon4" class="stroke-white stroke-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12.0005L10.2426 16.2431L18.727 7.75781" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span id="category4" class="mr-4">Nail Salon</span>
                        </button>
                        <input class="absolute invisible -top-4 right-4 pointer-events-none" type="checkbox" name="category" id="checkbox4" value="Nail Salon">
                    </div>
                </div>
                
                <div class="grid grid-cols-3 gap-3 mb-8">
                    {{-- Email --}}
                    <div class="flex flex-col gap-3 col-span-2">
                        <label class="font-semibold" for="email">Email</label>
                        <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full" type="text" name="email" id="email" placeholder="Enter your email">
                    </div>
                    {{-- Phone Number --}}
                    <div class="flex flex-col gap-3 col-span-1">
                        <label class="font-semibold" for="phone_num">Phone Number</label>
                        <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full" type="text" name="phone_num" id="phone_num" placeholder="XXXX-XXX-XXXX">
                    </div>
                </div>
                {{-- Address --}}
                <div class="flex flex-col">
                    <label class="font-semibold mb-3"  for="address">Address</label>
                    <div class="grid grid-cols-4 gap-3 mb-8 flex-1">
                        {{-- Region --}}
                        <div class="flex flex-col gap-3">
                            <label for="region">Region</label>
                            <select class="border border-neutral-400 py-3 px-4 rounded-lg" id="regionSelect" name="region">
                                <option value="">Select Region</option>
                            </select>
                        </div>
                        {{-- Province --}}
                        <div class="flex flex-col gap-3">
                            <label for="provice">Province</label>
                            <select class="border border-neutral-400 py-3 px-4 rounded-lg" id="proviceSelect" name="provice">
                                <option value="">Select Province</option>
                            </select>
                        </div>
                        {{-- City --}}
                        <div class="flex flex-col gap-3">
                            <label for="city">City</label>
                            <select class="border border-neutral-400 py-3 px-4 rounded-lg" id="citySelect" name="city">
                                <option value="">Select City</option>
                            </select>
                        </div>
                        {{-- Barangay --}}
                        <div class="flex flex-col gap-3">
                            <label for="barangay">Barangay</label>
                            <select class="border border-neutral-400 py-3 px-4 rounded-lg" id="barangaySelect" name="barangay">
                                <option value="">Select Barangay</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 mb-8 flex-1">
                       <label  for="detailed_address">Detailed Address</label>
                       <input class="border border-neutral-400 py-3 px-4 rounded-lg" type="text" name="detailed_address" id="detailed_address" placeholder="Enter your detailed address">
                    </div>
                </div>
                {{-- Password --}}
                <div class="flex flex-col gap-3 mb-8 flex-1">
                    <label class="font-semibold"  for="password">Password</label>
                    <input class="border border-neutral-400 py-3 px-4 rounded-lg" type="password" name="password" id="password" placeholder="Enter your password">
                </div>
                {{-- Password Condition --}}
                <div class="flex justify-center items-center gap-20 mb-8">
                    <ul class="flex flex-col gap-3">
                        <li class="text-neutral-500 inline">&bull; Use 8 or more Characters</li>
                        <li class="text-neutral-500 inline">&bull; Use a number (e.g. 1234)</li>
                    </ul>   
                    <ul class="flex flex-col gap-3">
                        <li class="text-neutral-500 inline">&bull; Use upper and lower case letter (e.g. Aa)</li>
                        <li class="text-neutral-500 inline">&bull; Use a symbol(e.g. !@#$)</li>
                    </ul>
                </div>
                {{-- Confirm Password --}}
                <div class="flex flex-col gap-3 mb-12 flex-1">
                    <label class="font-semibold"  for="password_confirmation">Confirmation Password</label>
                    <input class="border border-neutral-400 py-3 px-4 rounded-lg" type="password" name="password_confirmation" id="password_confirmation" placeholder="Comfirm your password">
                </div>
                {{-- BUttons Container --}}
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ route('shop.login') }}" class="bg-neutral-300 hover:bg-neutral-400 active:bg-neutral-200 rounded-lg p-3 font-semibold w-full transition-colors duration-150 ease-in-out text-center">
                        Back
                    </a>
                    <button class="bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-lg p-3 font-semibold">Next</button>
                </div>
            </form>

        </div>
    </main>
    <script src="{{ asset('assets/js/shopRegistration.js') }}"></script>
    <script src="{{ asset('assets/js/address.js') }}"></script>
    @stack('scripts')
</body>
</html>