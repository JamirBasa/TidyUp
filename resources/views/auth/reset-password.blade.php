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
                <input class="border border-neutral-400 py-3 px-4 rounded-lg" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
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
    @stack('scripts')
</body>
</html>