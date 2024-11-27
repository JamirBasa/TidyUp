<x-user-layout :user="$user" :userrole="$userRole">
    <div class="max-w-screen-lg mx-auto p-8">
        <h1 class="text-4xl font-light font-clash mb-8 text-gray-800">
            Send Your Feedback</h1>
        <form action="" method="POST" class="bg-white shadow-sm rounded-xl p-8 border border-gray-100">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-600 text-sm font-medium mb-2" for="subject">Subject</label>
                <input type="text" name="subject" id="subject"
                    class="w-full border-gray-200 border rounded-lg px-4 py-3 text-gray-700 transition duration-200 ease-in-out focus:border-brand-400 focus:ring-1 focus:ring-brand-100"
                    required>
            </div>
            <div class="mb-8">
                <label class="block text-gray-600 text-sm font-medium mb-2" for="message">Message</label>
                <textarea name="message" id="message" rows="6"
                    class="w-full border-gray-200 border rounded-lg px-4 py-3 text-gray-700 transition duration-200 ease-in-out focus:border-brand-400 focus:ring-1 focus:ring-brand-100"
                    required></textarea>
            </div>
            <button type="submit"
                class="w-full bg-brand-500 text-white px-8 py-4 rounded-lg font-medium hover:bg-brand-600 transition duration-200 ease-in-out shadow-sm hover:shadow-md">
                Submit Feedback
            </button>
        </form>
    </div>
    <div class="mt-16 max-w-screen-lg mx-auto px-8 pb-12">
        <h2 class="text-3xl font-light text-center mb-6 text-gray-800">We Value Your Input</h2>
        <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto leading-relaxed">
            Your feedback is essential in shaping the future of our services. We carefully consider every suggestion and
            insight to ensure we deliver the exceptional experience you deserve.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-4 text-brand-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <h3 class="font-medium text-lg text-center mb-3 text-gray-800">Swift Response</h3>
                <p class="text-gray-600 text-center text-sm leading-relaxed">We respond to all feedback within 24 hours
                    to ensure your voice is heard</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-4 text-brand-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <h3 class="font-medium text-lg text-center mb-3 text-gray-800">Secure & Confidential</h3>
                <p class="text-gray-600 text-center text-sm leading-relaxed">Your privacy is our priority, with advanced
                    security measures in place</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-4 text-brand-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                </svg>
                <h3 class="font-medium text-lg text-center mb-3 text-gray-800">Continuous Growth</h3>
                <p class="text-gray-600 text-center text-sm leading-relaxed">Your insights drive our commitment to
                    excellence and innovation</p>
            </div>
        </div>
    </div>
</x-user-layout>
