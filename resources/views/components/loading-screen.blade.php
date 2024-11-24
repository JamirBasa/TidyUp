@if (!session('visited'))
    <div id="loading-screen"
        class="transition-opacity duration-1000 ease-in-out fixed top-0 right-0 left-0 bottom-0 bg-milk z-[3000] flex flex-col items-center pt-96 opacity-0 invisible">
        <div class="flex items-center scale-125 animate-bounce">
            <img class="size-52" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="">
            <div>
                <h1 class="text-xl">
                    WELCOME TO
                </h1>
                <span class="font-clash font-medium text-8xl">TidyUp</span>
            </div>
        </div>
    </div>
    @php
        session(['visited' => true]);
    @endphp
@else
    <div id="loading-screen"
        class="transition-opacity duration-1000 ease-in-out fixed top-0 right-0 left-0 bottom-0 bg-milk z-50 flex flex-col items-center pt-96 opacity-0 invisible">
        <div class="flex items-center scale-125 animate-bounce">
            <img class="size-52" src="{{ asset('assets/images/tidyUpLogo.svg') }}" alt="">
            <div>
                <span class="font-clash font-medium text-8xl">TidyUp</span>
            </div>
        </div>
    </div>
@endif
