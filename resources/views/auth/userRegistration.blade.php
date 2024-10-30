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
        <section class="flex justify-center items-center h-screen bg-gray-100">
            <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            {{-- Logo --}}
            <a href="{{ route('index') }}" class="flex justify-center mb-6">
                <img class="h-12" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="logo">
            </a>
            <h1 class="text-2xl font-semibold text-center mb-4">Register for TidyUp</h1>
            
            {{-- registration form --}}
            <form action="{{ route('user.registration') }}" method="POST">
                @csrf
                {{-- Name --}}
                <div class="mb-4">
                    <label class=" text-gray-700" for="name">Name</label>
                    @error('name')
                    <span class="text-red-500 text-sm text-right">{{ $message }}</span>
                    @enderror
                    <input class="w-full px-3 py-2 border rounded-lg" type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                </div>
            
                {{-- Email --}}
                <div class="mb-4">
                    <label class=" text-gray-700" for="email">Email Address</label>
                    @error('email')
                        <span class="text-red-500 text-sm text-right">{{ $message }}</span>
                    @enderror
                    <input class="w-full px-3 py-2 border rounded-lg" type="email" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                    
                </div>
            
                {{-- Password --}}
                <div class="mb-4">
                    <label class=" text-gray-700 inline" for="password">Password</label>
                    @error('password')
                    <span class="text-red-500 text-sm text-right">{{ $message }}</span>
                    @enderror
                    <input class="w-full px-3 py-2 border rounded-lg" type="password" id="password" name="password" placeholder="Password">
                </div>
            
                {{-- Confirm Password --}}
                <div class="mb-6">
                    <label class=" text-gray-700" for="password_confirmation">Confirm Password</label>
                    <input class="w-full px-3 py-2 border rounded-lg" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                </div>
            
                <button class="w-full bg-blue-500 text-white py-2 rounded-lg" type="submit">Register</button>
            </form>
            

            {{-- separator --}}
            <div class="flex items-center my-6">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-4 text-gray-500">OR</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            {{-- Social Media Login for Google --}}
            <button class="w-full border border-gray-300 rounded-lg py-2 flex items-center justify-center mb-4 hover:border-blue-500">
                <img class="h-6 mr-2" src="{{ asset('assets/images/googlelogo.svg') }}" alt="Google logo">
                <span>Continue with Google</span>
            </button>

            {{-- Social Media Login for Facebook --}}
            <button class="w-full border border-gray-300 rounded-lg py-2 flex items-center justify-center hover:border-blue-500">
                <img class="h-6 mr-2" src="{{ asset('assets/images/facebooklogo.svg') }}" alt="Facebook logo">
                <span>Continue with Facebook</span>
            </button>

            <div class="text-center mt-6">
                <p>Already Have an Account? <a href="{{ route('user.login') }}" class="text-blue-500 hover:underline">Log in now</a>.</p>
            </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>