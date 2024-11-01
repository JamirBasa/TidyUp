@props(['user'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="">
    @vite(['resources/js/app.js', 'resources/js/index.js' , 'resources/css/app.css', 'resources/css/fonts.css'])
</head>
<body class="">
    {{-- Header --}}
    <x-shop-header :user="$user"/>
    {{-- SideBar --}}
    <x-shop-sidebar/>
    <!-- main content -->
    <main class="bg-milk pt-24 pr-20 pl-40 pb-10 min-h-screen">
        {{ $slot }}
    </main>
    <script src="{{ asset('assets/js/shop/index.js') }}"></script>
    @stack('scripts')
</body>
</html>