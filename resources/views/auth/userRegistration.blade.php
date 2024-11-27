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
    <main class="px-4 pb-8 md:pb-20">
        {{-- Background Image --}}
        <img class="min-h-screen fixed top-0 right-0 left-0 bottom-0 -z-10 object-cover lazyload"
            src="{{ asset('assets/images/signUpBG.png') }}" alt="webimage">

        {{-- Form Container --}}
        <div
            class="w-full max-w-screen-sm mx-auto bg-white py-8 px-8 rounded-lg mt-4 
                    md:py-12 md:px-16 lg:p-10 lg:mt-28">

            <div class="mb-4">
                <h1 class="font-clash font-medium text-xl md:text-2xl mb-2">Create an Account</h1>
                <h1 class="text-sm">Fill in the details and you're good to go!</h1>
            </div>

            {{-- Form --}}
            <form action="" method="POST">
                @csrf
                <div class="mb-4 md:mb-4">
                    {{-- Username --}}
                    <div class="flex flex-col gap-3">
                        <label class="font-semibold" for="username">Username</label>
                        <input
                            class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('username') ring-1 ring-red-500 @enderror"
                            type="text" name="username" id="username" placeholder="Enter your username"
                            value="{{ old('username') }}">
                        @error('username')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-6 md:mb-8">
                    {{-- Email --}}
                    <div class="">
                        <label class="font-semibold" for="email">Email</label>
                        <input
                            class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email') ring-1 ring-red-500 @enderror"
                            type="text" name="email" id="email" placeholder="Enter your email"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                {{-- Address --}}


                {{-- Password Section --}}
                <div class="flex flex-col gap-3 mb-4">
                    <div class="flex items-center justify-between">
                        <label class="font-semibold" for="password">Password</label>
                        <p id="strengthDisplay" class="text-sm"></p>
                    </div>
                    <div class="relative flex items-center">
                        <input
                            class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('password') ring-1 ring-red-500 @enderror"
                            type="password" name="password" id="password" placeholder="Enter your password">
                        <!-- Password visibility toggle icons -->
                        <svg id="hide-icon" class="stroke-neutral-300 absolute right-5 cursor-pointer" width="30"
                            height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.9994 4L19.9994 20M16.4994 16.7559C15.1468 17.4845 13.618 17.9999 11.9994 17.9999C8.46875 17.9999 5.36575 15.5478 3.58632 13.7788C3.11661 13.3119 2.8818 13.0784 2.73231 12.6201C2.6257 12.2933 2.62567 11.7066 2.73231 11.3797C2.88185 10.9215 3.11715 10.6875 3.58778 10.2197C4.48467 9.32821 5.71752 8.26359 7.17171 7.42676M19.4994 14.6335C19.8325 14.3405 20.1375 14.0523 20.4112 13.7803L20.4141 13.7772C20.8827 13.3114 21.1177 13.0779 21.2669 12.6206C21.3736 12.2938 21.3733 11.7068 21.2667 11.38C21.1173 10.9219 20.8822 10.6877 20.4128 10.2211C18.6334 8.45208 15.5301 6 11.9994 6C11.6619 6 11.3283 6.02241 10.9994 6.06448M13.3223 13.5C12.9697 13.8112 12.5066 14 11.9994 14C10.8948 14 9.9994 13.1046 9.9994 12C9.9994 11.4605 10.213 10.9711 10.5603 10.6113"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        {{-- Show Icon --}}
                        <svg id="show-icon" class="stroke-brand-500 absolute right-5 cursor-pointer hidden"
                            width="30" height="30" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.58631 13.7788C5.36575 15.5478 8.46904 17.9999 11.9997 17.9999C15.5303 17.9999 18.6331 15.5478 20.4125 13.7788C20.8818 13.3123 21.1172 13.0782 21.2667 12.6201C21.3733 12.2933 21.3733 11.7067 21.2667 11.3799C21.1172 10.9218 20.8818 10.6877 20.4125 10.2211C18.633 8.45208 15.5303 6 11.9997 6C8.46904 6 5.36575 8.45208 3.58631 10.2211C3.11665 10.688 2.8818 10.9216 2.73231 11.3799C2.62569 11.7067 2.62569 12.2933 2.73231 12.6201C2.8818 13.0784 3.11665 13.3119 3.58631 13.7788Z"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M9.99951 12C9.99951 13.1046 10.8949 14 11.9995 14C13.1041 14 13.9995 13.1046 13.9995 12C13.9995 10.8954 13.1041 10 11.9995 10C10.8949 10 9.99951 10.8954 9.99951 12Z"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>



                {{-- Confirm Password --}}
                <div class="flex flex-col gap-3 mb-4">
                    <div class="flex items-center justify-between">
                        <label class="font-semibold" for="password_confirmation">Confirm Password</label>
                        <p id="matchPasswordDisplay" class="text-red-400 text-sm"></p>
                    </div>
                    <div class="relative flex items-center">
                        <input class="border w-full border-neutral-400 py-3 px-4 rounded-lg" type="password"
                            name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
                        <!-- Password visibility toggle icons -->
                        <svg id="hide-icon2" class="stroke-neutral-300 absolute right-5 cursor-pointer" width="30"
                            height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.9994 4L19.9994 20M16.4994 16.7559C15.1468 17.4845 13.618 17.9999 11.9994 17.9999C8.46875 17.9999 5.36575 15.5478 3.58632 13.7788C3.11661 13.3119 2.8818 13.0784 2.73231 12.6201C2.6257 12.2933 2.62567 11.7066 2.73231 11.3797C2.88185 10.9215 3.11715 10.6875 3.58778 10.2197C4.48467 9.32821 5.71752 8.26359 7.17171 7.42676M19.4994 14.6335C19.8325 14.3405 20.1375 14.0523 20.4112 13.7803L20.4141 13.7772C20.8827 13.3114 21.1177 13.0779 21.2669 12.6206C21.3736 12.2938 21.3733 11.7068 21.2667 11.38C21.1173 10.9219 20.8822 10.6877 20.4128 10.2211C18.6334 8.45208 15.5301 6 11.9994 6C11.6619 6 11.3283 6.02241 10.9994 6.06448M13.3223 13.5C12.9697 13.8112 12.5066 14 11.9994 14C10.8948 14 9.9994 13.1046 9.9994 12C9.9994 11.4605 10.213 10.9711 10.5603 10.6113"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        {{-- Show Icon --}}
                        <svg id="show-icon2" class="stroke-brand-500 absolute right-5 cursor-pointer hidden"
                            width="30" height="30" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.58631 13.7788C5.36575 15.5478 8.46904 17.9999 11.9997 17.9999C15.5303 17.9999 18.6331 15.5478 20.4125 13.7788C20.8818 13.3123 21.1172 13.0782 21.2667 12.6201C21.3733 12.2933 21.3733 11.7067 21.2667 11.3799C21.1172 10.9218 20.8818 10.6877 20.4125 10.2211C18.633 8.45208 15.5303 6 11.9997 6C8.46904 6 5.36575 8.45208 3.58631 10.2211C3.11665 10.688 2.8818 10.9216 2.73231 11.3799C2.62569 11.7067 2.62569 12.2933 2.73231 12.6201C2.8818 13.0784 3.11665 13.3119 3.58631 13.7788Z"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M9.99951 12C9.99951 13.1046 10.8949 14 11.9995 14C13.1041 14 13.9995 13.1046 13.9995 12C13.9995 10.8954 13.1041 10 11.9995 10C10.8949 10 9.99951 10.8954 9.99951 12Z"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                {{-- Password Conditions --}}
                <ul class="mb-8">
                    <li id="charLimit" class="text-neutral-500 text-sm">&bull; Use 8 or more Characters</li>
                    <li id="isNumber" class="text-neutral-500 text-sm">&bull; Use a number (e.g. 1234)</li>
                    <li id="upperLowerChar" class="text-neutral-500 text-sm">&bull; Use upper and lower case letter
                        (e.g. Aa)
                    </li>
                    <li id="isSymbol" class="text-neutral-500 text-sm">&bull; Use a symbol(e.g. !@#$)</li>
                </ul>

                {{-- Buttons Container --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <a href="{{ route('user.login') }}"
                        class="bg-neutral-300 hover:bg-neutral-400 active:bg-neutral-200 rounded-lg p-3 font-semibold w-full transition-colors duration-150 ease-in-out text-center">
                        Back
                    </a>
                    <button type="submit"
                        class="bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-lg p-3 font-semibold">
                        Register
                    </button>
                </div>
            </form>

            {{-- Back Link (Mobile Hidden) --}}
            <a class="items-center absolute top-8 left-8 hidden md:flex" href="{{ route('user.login') }}">
                <svg class="size-7" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 16L10 12L14 8" stroke="white" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="text-white">Back</span>
            </a>
        </div>
    </main>
    <script src="{{ asset('assets/js/regionObj.js') }}"></script>
    <script src="{{ asset('assets/js/provinceObj.js') }}"></script>
    <script src="{{ asset('assets/js/cityObj.js') }}"></script>
    <script src="{{ asset('assets/js/barangayObj.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/shopRegistration.js') }}"></script> --}}
    <script src="{{ asset('assets/js/address.js') }}"></script>
    <script src="{{ asset('assets/js/userRegistration.js') }}"></script>
    @stack('scripts')
</body>

</html>
