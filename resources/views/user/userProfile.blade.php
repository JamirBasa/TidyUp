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
                <h1 class="font-clash flex font-medium text-2xl mb-2">Edit Profile</h1>
                <h1 class="text-sm">Give your profile a refreshed look with new details.</h1>
            </div>

            {{-- Form --}}
            <form action="" method="POST">
                @csrf
                {{-- Profile Pic --}}
                <div class="flex items-end space-x-4">
                    <div class="relative ">
                        <div class="flex justify-end items-end space-x-4 mb-2 ">
                            <div class="flex relative">
                                <img src="..\assets\images\sampleDp.png" alt="Profile Image" class="w-28 h-28 rounded-full" />
                                <label for="profile-image-upload" class="absolute bottom-1 right-1 w-7 h-7 bg-brand-500 hover:bg-brand-600 text-white rounded-full flex items-center justify-center cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <input type="file" id="profile-image-upload" class="hidden" />
                                </label>
                            </div>
                            <img src="..\assets\images\sampleDp.png" alt="Profile Image" class="w-16 h-16 rounded-full" />
                            <img src="..\assets\images\sampleDp.png" alt="Profile Image" class="w-8 h-8 rounded-full" />
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm mb-8">Supported file formats: JPG, PNG</p>
                        </div>
                    </div>
                </div>
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
                            @enderror" name="gender" id="gender">
                                <option value="" class="appearance-none">Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Others" {{ old('gender') == 'Others' ? 'selected' : '' }}>Others</option>
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
                                <select class="border w-full border-neutral-400 py-3 px-4 rounded-lg truncate @error('region')
                                    ring-1 ring-red-500 
                                @enderror" id="regionSelect" name="region">
                                    <option value="">Select Region</option>
                                    <option value="Region1" {{ old('region') == 'Region1' ? 'selected' : '' }}>Region 1</option>
                                    <option value="Region2" {{ old('region') == 'Region2' ? 'selected' : '' }}>Region 2</option>
                                    <option value="Region3" {{ old('region') == 'Region3' ? 'selected' : '' }}>Region 3</option>
                                    <!-- Add other regions as needed -->
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
                                <select class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('barangay')
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
            {{--Old Password --}}
            <div class="flex flex-col gap-3 mb-4 flex-1">
                <div class="flex items-center justify-between">
                        <label class="font-semibold"  for="password">Old Password</label>
                        <p id="strengthDisplay" class=""></p>
                </div>
                <div class="relative flex items-center">
                    <input class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('password')
                        ring-1 ring-red-500 
                    @enderror" type="password" name="password" id="password" placeholder="Current password">
                    <svg id="hide-icon" class="stroke-neutral-300 absolute right-5 cursor-pointer" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9994 4L19.9994 20M16.4994 16.7559C15.1468 17.4845 13.618 17.9999 11.9994 17.9999C8.46875 17.9999 5.36575 15.5478 3.58632 13.7788C3.11661 13.3119 2.8818 13.0784 2.73231 12.6201C2.6257 12.2933 2.62567 11.7066 2.73231 11.3797C2.88185 10.9215 3.11715 10.6875 3.58778 10.2197C4.48467 9.32821 5.71752 8.26359 7.17171 7.42676M19.4994 14.6335C19.8325 14.3405 20.1375 14.0523 20.4112 13.7803L20.4141 13.7772C20.8827 13.3114 21.1177 13.0779 21.2669 12.6206C21.3736 12.2938 21.3733 11.7068 21.2667 11.38C21.1173 10.9219 20.8822 10.6877 20.4128 10.2211C18.6334 8.45208 15.5301 6 11.9994 6C11.6619 6 11.3283 6.02241 10.9994 6.06448M13.3223 13.5C12.9697 13.8112 12.5066 14 11.9994 14C10.8948 14 9.9994 13.1046 9.9994 12C9.9994 11.4605 10.213 10.9711 10.5603 10.6113" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    {{-- Show Icon --}}
                    <svg id="show-icon" class="stroke-brand-500 absolute right-5 cursor-pointer hidden" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.58631 13.7788C5.36575 15.5478 8.46904 17.9999 11.9997 17.9999C15.5303 17.9999 18.6331 15.5478 20.4125 13.7788C20.8818 13.3123 21.1172 13.0782 21.2667 12.6201C21.3733 12.2933 21.3733 11.7067 21.2667 11.3799C21.1172 10.9218 20.8818 10.6877 20.4125 10.2211C18.633 8.45208 15.5303 6 11.9997 6C8.46904 6 5.36575 8.45208 3.58631 10.2211C3.11665 10.688 2.8818 10.9216 2.73231 11.3799C2.62569 11.7067 2.62569 12.2933 2.73231 12.6201C2.8818 13.0784 3.11665 13.3119 3.58631 13.7788Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.99951 12C9.99951 13.1046 10.8949 14 11.9995 14C13.1041 14 13.9995 13.1046 13.9995 12C13.9995 10.8954 13.1041 10 11.9995 10C10.8949 10 9.99951 10.8954 9.99951 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            {{--New Password --}}
            <div class="flex flex-col gap-3 mb-4 flex-1">
                <div class="flex items-center justify-between">
                        <label class="font-semibold"  for="password">New Password</label>
                        <p id="strengthDisplay" class=""></p>
                </div>
                <div class="relative flex items-center">
                    <input class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('password')
                        ring-1 ring-red-500 
                    @enderror" type="password" name="password" id="password" placeholder="Create a new password">
                    <svg id="hide-icon" class="stroke-neutral-300 absolute right-5 cursor-pointer" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9994 4L19.9994 20M16.4994 16.7559C15.1468 17.4845 13.618 17.9999 11.9994 17.9999C8.46875 17.9999 5.36575 15.5478 3.58632 13.7788C3.11661 13.3119 2.8818 13.0784 2.73231 12.6201C2.6257 12.2933 2.62567 11.7066 2.73231 11.3797C2.88185 10.9215 3.11715 10.6875 3.58778 10.2197C4.48467 9.32821 5.71752 8.26359 7.17171 7.42676M19.4994 14.6335C19.8325 14.3405 20.1375 14.0523 20.4112 13.7803L20.4141 13.7772C20.8827 13.3114 21.1177 13.0779 21.2669 12.6206C21.3736 12.2938 21.3733 11.7068 21.2667 11.38C21.1173 10.9219 20.8822 10.6877 20.4128 10.2211C18.6334 8.45208 15.5301 6 11.9994 6C11.6619 6 11.3283 6.02241 10.9994 6.06448M13.3223 13.5C12.9697 13.8112 12.5066 14 11.9994 14C10.8948 14 9.9994 13.1046 9.9994 12C9.9994 11.4605 10.213 10.9711 10.5603 10.6113" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    {{-- Show Icon --}}
                    <svg id="show-icon" class="stroke-brand-500 absolute right-5 cursor-pointer hidden" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.58631 13.7788C5.36575 15.5478 8.46904 17.9999 11.9997 17.9999C15.5303 17.9999 18.6331 15.5478 20.4125 13.7788C20.8818 13.3123 21.1172 13.0782 21.2667 12.6201C21.3733 12.2933 21.3733 11.7067 21.2667 11.3799C21.1172 10.9218 20.8818 10.6877 20.4125 10.2211C18.633 8.45208 15.5303 6 11.9997 6C8.46904 6 5.36575 8.45208 3.58631 10.2211C3.11665 10.688 2.8818 10.9216 2.73231 11.3799C2.62569 11.7067 2.62569 12.2933 2.73231 12.6201C2.8818 13.0784 3.11665 13.3119 3.58631 13.7788Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.99951 12C9.99951 13.1046 10.8949 14 11.9995 14C13.1041 14 13.9995 13.1046 13.9995 12C13.9995 10.8954 13.1041 10 11.9995 10C10.8949 10 9.99951 10.8954 9.99951 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
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
                    <label class="font-semibold"  for="password_confirmation">Confirm New Password</label>
                    <p id="matchPasswordDisplay" class="text-red-400"></p>
                </div>
                <div class="flex-1 flex relative items-center">
                    <input class="border w-full border-neutral-400 py-3 px-4 rounded-lg" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm new password">
                    <svg id="hide-icon2" class="stroke-neutral-300 absolute right-5 cursor-pointer" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9994 4L19.9994 20M16.4994 16.7559C15.1468 17.4845 13.618 17.9999 11.9994 17.9999C8.46875 17.9999 5.36575 15.5478 3.58632 13.7788C3.11661 13.3119 2.8818 13.0784 2.73231 12.6201C2.6257 12.2933 2.62567 11.7066 2.73231 11.3797C2.88185 10.9215 3.11715 10.6875 3.58778 10.2197C4.48467 9.32821 5.71752 8.26359 7.17171 7.42676M19.4994 14.6335C19.8325 14.3405 20.1375 14.0523 20.4112 13.7803L20.4141 13.7772C20.8827 13.3114 21.1177 13.0779 21.2669 12.6206C21.3736 12.2938 21.3733 11.7068 21.2667 11.38C21.1173 10.9219 20.8822 10.6877 20.4128 10.2211C18.6334 8.45208 15.5301 6 11.9994 6C11.6619 6 11.3283 6.02241 10.9994 6.06448M13.3223 13.5C12.9697 13.8112 12.5066 14 11.9994 14C10.8948 14 9.9994 13.1046 9.9994 12C9.9994 11.4605 10.213 10.9711 10.5603 10.6113" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    {{-- Show Icon --}}
                    <svg id="show-icon2" class="stroke-brand-500 absolute right-5 cursor-pointer hidden" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.58631 13.7788C5.36575 15.5478 8.46904 17.9999 11.9997 17.9999C15.5303 17.9999 18.6331 15.5478 20.4125 13.7788C20.8818 13.3123 21.1172 13.0782 21.2667 12.6201C21.3733 12.2933 21.3733 11.7067 21.2667 11.3799C21.1172 10.9218 20.8818 10.6877 20.4125 10.2211C18.633 8.45208 15.5303 6 11.9997 6C8.46904 6 5.36575 8.45208 3.58631 10.2211C3.11665 10.688 2.8818 10.9216 2.73231 11.3799C2.62569 11.7067 2.62569 12.2933 2.73231 12.6201C2.8818 13.0784 3.11665 13.3119 3.58631 13.7788Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.99951 12C9.99951 13.1046 10.8949 14 11.9995 14C13.1041 14 13.9995 13.1046 13.9995 12C13.9995 10.8954 13.1041 10 11.9995 10C10.8949 10 9.99951 10.8954 9.99951 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
                {{-- BUttons Container --}}
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ route('user.login') }}" class="bg-neutral-300 hover:bg-neutral-400 active:bg-neutral-200 rounded-lg p-3 font-semibold w-full transition-colors duration-150 ease-in-out text-center">
                        Discard changes
                    </a>
                    <button type="submit" class="bg-brand-400 hover:bg-brand-600 active:bg-brand-400 text-white rounded-lg p-3 font-semibold">Save changes</button>
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