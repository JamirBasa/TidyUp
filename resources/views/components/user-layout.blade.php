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
    {{-- Header --}}
    <x-user-header/>

    <main class="bg-milk min-h-screen relative scroll-smooth">
        {{-- SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR SIDEBAR --}}
        <x-user-sidebar/>
        {{ $slot }}
    </main>
    <script src="{{ asset('assets/js/index.blade.js') }}"></script>
    <script src="{{ asset('assets/js/user-sidebar.js') }}"></script>
    @stack('scripts')
</body>
</html>