<x-user-layout :user="$user" :userrole="$userRole">
    <section>
        <div class="flex items-center justify-between mb-6">
            <div class="w-[5rem]">
                <a href="{{ route('book-appointment', ['id' => $shop->id, 'branchId' => $branchId]) }}"
                    class="inline-flex gap-2 items-center border-b border-black p-1">
                    <svg class="size-4 stroke-black stroke-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <p class="">Back</p>
                </a>
            </div>
            <div>
                <h1 class="font-clash font-medium text-xl">Appointment Proccessing</h1>
            </div>
            <div class="ml-[6rem]">
                <a href="{{ route('shop.view', ['id' => $shop->id, 'branchId' => $branchId]) }}"
                    class="inline-flex gap-2 items-center border-b border-black p-1">
                    <p class="">Exit</p>
                    <svg class="stroke-1 stroke-black" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 15L15 12M15 12L12 9M15 12H4M4 7.24802V7.2002C4 6.08009 4 5.51962 4.21799 5.0918C4.40973 4.71547 4.71547 4.40973 5.0918 4.21799C5.51962 4 6.08009 4 7.2002 4H16.8002C17.9203 4 18.4796 4 18.9074 4.21799C19.2837 4.40973 19.5905 4.71547 19.7822 5.0918C20 5.5192 20 6.07899 20 7.19691V16.8036C20 17.9215 20 18.4805 19.7822 18.9079C19.5905 19.2842 19.2837 19.5905 18.9074 19.7822C18.48 20 17.921 20 16.8031 20H7.19691C6.07899 20 5.5192 20 5.0918 19.7822C4.71547 19.5905 4.40973 19.2839 4.21799 18.9076C4 18.4798 4 17.9201 4 16.8V16.75"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="grid place-items-center mb-6">
            <x-process-flow :class1="'brand-500'" :color1="'white'" :class2="'brand-500'" :color2="'white'" />
        </div>
        <div class="grid grid-cols-7 gap-4">

            <div class="col-span-2 bg-white p-6 rounded-lg shadow-sm">
                <div class="mb-4">
                    <img class="object-cover rounded-lg h-48 w-full" src="{{ asset('storage/' . $firstImage->path) }}"
                        alt="">
                </div>
                <div class="space-y-2 pb-2 mb-4 border-b border-neutral-200">
                    <h1 class="text-2xl">{{ $shopName }}</h1>
                    <div class="inline-flex gap-1 items-center">
                        <div>
                            <svg class="stroke-1 stroke-black size-4" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 9.92285C5 14.7747 9.24448 18.7869 11.1232 20.3252C11.3921 20.5454 11.5281 20.6568 11.7287 20.7132C11.8849 20.7572 12.1148 20.7572 12.271 20.7132C12.472 20.6567 12.6071 20.5463 12.877 20.3254C14.7557 18.7871 18.9999 14.7751 18.9999 9.9233C18.9999 8.08718 18.2625 6.32605 16.9497 5.02772C15.637 3.72939 13.8566 3 12.0001 3C10.1436 3 8.36301 3.7295 7.05025 5.02783C5.7375 6.32616 5 8.08674 5 9.92285Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7C10.8954 7 10 7.89543 10 9Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm">{{ $currentBranch->branch_name }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <h6 class="text-lg">Total</h6>
                    <p>Php 0.00</p>
                </div>
                <div>
                    <a href="">
                        <button class="p-3 bg-brand-500 text-white rounded-full w-full">Continue</button>
                    </a>
                </div>
            </div>
            <div class="col-span-5 flex gap-4">
                <form method="POST" action="">
                    <x-calendar :title="'Set Appointment Date'" />
                    {{-- <input type="text" value="test" name="test"> --}}
                    <button type="submit">Submit</button>
                </form>
                <div class="bg-white p-6 rounded-lg shadow-sm  flex-1 relative flex flex-col justify-between">
                    <div>
                        <div class="border-b pb-4 px-6 -mx-6 mb-4">
                            <h1 class="text-xl">Available Time</h1>
                        </div>
                        <div class="">
                            <div class="mb-4">
                                <p class="text-xs opacity-60">
                                    Please select the time you want to book an appointment.
                                </p>
                            </div>
                            <div class="grid grid-cols-4 gap-2" id="timeButtons">
                            </div>
                        </div>
                    </div>
                    <div class="grid place-items-end">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/booking2.js') }}"></script>
    @stack('scripts')
</x-user-layout>
