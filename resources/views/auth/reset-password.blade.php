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
        <div class="max-w-screen-sm mx-auto bg-white p-16 rounded-lg mt-28 ">
            
            <div class="mb-10">
                <h1 class="font-clash flex font-medium text-2xl mb-2">Reset Password</h1>
                <h1 class="text-sm">Fill in the details and you're good to go!</h1>
            </div>

            {{-- Form --}}
            <form action="{{route('password.update')}}" method="POST">
                @csrf
         <input type="hidden" name="token" value="{{ $token }}">
                <div class="grid grid-cols-2 gap-3 mb-8 flex-1">
            
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
                </div>  
            {{-- Password --}}
            <div class="flex flex-col gap-3 mb-4 flex-1">
                <div class="flex items-center justify-between">
                        <label class="font-semibold"  for="password">New Password</label>
                        <p id="strengthDisplay" class=""></p>
                </div>
                <div class="flex-1 flex relative items-center">
                    <input class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('password')
                    ring-1 ring-red-500 @enderror" type="password" name="password" id="password" placeholder="Enter your new password">
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
                <ul class="flex gap-4 w-full mb-6 items-center justify-center">
                    <div>
                        <li class="text-neutral-500 text-left text-sm col-span-2">&bull; Use 8 or more Characters</li>
                        <li class="text-neutral-500 text-left text-sm col-span-2">&bull; Use a number (e.g. 1234)</li>
                    </div>
                    <div>
                        <li class="text-neutral-500 text-left text-sm col-span-3 text-nowrap">&bull; Use upper and lower case letter (e.g. Aa)</li>
                        <li class="text-neutral-500 text-left text-sm col-span-2">&bull; Use a symbol(e.g. !@#$)</li>
                    </div>
                </ul>
            {{-- Confirm Password --}}
            <div class="flex flex-col gap-3 mb-12 flex-1">
                <div class="flex items-center justify-between">
                    <label class="font-semibold"  for="password_confirmation">Confirmation Password</label>
                    <p id="matchPasswordDisplay" class="text-red-400"></p>
                </div>
                <div class="flex-1 flex relative items-center">
                    <input class="border border-neutral-400 py-3 px-4 rounded-lg w-full" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your new password">
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
                <div class="flex gap-4">
                    
                    <button type="submit" class="flex-1 bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-lg p-3 font-semibold">
                        Reset Password
                    </button>
                    
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
    <script>
        function checkPasswordStrength(password) {
            const minLength = 8;
            const hasUpperCase = /[A-Z]/.test(password);
            const hasLowerCase = /[a-z]/.test(password);
            const hasNumber = /[0-9]/.test(password);
            const hasSymbol = /[!@#$%^&*(),.?":{}|<>]/.test(password);
            const lengthCheck = password.length >= minLength;
            let strengthScore = 0;
            if (hasUpperCase) strengthScore++;
            if (hasLowerCase) strengthScore++;
            if (hasNumber) strengthScore++;
            if (hasSymbol) strengthScore++;
            if (!lengthCheck) {
                return 'Weak Password';
            } else if (strengthScore === 4) {
                return 'Strong Password';
            } else if (strengthScore >= 2) {
                return 'Good Password';
            } else {
                return 'Weak Password';
            }
        }

        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password_confirmation');
        const strengthDisplay = document.getElementById('strengthDisplay');
        const matchPasswordDisplay = document.getElementById('matchPasswordDisplay');

        passwordInput.addEventListener('input', () => {
            const password = passwordInput.value;
            const text = checkPasswordStrength(password);
            
            if (text === 'Weak Password') {
                strengthDisplay.style.color = 'red';
            } else if (text === 'Good Password') {
                strengthDisplay.style.color = 'orange';
            } else {
                strengthDisplay.style.color = 'green';
            }


            strengthDisplay.textContent = `${text}`; // Corrected this line
        });

        confirmPasswordInput.addEventListener('input', checkPasswordMatch);

        function checkPasswordMatch() {
            if (confirmPasswordInput.value === passwordInput.value && confirmPasswordInput.value !== '') {
                matchPasswordDisplay.textContent = 'Passwords match';
                matchPasswordDisplay.style.color = 'green';
            } else {
                matchPasswordDisplay.textContent = 'Passwords do not match';
                matchPasswordDisplay.style.color = 'red';
            }
        };
    </script>
    {{-- <script src="{{ asset('assets/js/shopRegistration.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script>
        $hideIcon = $('#hide-icon');
        $showIcon = $('#show-icon');
        $hide_icon2 = $('#hide-icon2');
        $show_icon2 = $('#show-icon2');
        $password = $('#password');
        $password_confirmation = $('#password_confirmation');

        $hideIcon.on('click', function() {
            $password.attr('type', 'text');
            $hideIcon.addClass('hidden');
            $showIcon.removeClass('hidden');
        });

        $showIcon.on('click', function() {
            $password.attr('type', 'password');
            $showIcon.addClass('hidden');
            $hideIcon.removeClass('hidden');
        });

        $hide_icon2.on('click', function() {
            $password_confirmation.attr('type', 'text');
            $hide_icon2.addClass('hidden');
            $show_icon2.removeClass('hidden');
        });

        $show_icon2.on('click', function() {
            $password_confirmation.attr('type', 'password');
            $show_icon2.addClass('hidden');
            $hide_icon2.removeClass('hidden');
        });

    </script>
    @stack('scripts')
</body>
</html>