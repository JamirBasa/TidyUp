<x-user-layout :user="$user">
    
    <x-loading-screen/>
        
    <div class="pt-28 pl-[17rem] max-w-screen-2xl mx-auto"> 
        <div class="grid grid-cols-3 ">
            <div class="col-span-2 pt-20">
                <h1 class="font-clash font-medium text-6xl max-w-[37rem] text-pretty mb-4">Transformation in a click of a button </h1>
                <p class=" text-pretty max-w-[37rem] mb-6">A comprehensive booking platform for beauty-related services offering its users ease and comfort.</p>
                <div>
                    <form action="" class="relative inline-flex items-center mt-4 mr-4">
                        @csrf
                        <input type="text" class=" w-[21rem] h-16 pl-6 pr-16 rounded-full shadow-lg" placeholder="Search for services near you">
                        <svg class="fill-white bg-black rounded-full absolute right-6 cursor-pointer" width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.0008 7.90039C13.0288 7.90039 9.80078 11.1284 9.80078 15.1004C9.80078 17.5244 11.2048 19.5524 12.8368 20.9684C13.3528 21.4124 14.2528 22.1204 15.0568 23.1644C15.9448 24.3284 16.7488 25.5764 17.0008 26.4164C17.2528 25.5764 18.0568 24.3284 18.9448 23.1644C19.7488 22.1204 20.6488 21.4124 21.1648 20.9684C22.7968 19.5524 24.2008 17.5244 24.2008 15.1004C24.2008 11.1284 20.9728 7.90039 17.0008 7.90039ZM17.0008 10.9724C17.5429 10.9724 18.0797 11.0792 18.5805 11.2866C19.0813 11.4941 19.5364 11.7981 19.9197 12.1815C20.303 12.5648 20.6071 13.0198 20.8146 13.5207C21.022 14.0215 21.1288 14.5583 21.1288 15.1004C21.1288 15.6425 21.022 16.1793 20.8146 16.6801C20.6071 17.1809 20.303 17.636 19.9197 18.0193C19.5364 18.4026 19.0813 18.7067 18.5805 18.9142C18.0797 19.1216 17.5429 19.2284 17.0008 19.2284C15.906 19.2284 14.856 18.7935 14.0818 18.0193C13.3077 17.2452 12.8728 16.1952 12.8728 15.1004C12.8728 14.0056 13.3077 12.9556 14.0818 12.1815C14.856 11.4073 15.906 10.9724 17.0008 10.9724Z" />
                        </svg>
                    </form>
                    <button class="px-6 h-16 w-[17rem] rounded-full bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white">Get Started</button>
                </div>
            </div>
            <div class="col-span-1">
                <img class="h-[30rem]" src="{{ asset('assets/images/landingpageVector.png') }}" alt="">
            </div>
        </div>
    </div>
    
    
</x-user-layout>