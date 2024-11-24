<x-user-layout :user="$user">
    <div class="max-w-screen-lg mx-auto p-8">
        <h1 class="text-4xl font-light font-clash mb-8 text-gray-800">
            Report an Issue</h1>
        <form action="" method="POST" class="bg-white shadow-sm rounded-xl p-8 border border-gray-100">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-600 text-sm font-medium mb-2" for="issue_type">Issue Type</label>
                <select name="issue_type" id="issue_type"
                    class="w-full border-gray-200 border rounded-lg px-4 py-3 text-gray-700 transition duration-200 ease-in-out focus:border-brand-400 focus:ring-1 focus:ring-brand-100"
                    required>
                    <option value="">Select an issue type</option>
                    <option value="bug">Bug Report</option>
                    <option value="technical">Technical Problem</option>
                    <option value="account">Account Issue</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-6">
                <label class="block text-gray-600 text-sm font-medium mb-2" for="subject">Issue Summary</label>
                <input type="text" name="subject" id="subject"
                    class="w-full border-gray-200 border rounded-lg px-4 py-3 text-gray-700 transition duration-200 ease-in-out focus:border-brand-400 focus:ring-1 focus:ring-brand-100"
                    placeholder="Brief description of the issue" required>
            </div>
            <div class="mb-8">
                <label class="block text-gray-600 text-sm font-medium mb-2" for="message">Detailed Description</label>
                <textarea name="message" id="message" rows="6"
                    class="w-full border-gray-200 border rounded-lg px-4 py-3 text-gray-700 transition duration-200 ease-in-out focus:border-brand-400 focus:ring-1 focus:ring-brand-100"
                    placeholder="Please provide as much detail as possible about the issue..." required></textarea>
            </div>
            <button type="submit"
                class="w-full bg-red-500 text-white px-8 py-4 rounded-lg font-medium hover:bg-red-600 transition duration-200 ease-in-out shadow-sm hover:shadow-md">
                Submit Issue Report
            </button>
        </form>
    </div>
    <div class="mt-12 max-w-screen-lg mx-auto px-8 pb-12">
        <h2 class="text-3xl font-light text-center mb-6 text-gray-800">How We Handle Your Reports</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition duration-200">
                <div class="bg-red-100 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <h3 class="font-medium text-lg text-center mb-3 text-gray-800">Quick Assessment</h3>
                <p class="text-gray-600 text-center text-sm leading-relaxed">Issues are reviewed and prioritized within
                    4 hours</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition duration-200">
                <div class="bg-red-100 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg>
                </div>
                <h3 class="font-medium text-lg text-center mb-3 text-gray-800">Immediate Action</h3>
                <p class="text-gray-600 text-center text-sm leading-relaxed">Critical issues are addressed with highest
                    priority</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition duration-200">
                <div class="bg-red-100 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-medium text-lg text-center mb-3 text-gray-800">Resolution Updates</h3>
                <p class="text-gray-600 text-center text-sm leading-relaxed">Regular status updates until your issue is
                    resolved</p>
            </div>
        </div>
    </div>
</x-user-layout>
