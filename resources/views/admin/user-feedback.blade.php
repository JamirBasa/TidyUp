<x-admin-layout :user="$user" :userrole="$userRole">
    <div class="py-12">
        <div class=" sm:px-6 lg:px-8 flex gap-10">
            <div class="bg-white overflow-hidden sm:rounded-lg flex-[2]">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4 flex items-center justify-between gap-20">
                        <h1 class="font-bold text-neutral-700">User Feedback</h1>
                        <input type="search" name="search" id="search" placeholder="Search for User"
                            class="rounded-full ring-[1px] ring-neutral-300 py-1 px-4 flex-1">
                        <button
                            class="flex items-center justify-between gap-2 hover:bg-neutral-100 py-1 px-2 rounded-md">
                            <svg class="stroke-1 stroke-black size-5" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-neutral-700">Filter</span>
                        </button>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    User
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Message
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        John Doe
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        Need help with my booking
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        15 Jun 2023, 10:30 AM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="underline">View Details.</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        Jane Smith
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        Question about service availability
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        14 Jun 2023, 02:15 PM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="underline">View Details.</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        Mike Johnson
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        Requesting refund information
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        14 Jun 2023, 11:45 AM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="underline">View Details.</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        Sarah Williams
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        Service quality feedback
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        13 Jun 2023, 09:20 AM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="underline">View Details.</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        John Doe
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        Need help with my booking
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        15 Jun 2023, 10:30 AM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="underline">View Details.</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        Jane Smith
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        Question about service availability
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        14 Jun 2023, 02:15 PM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="underline">View Details.</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        Mike Johnson
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        Requesting refund information
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        14 Jun 2023, 11:45 AM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="underline">View Details.</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        Sarah Williams
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        Service quality feedback
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        13 Jun 2023, 09:20 AM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="underline">View Details.</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <x-pagination />
            </div>
            <div class="flex-1">
                <div class="bg-white overflow-hidden sm:rounded-lg p-8">
                    <h2 class="text-lg font-semibold text-gray-700">Summary</h2>
                    <p class="text-sm text-gray-500">Total Feedbacks: 8</p>
                    <p class="text-sm text-gray-500">Positive Feedbacks: 5</p>
                    <p class="text-sm text-gray-500">Negative Feedbacks: 3</p>
                </div>
                <div class="bg-white overflow-hidden sm:rounded-lg p-8 mt-6">
                    <h2 class="text-lg font-semibold text-gray-700">Recent Feedback</h2>
                    <ul class="text-sm text-gray-500">
                        <li class="mb-2">John Doe: Need help with my booking</li>
                        <li class="mb-2">Jane Smith: Question about service availability</li>
                        <li class="mb-2">Mike Johnson: Requesting refund information</li>
                        <li class="mb-2">Sarah Williams: Service quality feedback</li>
                    </ul>
                </div>
                <div class="bg-white overflow-hidden sm:rounded-lg p-8 mt-6">
                    <h2 class="text-lg font-semibold text-gray-700">Feedback Statistics</h2>
                    <div class="flex items-center justify-between mt-4">
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-700">62%</p>
                            <p class="text-sm text-gray-500">Positive</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-700">38%</p>
                            <p class="text-sm text-gray-500">Negative</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
