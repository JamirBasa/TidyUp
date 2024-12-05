<x-user-layout :user="$user" :userrole="$userRole">
    <section class="max-w-7xl mx-auto px-4 py-8">
        <!-- Header Navigation -->
        <div class="flex items-center justify-between mb-6">
            <div class="w-[5rem]">
                <a href="{{ route('book-appointment', ['id' => $shop->id, 'branchId' => $branchId]) }}"
                    class="inline-flex gap-2 items-center border-b border-black p-1">
                    <svg class="size-4 stroke-black stroke-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
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
        <div class="grid place-items-center mb-10">
            <x-process-flow :class1="'brand-500'" :color1="'white'" :class2="'brand-500'" :color2="'white'" :class3="'brand-500'"
                :color3="'white'" :class4="'brand-500'" :color4="'white'" />
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Appointment Details -->
            <div class="bg-white p-8 rounded-2xl shadow-sm">
                <h2 class="text-2xl font-clash font-light mb-8 text-gray-900">Appointment Details</h2>

                <div class="space-y-8">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase">SHOP NAME</h3>
                        <p class="mt-2 text-lg text-gray-900">{{ $shop->shop_name }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase">BRANCH NAME</h3>
                        <p class="mt-2 text-lg text-gray-900">{{ $currentBranch->branch_name }}</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Branch Location</h3>
                        <p class="mt-2 text-lg text-gray-900">{{ $currentBranch->detailed_address }}</p>
                    </div>
                    @php
                        $appointment_name = '';
                        if ($appointmentDetails->appointment_type_id == 1) {
                            $appointment_name = 'Solo Appointment';
                        } elseif ($appointmentDetails->appointment_type_id == 2) {
                            $appointment_name = 'Multiple People Appointment';
                        } elseif ($appointmentDetails->appointment_type_id == 3) {
                            $appointment_name = 'Bulk Appointment';
                        }

                        $formatted_date = date('l, F j, Y', strtotime($appointmentDetails->appointment_date));
                        $formatted_time = date('h:i A', strtotime($appointmentDetails->appointment_time));
                    @endphp

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Service Type</h3>
                        <p class="mt-2 text-lg text-gray-900">{{ $appointment_name }}</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Schedule</h3>
                        <p class="mt-2 text-lg text-gray-900">{{ $formatted_date }}</p>
                        <p class="text-base text-gray-600">{{ $formatted_time }}</p>
                    </div>
                </div>
            </div>

            <!-- Services Summary -->
            <div>
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <h2 class="text-2xl font-clash font-light mb-8 text-gray-900">Services Summary</h2>

                    <div class="space-y-6">
                        <!-- Person 1 -->
                        <div class="pb-6 border-b border-gray-100">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ $appointmentDetails->username }}</h3>
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-base text-gray-900">{{ $appointmentDetails->service_name }}</p>
                                    <p class="text-sm text-gray-500">{{ $appointmentDetails->duration }}</p>
                                </div>
                                <p class="text-base font-medium">Php
                                    {{ number_format((float) $appointmentDetails->total_price, 2) }}</p>
                            </div>
                        </div>

                        {{-- <!-- Person 2 -->
                        <div class="pb-6 border-b border-gray-100">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Person 2</h3>
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-base text-gray-900">Burst Fade</p>
                                    <p class="text-sm text-gray-500">60 minutes</p>
                                </div>
                                <p class="text-base font-medium">Php 1,000.00</p>
                            </div>
                        </div>
                
                        <!-- Person 3 -->
                        <div class="pb-6 border-b border-gray-100">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Person 3</h3>
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-base text-gray-900">Burst Fade</p>
                                    <p class="text-sm text-gray-500">60 minutes</p>
                                </div>
                                <p class="text-base font-medium">Php 1,000.00</p>
                            </div>
                        </div> --}}

                        <!-- Total -->
                        <form action="" method="POST" class="w-full">
                            <div>
                                <div>
                                    <h6 class="font-bold mb-4">Leave a note</h6>
                                </div>
                                <textarea name="note" id="note" cols="30" rows="5"
                                    class="w-full border border-gray-300 rounded-md p-2" placeholder="(Optional)"></textarea>
                                @error('note')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="pt-4">
                                <div class="flex justify-between items-center mb-8">
                                    <h3 class="text-xl font-semibold text-gray-900">Total</h3>
                                    <p class="text-xl font-semibold text-brand-500">Php
                                        {{ number_format((float) $appointmentDetails->total_price, 2) }}</p>
                                </div>

                                @csrf
                                @method('put')
                                <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                                <input type="hidden" name="branch_id" value="{{ $currentBranch->id }}">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="is_successful" value={{ 1 }}>
                                <button type="submit"
                                    class="w-full py-4 px-6 bg-brand-500 text-white rounded-full font-medium hover:bg-brand-600 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2">
                                    Confirm Appointment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stack('scripts')
</x-user-layout>
