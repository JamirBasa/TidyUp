@props(['user'])

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
    <x-user-header :user="$user" />

    <main class="bg-milk min-h-screen relative scroll-smooth pt-10 pb-20">
        {{-- SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR --}}
        <div
            class="flex mx-4 justify-center lg:max-w-screen-lg xl:max-w-screen-xl 2xl:max-w-screen-2xl lg:mx-auto gap-10">
            <x-user-sidebar />
            <div id="content" class="flex-1 min-w-0">
                {{-- <x-loading-screen /> --}}
                @if (isset($currentView))
                    @include('partial.' . $currentView, ['user' => $user])
                @else
                    @include('partial.index', ['user' => $user])
                @endif
            </div>
        </div>
    </main>

    <x-footer />
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.blade.js') }}"></script>
    <script src="{{ asset('assets/js/user-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    @stack('scripts')
</body>

</html>
