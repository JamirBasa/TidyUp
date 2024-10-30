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
        <img class="min-h-screen fixed top-0 right-0 left-0 bottom-0 -z-10 lazyload" src="{{ asset('assets/images/signUpBG.png') }}" alt="webimage">

        {{-- Form Container --}}
        <div class="max-w-screen-xl mx-auto bg-white py-20 px-28 rounded-lg mt-28 ">
            
            <div class="mb-10">
                <h1 class="font-clash flex font-medium text-2xl mb-2">Create an Account</h1>
                <h1 class="text-sm">Fill in the details and you're good to go!</h1>
            </div>

            {{-- Form --}}
            <form action="" method="POST">
                @csrf
         
                <div class="grid grid-cols-2 gap-3 mb-8 flex-1">
                    {{-- User's First Name --}}
                    <div class="flex flex-col gap-3">
                        <label class="font-semibold"  for="first_name">First Name</label>
                        <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('first_name')
                            ring-1 ring-red-500 
                        @enderror" type="text" name="first_name" id="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}">
                        @error('first_name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- User's Last Name --}}
                    <div class="flex flex-col gap-3"> 
                        <label class="font-semibold"  for="last_name">Last Name</label>
                        <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('last_name')
                            ring-1 ring-red-500 
                        @enderror" type="text" name="last_name" id="last_name" placeholder="Enter your last name" value="{{ old('last_name') }}">
                        @error('last_name')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
        
                <div class="grid grid-cols-2 gap-3 mb-8 flex-1">
                    {{-- Username--}}
                    <div class="flex flex-col gap-3"> 
                        <label class="font-semibold"  for="username">Username</label>
                        <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('username')
                            ring-1 ring-red-500 
                        @enderror" type="text" name="username" id="username" placeholder="Enter your username" value="{{ old('username') }}">
                        @error('username')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Gender--}}
                    <div class="flex flex-col gap-3">
                        <label class="font-semibold"  for="gender">Gender</label>
                        <div class="relative flex items-center">
                            <select class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('gender')
                                ring-1 ring-red-500 
                            @enderror" name="gender" id="gender" value="{{ old('gender') }}">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                            <svg id="caret-down1" class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        @error('gender')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="grid grid-cols-3 gap-3 mb-8">
                    {{-- Email --}}
                    <div class="flex flex-col gap-3 col-span-2">
                        <label class="font-semibold" for="email">Email</label>
                        <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email')
                            ring-1 ring-red-500 
                        @enderror" type="text" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Phone Number --}}
                    <div class="flex flex-col gap-3 col-span-1">
                        <label class="font-semibold" for="phone_num">Phone Number</label>
                        <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('phone_num')
                            ring-1 ring-red-500 
                        @enderror" type="text" name="phone_num" id="phone_num" placeholder="XXXX-XXX-XXXX" value="{{ old('phone_num') }}">
                        @error('phone_num')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
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
                                <select class="border flex-1 border-neutral-400 py-3 px-4 rounded-lg truncate @error('region')
                                    ring-1 ring-red-500 
                                @enderror" id="regionSelect" name="region" value="{{ old('region') }}">
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
                                <select class="border w-full border-neutral-400 py-3 pl-4 pr-9 rounded-lg @error('province')
                                    ring-1 ring-red-500 
                                @enderror" id="provinceSelect" name="province" value="{{ old('province') }}">
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
                                <select class="border w-full border-neutral-400 py-3 pl-4 pr-9 rounded-lg @error('city')
                                    ring-1 ring-red-500 
                                @enderror" id="citySelect" name="city" value="{{ old('city') }}">
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
                                <select class="border flex-1 border-neutral-400 py-3 px-4 rounded-lg @error('barangay')
                                    ring-1 ring-red-500 
                                @enderror" id="barangaySelect" name="barangay" value="{{ old('barangay') }}">
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
                       <input class="border border-neutral-400 py-3 px-4 rounded-lg @error('detailed_address')
                            ring-1 ring-red-500 
                        @enderror" type="text" name="detailed_address" id="detailed_address" placeholder="Enter your detailed address" value="{{ old('detailed_address') }}">
                        @error('detailed_address')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
            </div>
            {{-- Password --}}
            <div class="flex flex-col gap-3 mb-4 flex-1">
                <div class="flex items-center justify-between">
                        <label class="font-semibold"  for="password">Password</label>
                        <p id="strengthDisplay" class=""></p>
                </div>
                <input class="border border-neutral-400 py-3 px-4 rounded-lg @error('password')
                    ring-1 ring-red-500 
                @enderror" type="password" name="password" id="password" placeholder="Enter your password">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            {{-- Password Condition --}}
                <ul class="grid grid-cols-9 w-full divide-x divide-neutral-400 mb-6 items-center">
                    <li class="text-neutral-500 inline text-center text-sm col-span-2">&bull; Use 8 or more Characters</li>
                    <li class="text-neutral-500 inline text-center text-sm col-span-2">&bull; Use a number (e.g. 1234)</li>
                    <li class="text-neutral-500 inline text-center text-sm col-span-3">&bull; Use upper and lower case letter (e.g. Aa)</li>
                    <li class="text-neutral-500 inline text-center text-sm col-span-2">&bull; Use a symbol(e.g. !@#$)</li>
                </ul>
            {{-- Confirm Password --}}
            <div class="flex flex-col gap-3 mb-12 flex-1">
                <div class="flex items-center justify-between">
                    <label class="font-semibold"  for="password_confirmation">Confirmation Password</label>
                    <p id="matchPasswordDisplay" class="text-red-400"></p>
                </div>
                <input class="border border-neutral-400 py-3 px-4 rounded-lg" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
            </div>
                {{-- BUttons Container --}}
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ route('user.login') }}" class="bg-neutral-300 hover:bg-neutral-400 active:bg-neutral-200 rounded-lg p-3 font-semibold w-full transition-colors duration-150 ease-in-out text-center">
                        Back
                    </a>
                    <button type="submit" class="bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-lg p-3 font-semibold">Register</button>
                </div>
            </form>
            <a class="flex items-center absolute top-8 left-8" href="{{ route('user.login') }}">
                <svg class="size-7" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 16L10 12L14 8" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="text-white">Back</span>
            </a>
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