@props(['user', 'userrole'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/fonts.css', 'resources/js/jquery-3.7.1.min.js'])
</head>

<body>
    {{-- Header --}}

    {{-- <x-loading-screen /> --}}
    <div class="bg-milk min-h-screen relative scroll-smooth pb-20 z-0 pt-[3rem] lg:pt-[6rem]">
        <x-user-header :user="$user" :userrole="$userrole" />
        {{-- SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR --}}
        <div
            class="flex mx-4 justify-center lg:max-w-screen-lg xl:max-w-screen-xl 2xl:max-w-screen-2xl lg:mx-auto gap-10">
            <x-user-sidebar />
            <div id="content" class="flex-1 min-w-0">
                {{ $slot }}
            </div>
        </div>
    </div>

    <x-footer />
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.blade.js') }}"></script>
    <script src="{{ asset('assets/js/user-sidebar.js') }}"></script>
    @stack('scripts')
</body>

</html>
