<x-user-layout :user="$user" :userrole="$userRole">
    <section class="max-w-7xl mx-auto px-4 py-8">
        <!-- Header Navigation -->
        <div class="flex items-center justify-between mb-6">
            <div class="w-[5rem]">
                <a href="{{ route('book-appointment') }}"
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
                <a href="{{ route('shop.view') }}" class="inline-flex gap-2 items-center border-b border-black p-1">
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
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Service Provider</h3>
                        <p class="mt-2 text-lg text-gray-900">La Barberia De Jeco</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Location</h3>
                        <p class="mt-2 text-lg text-gray-900">Tetuan Branch, Estrada St. cor Don Toribio Tetuan,
                            Zamboanga City</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Service Type</h3>
                        <p class="mt-2 text-lg text-gray-900">Appointment for Multiple People</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Schedule</h3>
                        <p class="mt-2 text-lg text-gray-900">Saturday, October 5, 2024</p>
                        <p class="text-base text-gray-600">11:00 AM - 6:45 PM Approx.</p>
                    </div>
                </div>
            </div>

            <!-- Services Summary -->
            <div class="bg-white p-8 rounded-2xl shadow-sm">
                <h2 class="text-2xl font-clash font-light mb-8 text-gray-900">Services Summary</h2>

                <div class="space-y-6">
                    <!-- Person 1 -->
                    <div class="pb-6 border-b border-gray-100">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Person 1</h3>
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-base text-gray-900">Regular Haircut</p>
                                <p class="text-sm text-gray-500">30 minutes</p>
                            </div>
                            <p class="text-base font-medium">Php 200.00</p>
                        </div>
                    </div>

                    <!-- Person 2 -->
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
                    </div>

                    <!-- Total -->
                    <div class="pt-4">
                        <div class="flex justify-between items-center mb-8">
                            <h3 class="text-xl font-semibold text-gray-900">Total</h3>
                            <p class="text-xl font-semibold text-brand-500">Php 2,200.00</p>
                        </div>

                        <a href="{{ route('appointments') }}" class="block">
                            <button
                                class="w-full py-4 px-6 bg-brand-500 text-white rounded-full font-medium hover:bg-brand-600 transition-colors focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2">
                                Confirm Appointment
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stack('scripts')
</x-user-layout>
