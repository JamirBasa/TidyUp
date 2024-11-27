<x-user-layout :user="$user" :userrole="$userRole">
    <div class="max-w-4xl mx-auto py-12">
        <div class="mb-12 text-center">
            <h1 class="font-clash text-4xl font-light text-gray-900 dark:text-white mb-4">Frequently Asked Questions
            </h1>
            <p class="text-gray-600 dark:text-gray-400">Find answers to common questions about TidyUp</p>
        </div>

        <div class="space-y-4" id="accordion-example">
            <!-- FAQ Item 1 -->
            <div class="rounded-lg border border-neutral-200 dark:border-neutral-700">
                <h2 id="accordion-example-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full px-6 py-4 text-lg font-medium text-gray-700 dark:text-gray-200 hover:text-primary-600 focus:outline-none"
                        aria-expanded="true" aria-controls="accordion-example-body-1">
                        <span>What is TidyUp?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-200" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-example-body-1"
                    class="hidden px-6 py-4 border-t border-neutral-200 dark:border-neutral-700">
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Our platform connects you with top-rated professionals, ensuring you receive the highest quality
                        service. Discover the best salon and barbershop services with TidyUp. Book appointments, reserve
                        your spot, and browse for shops easily.
                    </p>
                </div>
            </div>

            <div class="rounded-lg border border-neutral-200 dark:border-neutral-700">
                <h2 id="accordion-example-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full px-6 py-4 text-lg font-medium text-gray-700 dark:text-gray-200 hover:text-primary-600 focus:outline-none"
                        aria-expanded="false" aria-controls="accordion-example-body-2">
                        <span>How do I book an appointment?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-200" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-example-body-2"
                    class="hidden px-6 py-4 border-t border-neutral-200 dark:border-neutral-700">
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Booking an appointment is easy! Simply browse through our listed salons and barbershops, select
                        your preferred service provider, choose an available time slot, and confirm your booking. You'll
                        receive a confirmation email with all the details.
                    </p>
                </div>
            </div>

            <div class="rounded-lg border border-neutral-200 dark:border-neutral-700">
                <h2 id="accordion-example-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full px-6 py-4 text-lg font-medium text-gray-700 dark:text-gray-200 hover:text-primary-600 focus:outline-none"
                        aria-expanded="false" aria-controls="accordion-example-body-3">
                        <span>Can I cancel or reschedule my appointment?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-200" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-example-body-3"
                    class="hidden px-6 py-4 border-t border-neutral-200 dark:border-neutral-700">
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Yes, you can cancel or reschedule your appointment up to 24 hours before the scheduled time.
                        Simply log into your account, go to your bookings, and select the option to modify or cancel
                        your appointment.
                    </p>
                </div>
            </div>

            <div class="rounded-lg border border-neutral-200 dark:border-neutral-700">
                <h2 id="accordion-example-heading-4">
                    <button type="button"
                        class="flex items-center justify-between w-full px-6 py-4 text-lg font-medium text-gray-700 dark:text-gray-200 hover:text-primary-600 focus:outline-none"
                        aria-expanded="false" aria-controls="accordion-example-body-4">
                        <span>How do I list my salon or barbershop on TidyUp?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-200" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-example-body-4"
                    class="hidden px-6 py-4 border-t border-neutral-200 dark:border-neutral-700">
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        To list your business on TidyUp, click on the "For Business" link and complete the registration
                        process. You'll need to provide business details, service offerings, and verification documents.
                        Our team will review your application and get back to you within 48 hours.
                    </p>
                </div>
            </div>

            <div class="rounded-lg border border-neutral-200 dark:border-neutral-700">
                <h2 id="accordion-example-heading-5">
                    <button type="button"
                        class="flex items-center justify-between w-full px-6 py-4 text-lg font-medium text-gray-700 dark:text-gray-200 hover:text-primary-600 focus:outline-none"
                        aria-expanded="false" aria-controls="accordion-example-body-5">
                        <span>How do payments work?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-200" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-example-body-5"
                    class="hidden px-6 py-4 border-t border-neutral-200 dark:border-neutral-700">
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Payments are handled directly between you and the service provider at their establishment.
                        TidyUp does not process any payments - we simply facilitate the booking process. Please
                        check with your selected service provider for their accepted payment methods.
                    </p>
                </div>
            </div>

            <div class="rounded-lg border border-neutral-200 dark:border-neutral-700">
                <h2 id="accordion-example-heading-6">
                    <button type="button"
                        class="flex items-center justify-between w-full px-6 py-4 text-lg font-medium text-gray-700 dark:text-gray-200 hover:text-primary-600 focus:outline-none"
                        aria-expanded="false" aria-controls="accordion-example-body-6">
                        <span>Are there any booking fees?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-200" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-example-body-6"
                    class="hidden px-6 py-4 border-t border-neutral-200 dark:border-neutral-700">
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        TidyUp does not charge any additional booking fees to customers. You only pay for the services
                        you book at the prices listed by the service providers.
                    </p>
                </div>
            </div>

            <div class="rounded-lg border border-neutral-200 dark:border-neutral-700">
                <h2 id="accordion-example-heading-7">
                    <button type="button"
                        class="flex items-center justify-between w-full px-6 py-4 text-lg font-medium text-gray-700 dark:text-gray-200 hover:text-primary-600 focus:outline-none"
                        aria-expanded="false" aria-controls="accordion-example-body-7">
                        <span>What if I have issues with my service?</span>
                        <svg class="w-5 h-5 transform transition-transform duration-200" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-example-body-7"
                    class="hidden px-6 py-4 border-t border-neutral-200 dark:border-neutral-700">
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        If you experience any issues with your service, please contact our customer support team
                        immediately. We have a satisfaction guarantee and will work with you and the service provider to
                        resolve any concerns or issues you may have.
                    </p>
                </div>
            </div>

            <!-- Repeat the same structure for other FAQ items -->
            <!-- Note: For brevity, I'm showing the structure for one item. Apply the same styling to all items -->

        </div>
    </div>

    <script src="{{ asset('assets/js/faqs.js') }}"></script>
</x-user-layout>
