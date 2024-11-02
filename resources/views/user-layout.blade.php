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
    <x-user-header :user="$user"/>
    
    <main  class="bg-milk min-h-screen relative scroll-smooth pb-[10rem]">
        {{-- SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR --}}
        <x-user-sidebar/>
        <div id="content">
            {{-- <x-loading-screen/> --}}
            @if(isset($currentView))
                @include('partial.' . $currentView, ['user' => $user])
            @else
                @include('partial.index', ['user' => $user])
            @endif
        </div>
    </main>
    
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.blade.js') }}"></script>
    <script src="{{ asset('assets/js/user-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script>
        $(window).on('scroll', function() {
            const $header = $('header');
            if ($(this).scrollTop() > 0) {
                $header.addClass('backdrop-blur-2xl bg-transparent shadow-sm');
                $('#search').addClass('bg-neutral-100');
            } else {
                $header.removeClass('backdrop-blur-2xl bg-transparent shadow-sm');
                $('#search').removeClass('bg-neutral-100');  
            }
        });
    </script>
    @stack('scripts')
</body>
</html>