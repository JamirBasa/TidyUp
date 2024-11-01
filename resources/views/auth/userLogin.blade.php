<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/fonts.css'])
</head>
<body>
    <main class="">
        <section class="grid grid-cols-2 relative">
            <img class="h-screen object-cover col-span-1" src="{{ asset('assets/images/signUpBG.png') }}" alt="">
            <div class="pt-20 px-36">
                {{-- Logo --}}
                <a href="{{ route('index') }}" class="flex justify-center">
                    <img class="size-24 mb-4" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="logo">
                </a>
                <h1 class="font-clash font-medium text-4xl mb-4 text-center">Welcome to TidyUp!</h1>
                <p class="text-neutral-600 text-base mb-8 text-center">We are glad to have you here.</p>
                
                {{-- login form --}}
                <form action="{{ route('user.login') }}" method="POST">
                    @csrf
                    {{-- Email --}}
                    <div class="flex flex-col gap-2 mb-8">
                        <div class="inline-flex items-center gap-3">
                            <label class="text-left font-semibold inline" for="email">Email Adress</label>
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <input class="border border-neutral-300 py-3 px-6 rounded-lg" type="text" name="email" placeholder="Email Address">
                    </div>

                    {{-- password --}}
                    <div class="flex flex-col gap-2 mb-8">
                        <div class="inline-flex items-center gap-3">
                            <label class="text-left font-semibold inline" for="password">Password</label>
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1 flex relative items-center">
                            <input id="password" class="flex-1 border border-neutral-300 py-3 px-6 rounded-lg" type="password" name="password" placeholder="Password">
                            {{-- Hide Icon --}}
                            <svg id="hide-icon" class="stroke-neutral-300 absolute right-5 cursor-pointer" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.9994 4L19.9994 20M16.4994 16.7559C15.1468 17.4845 13.618 17.9999 11.9994 17.9999C8.46875 17.9999 5.36575 15.5478 3.58632 13.7788C3.11661 13.3119 2.8818 13.0784 2.73231 12.6201C2.6257 12.2933 2.62567 11.7066 2.73231 11.3797C2.88185 10.9215 3.11715 10.6875 3.58778 10.2197C4.48467 9.32821 5.71752 8.26359 7.17171 7.42676M19.4994 14.6335C19.8325 14.3405 20.1375 14.0523 20.4112 13.7803L20.4141 13.7772C20.8827 13.3114 21.1177 13.0779 21.2669 12.6206C21.3736 12.2938 21.3733 11.7068 21.2667 11.38C21.1173 10.9219 20.8822 10.6877 20.4128 10.2211C18.6334 8.45208 15.5301 6 11.9994 6C11.6619 6 11.3283 6.02241 10.9994 6.06448M13.3223 13.5C12.9697 13.8112 12.5066 14 11.9994 14C10.8948 14 9.9994 13.1046 9.9994 12C9.9994 11.4605 10.213 10.9711 10.5603 10.6113" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            {{-- Show Icon --}}
                            <svg id="show-icon" class="stroke-brand-500 absolute right-5 cursor-pointer hidden" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.58631 13.7788C5.36575 15.5478 8.46904 17.9999 11.9997 17.9999C15.5303 17.9999 18.6331 15.5478 20.4125 13.7788C20.8818 13.3123 21.1172 13.0782 21.2667 12.6201C21.3733 12.2933 21.3733 11.7067 21.2667 11.3799C21.1172 10.9218 20.8818 10.6877 20.4125 10.2211C18.633 8.45208 15.5303 6 11.9997 6C8.46904 6 5.36575 8.45208 3.58631 10.2211C3.11665 10.688 2.8818 10.9216 2.73231 11.3799C2.62569 11.7067 2.62569 12.2933 2.73231 12.6201C2.8818 13.0784 3.11665 13.3119 3.58631 13.7788Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.99951 12C9.99951 13.1046 10.8949 14 11.9995 14C13.1041 14 13.9995 13.1046 13.9995 12C13.9995 10.8954 13.1041 10 11.9995 10C10.8949 10 9.99951 10.8954 9.99951 12Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                   {{-- forgot password link --}}
                    <div class="flex justify-end mb-4">
                        <a href="{{route('password.request')}}" class="text-sm text-brand-500 hover:text-brand-700">Forgot Password?</a>
                    </div>

                    <button class="w-full bg-brand-500 text-white py-3 rounded-lg" type="submit">Login</button>
                    
                    
                </form>

                {{-- separator --}}
                <div class="relative flex py-5 items-center my-4">
                    <div class="flex-grow border-t-2 border-neutral-300"></div>
                    <span class="flex-shrink mx-20 text-neutral-300">OR</span>
                    <div class="flex-grow border-t-2 border-neutral-300"></div>
                </div>

                {{-- Social Media Login for google--}}
                <button class="border border-neutral-300 rounded-lg p-3 flex items-center gap-3 w-full justify-center mb-6 hover:border-brand-500">
                    <img class="size-7 " src="{{ asset('assets/images/googlelogo.svg') }}" alt="logo">
                    <span>Continue with Google</span>
                </button>

                {{-- Social Media Login for facebook --}}
                <button class="border border-neutral-300 rounded-lg p-3 flex items-center gap-3 w-full justify-center mb-6 hover:border-brand-500">
                    <img class="size-7 " src="{{ asset('assets/images/facebooklogo.svg') }}" alt="logo">
                    <span>Continue with Facebook</span>
                </button>

                <div class="w-full flex justify-center gap-2">
                    <p>Don’t have an account yet? </p>
                    <a href="{{ route('user.registration') }}">
                        <span class="text-brand-500 hover:underline cursor-pointer">Sign up now.</span>
                    </a>
                </div>
            </div>
            <a class="flex items-center absolute top-8 left-8" href="{{ route('choose') }}">
                <svg class="size-7" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 16L10 12L14 8" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="text-white">Back</span>
            </a>
        </section>
    </main>
    <script src="{{ asset('assets/js/userLogin.js') }}"></script>
    @stack('scripts')
</body>
</html>