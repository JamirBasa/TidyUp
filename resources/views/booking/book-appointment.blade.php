<x-user-layout :user="$user" :userrole="$userRole">
    <section>
        <div class="flex items-center justify-between mb-6">
            <div class="w-[5rem]">
                <a href="{{ url()->previous() }}" class="inline-flex gap-2 items-center border-b border-black p-1">
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
            <x-process-flow :class1="'brand-500'" :color1="'white'" />
        </div>
        <div class="grid grid-cols-7 gap-10">
            <div class="col-span-2 bg-white p-6 rounded-lg shadow-sm">
                <div class="mb-4">
                    <img class="object-cover rounded-lg h-48 w-full" src="{{ asset('storage/' . $firstImage->path) }}"
                        alt="">
                </div>
                <div class="space-y-2 pb-2 mb-4 border-b border-neutral-200">
                    {{-- Shop Name --}}
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
                {{-- Continue Button --}}

                <form method="POST" action="">
                    @csrf
                    {{-- Hidden Radio Buttons --}}
                    @foreach ($currentBranchAppointmentTypes as $appointmentType)
                        <input class="sr-only" type="radio" name="appointment_type_id" id="radio"
                            value="{{ $appointmentType->id }}">
                    @endforeach
                    <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                    <input type="hidden" name="branch_id" value="{{ $currentBranch->id }}">
                    <button type="submit" class="p-3 bg-brand-500 text-white rounded-full w-full">Continue</button>
                </form>
            </div>
            <div class="col-span-5 ">
                <div class="mb-4">
                    <h1 class="text-2xl">Please select an appointment option</h1>
                </div>
                <div class="grid gap-4">
                    @foreach ($currentBranchAppointmentTypes as $appointmentType)
                        <button onclick="handleButtonClick(this)" class="w-full">
                            <div
                                class="border-2 p-4 rounded-lg hover:outline hover:outline-neutral-700 flex items-center gap-4 group transition-colors ease-in-out">
                                <div>
                                    @if ($appointmentType->appointment_type === 'Solo Appointment')
                                        <svg id="svg"
                                            class="stroke-2 stroke-neutral-400 size-20 group-hover:stroke-neutral-700 transition-colors ease-in-out"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 19C18 16.7909 15.3137 15 12 15C8.68629 15 6 16.7909 6 19M12 12C9.79086 12 8 10.2091 8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8C16 10.2091 14.2091 12 12 12Z"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    @elseif ($appointmentType->appointment_type === 'Multiple People Appointment')
                                        <svg id="svg"
                                            class="stroke-2 stroke-neutral-400 size-20 group-hover:stroke-neutral-700 transition-colors ease-in-out"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 19.9999C21 18.2583 19.3304 16.7767 17 16.2275M15 20C15 17.7909 12.3137 16 9 16C5.68629 16 3 17.7909 3 20M15 13C17.2091 13 19 11.2091 19 9C19 6.79086 17.2091 5 15 5M9 13C6.79086 13 5 11.2091 5 9C5 6.79086 6.79086 5 9 5C11.2091 5 13 6.79086 13 9C13 11.2091 11.2091 13 9 13Z"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    @elseif ($appointmentType->appointment_type === 'Bulk Appointment')
                                        <svg id="svg"
                                            class="stroke-2 stroke-neutral-400 size-20 group-hover:stroke-neutral-700 transition-colors ease-in-out"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 20C17 18.3431 14.7614 17 12 17C9.23858 17 7 18.3431 7 20M21 17.0004C21 15.7702 19.7659 14.7129 18 14.25M3 17.0004C3 15.7702 4.2341 14.7129 6 14.25M18 10.2361C18.6137 9.68679 19 8.8885 19 8C19 6.34315 17.6569 5 16 5C15.2316 5 14.5308 5.28885 14 5.76389M6 10.2361C5.38625 9.68679 5 8.8885 5 8C5 6.34315 6.34315 5 8 5C8.76835 5 9.46924 5.28885 10 5.76389M12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    @endif
                                </div>
                                <div class="space-y-2">
                                    <h1 class="text-xl text-left">{{ $appointmentType->appointment_type }}</h1>
                                    <p class="text-sm text-left">{{ $appointmentType->description }}</p>
                                </div>
                            </div>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/book.js') }}"></script>
    <script>
        function handleButtonClick(button) {
            // Remove outline from all buttons
            document.querySelectorAll("button div").forEach((div) => {
                div.classList.remove("outline", "outline-neutral-700");
            });
            document.querySelectorAll("button svg").forEach((svg) => {
                svg.classList.remove("stroke-neutral-700");
            });
            // Get the corresponding radio button based on button index
            const radioButtons = document.querySelectorAll(
                'input[name="appointment_type_id"]'
            );
            const appointmentButtons = Array.from(
                document.querySelectorAll('button[onclick="handleButtonClick(this)"]')
            );
            const index = appointmentButtons.indexOf(button);
            if (index >= 0 && index < radioButtons.length) {
                radioButtons[index].checked = true;
            }

            // Add outline to clicked button
            button.querySelector("div").classList.add("outline", "outline-neutral-700");
            button.querySelector("svg").classList.add("stroke-neutral-700");
        }
    </script>
    @stack('scripts')
</x-user-layout>
