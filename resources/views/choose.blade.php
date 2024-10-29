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
    <main class="">
        <section class="grid grid-cols-5">
            <img class="h-screen object-cover col-span-1" src="{{ asset('assets/images/signUpBG.png') }}" alt="">
            <div class="col-span-4 flex flex-col items-center pt-28">
                {{-- Logo --}}
                <a href="{{ route('index') }}">
                    <img class="size-36 mb-4" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="logo">
                </a>
                <h1 class="font-clash font-medium text-5xl mb-4">Welcome to TidyUp!</h1>
                <p class="text-neutral-600 text-xl mb-12">We are glad to have you here.</p>
                {{-- button for user login/registrations --}}
                <a href="{{ route('user.login') }}">
                    <button class="flex items-center gap-10 border-2 border-neutral-300 py-8 px-10 rounded-lg mb-12 hover:border-brand-500 transition-all ease-in-out w-[50rem] group">
                        
                        <svg class="size-18 stroke-neutral-300 group-hover:stroke-brand-500 transition-all ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 19C18 16.7909 15.3137 15 12 15C8.68629 15 6 16.7909 6 19M12 12C9.79086 12 8 10.2091 8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8C16 10.2091 14.2091 12 12 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="text-left">
                            <h6 class="text-xl font-semibold mb-4">Browse as Customer</h6>
                            <p class="text-sm">Login to your account as a customer and browse a huge selection of services.</p>
                        </div>
                    </button>
                </a>
                {{-- button for shop login/registrations --}}
                <a href="{{ route('shop.login') }}">
                    <button class="flex items-center gap-10 border-2 border-neutral-300 py-8 px-10 rounded-lg mb-12 hover:border-brand-500 transition-all ease-in-out w-[50rem] group">
                        <svg class="size-18 stroke-neutral-300 group-hover:stroke-brand-500 transition-all ease-in-out" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 3H3.26835C3.74213 3 3.97943 3 4.17267 3.08548C4.34304 3.16084 4.48871 3.28218 4.59375 3.43604C4.71269 3.61026 4.75564 3.8429 4.84137 4.30727L7.00004 16L17.4218 16C17.875 16 18.1023 16 18.29 15.9199C18.4559 15.8492 18.5989 15.7346 18.7051 15.5889C18.8252 15.4242 18.8761 15.2037 18.9777 14.7631L18.9785 14.76L20.5477 7.95996L20.5481 7.95854C20.7023 7.29016 20.7796 6.95515 20.6947 6.69238C20.6202 6.46182 20.4635 6.26634 20.2556 6.14192C20.0184 6 19.6758 6 18.9887 6H5.5M18 21C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19C18.5523 19 19 19.4477 19 20C19 20.5523 18.5523 21 18 21ZM8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20C9 20.5523 8.55228 21 8 21Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="text-left">
                            <h6 class="text-xl font-semibold mb-4">Manage Your Shop</h6>
                            <p class="text-sm">Login to your account as a shop owner and manage your shop and services.</p>
                        </div>
                    </button>
                </a>
            </div>
        </section>
    </main>
</body>
</html>