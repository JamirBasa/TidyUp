@props(['i', 'shops', 'tag', 'class'])
<a href="{{ route('shop.view') }}" class="{{ $class ?? '' }}">
    <div class="relative mb-2">
        {{-- shop image --}}
        <img load="lazy" class="h-[13rem] sm:h-[15rem] w-full object-cover rounded-lg"
            src="{{ asset('assets/images/shops/' . $shops[$i]['image']) }}" alt="">
        {{-- shop tag --}}
        <span
            class="absolute top-3 right-3 bg-white rounded-full py-1 px-4 text-xs sm:text-sm">{{ $tag ?? $shops[$i]['tag'] }}</span>
    </div>
    <div class="relative">
        {{-- Shop Name --}}
        <h6 class="font-semibold text-sm sm:text-base">{{ $shops[$i]['name'] }}</h6>
        {{-- Shop Location --}}
        <p class="opacity-60 text-xs sm:text-sm">Street Name, Barangay, City</p>
        {{-- Shop Rating --}}
        <span class="absolute inline-flex items-center gap-2 top-0 right-0">
            <p class="-mb-1 text-sm sm:text-base">{{ $shops[$i]['rating'] }}</p>
            <svg class="stroke-black stroke-1 size-2 sm:size-3 fill-black" width="24" height="24"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </span>
    </div>
</a>
