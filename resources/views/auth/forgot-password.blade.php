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
                <h1 class="font-clash font-medium text-4xl mb-4 text-center">Request Password Reset Email</h1>
                <p class="text-neutral-600 text-base mb-4 text-center">Enter your email to change password</p>
                @if (session('status'))
                    <x-flash-msg :msg="session('status')" :bg="'bg-green-500'"/>
                @endif
                {{-- login form --}}
                <form action="{{route('password.request')}}" method="POST">
                    @csrf
                    {{-- Email --}}
                    <div class="flex flex-col gap-2 mb-8">
                        <div class="inline-flex items-center gap-3">
                            <label class="text-left font-semibold inline" for="email">Email Adress</label>
                            
                        </div>
                        <input class="border border-neutral-300 py-3 px-6 rounded-lg" type="text" name="email" placeholder="Email Address">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <a href="{{ route('user.login') }}" class="w-full bg-neutral-200 py-3 rounded-lg flex items-center justify-center">Cancel</a>
                        <button class="w-full bg-brand-500 text-white py-3 rounded-lg" type="submit">Submit</button>
                    </div>
                </form>
                <div>
                    <p class=" opacity-60 text-pretty text-center">A password reset link will be sent to your email address. Please check your email upon submission. If you do not receive the email within a few minutes, please check your spam folder or try again.</p>
                    
                </div>
            <a class="flex items-center absolute top-8 left-8" href="{{ route('user.login') }}">
                <svg class="size-7 stroke-white stroke-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 16L10 12L14 8"  stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="text-white">Back</span>
            </a>
            
        </section>
    </main>
    <script src="{{ asset('assets/js/userLogin.js') }}"></script>
    @stack('scripts')
</body>
</html>