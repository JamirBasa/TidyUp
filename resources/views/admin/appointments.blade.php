<x-admin-layout :user="$user" :userrole="$userRole">
    <div class="">
        <div class="flex gap-10">
            <div class="flex-1">
                <div class="bg-white overflow-hidden sm:rounded-lg p-8">
                    <h2 class="text-lg font-semibold text-gray-700">Appointments Summary</h2>
                    <p class="text-sm text-gray-500">Total Appointments: 24</p>
                    <p class="text-sm text-gray-500">Active Appointments: 8</p>
                    <p class="text-sm text-gray-500">Completed Appointments: 12</p>
                    <p class="text-sm text-gray-500">Cancelled Appointments: 4</p>
                </div>
                <div class="bg-white overflow-hidden sm:rounded-lg p-8 mt-6">
                    <h2 class="text-lg font-semibold text-gray-700">Recent Appointments</h2>
                    <ul class="text-sm text-gray-500">
                        <li class="mb-2">John Doe - Haircut (10:30 AM)</li>
                        <li class="mb-2">Jane Smith - Hair Color (2:00 PM)</li>
                        <li class="mb-2">Mike Johnson - Beard Trim (11:00 AM)</li>
                        <li class="mb-2">Sarah Williams - Hair Treatment (4:00 PM)</li>
                    </ul>
                </div>
                <div class="bg-white overflow-hidden sm:rounded-lg p-8 mt-6">
                    <h2 class="text-lg font-semibold text-gray-700">Appointment Status</h2>
                    <div class="flex items-center justify-between mt-4">
                        <div class="text-center">
                            <p class="text-2xl font-bold text-green-700">33%</p>
                            <p class="text-sm text-gray-500">Active</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-blue-700">50%</p>
                            <p class="text-sm text-gray-500">Completed</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-red-700">17%</p>
                            <p class="text-sm text-gray-500">Cancelled</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-white overflow-hidden sm:rounded-lg flex-[2]">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-4 flex items-center justify-between gap-20">
                            <h1 class="font-bold text-neutral-700">Appointments</h1>
                            <input type="search" name="search" id="search" placeholder="Search for User"
                                class="rounded-full ring-[1px] ring-neutral-300 py-1 px-4 flex-1">
                            <button
                                class="flex items-center justify-between gap-2 hover:bg-neutral-100 py-1 px-2 rounded-md">
                                <svg class="stroke-1 stroke-black size-5" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        Shop Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Branch Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Customer Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Appointment Date & Time
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
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
                                            Gupit ni John
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Main Branch
                                        </div>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            John Doe
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            15 Jun 2023, 10:30 AM
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            <span class="bg-green-100 text-green-800 rounded-full px-4">Active</span>
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
                                            Haircut Haven
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Downtown Branch
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Jane Smith
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            20 Jun 2023, 2:00 PM
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            <span class="bg-yellow-100 text-yellow-800 rounded-full px-4">Pending</span>
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
                                            Style Studio
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Uptown Branch
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Mike Johnson
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            25 Jun 2023, 11:00 AM
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            <span class="bg-red-100 text-red-800 rounded-full px-4">Cancelled</span>
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
                                            Beauty Bliss
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Eastside Branch
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Sarah Williams
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            30 Jun 2023, 4:00 PM
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            <span class="bg-blue-100 text-blue-800 rounded-full px-4">Completed</span>
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
                                            Gupit ni John
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Main Branch
                                        </div>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            John Doe
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            15 Jun 2023, 10:30 AM
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            <span class="bg-green-100 text-green-800 rounded-full px-4">Active</span>
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
                                            Haircut Haven
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Downtown Branch
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Jane Smith
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            20 Jun 2023, 2:00 PM
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            <span
                                                class="bg-yellow-100 text-yellow-800 rounded-full px-4">Pending</span>
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
                                            Style Studio
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Uptown Branch
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Mike Johnson
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            25 Jun 2023, 11:00 AM
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            <span class="bg-red-100 text-red-800 rounded-full px-4">Cancelled</span>
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
                                            Beauty Bliss
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Eastside Branch
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Sarah Williams
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            30 Jun 2023, 4:00 PM
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            <span class="bg-blue-100 text-blue-800 rounded-full px-4">Completed</span>
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
            </div>
        </div>
    </div>
</x-admin-layout>
