<x-admin-layout :user="$user" :userrole="$userRole">
    <div class="">
        <div class="">
            <div class="bg-white overflow-hidden sm:rounded-lg mb-6">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4 flex items-center justify-between gap-20">
                        <h1 class="font-bold text-neutral-700">Shop Registration</h1>
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
                                    No.
                                </th>
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
                                    Shop Owner
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categories
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date Registered
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @php
                            $index = 0;
                            @endphp
                            @foreach ($shops as $shop)
                            @php
                            $shopBranch = collect($shopBranches)
                            ->where('shop_id', $shop->id)
                            ->first();
                            $shopBranches = collect($shopBranches)
                            ->where('shop_id', $shop->id)
                            ->all();
                            $shopBranchCategories = $branchCategory
                            ->filter(fn($item) => $item->shop_id === $shop->id)
                            ->unique('category_name');
                            $index = $loop->index;
                            @endphp
                            <tr>
                                {{-- index --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $index + 1 }}
                                    </div>
                                </td>
                                {{-- Shop Name --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $shop->shop_name }}
                                    </div>
                                </td>
                                {{-- Branch Name --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $shop->branch_name }}
                                    </div>
                                </td>
                                {{-- Shop Owner --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        {{ $shop->shop_owner }}
                                    </div>
                                </td>
                                {{-- Categories --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="">
                                            @foreach ($shopBranchCategories as $category)
                                            {{ $category->category_name }}
                                            @if (!$loop->last)
                                            ,
                                            @endif
                                            @endforeach
                                        </span>
                                    </button>
                                </td>
                                {{-- Date Registered --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-gray-500">
                                        <span class="">{{ $shop->created_at }}</span>
                                    </button>
                                </td>
                                {{-- Status --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button
                                        class="text-sm font-bold bg-ongoing-main text-ongoing-light px-3 rounded-full">
                                        <span class=" ">{{ $shop->status ?? 'For Verification' }}</span>
                                    </button>
                                </td>
                                {{-- Actions --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-sm text-green-800 dark:text-green-300" onclick="openModal('{{ $shop->shop_name }}', '{{ $shop->branch_name }}', '{{ $shop->shop_owner }}', '{{ $shopBranchCategories->pluck('category_name')->implode(', ') }}', '{{ $shop->created_at }}', '{{ $shop->status ?? 'For Verification' }}')">View Details</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <x-pagination />
            </div>
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white overflow-hidden sm:rounded-lg p-8">
                    <h2 class="text-lg font-semibold text-gray-700">Shop Summary</h2>
                    <p class="text-sm text-gray-500">Total Shops: {{ $shops->count() }}</p>
                    <p class="text-sm text-gray-500">Active Shops: {{ $shops->where('status', 'active')->count() }}</p>
                    <p class="text-sm text-gray-500">Pending Approval: {{ $shops->where('status', 'pending')->count() }}
                    </p>
                </div>
                <div class="bg-white overflow-hidden sm:rounded-lg p-8 ">
                    <h2 class="text-lg font-semibold text-gray-700">Recent Registrations</h2>
                    <ul class="text-sm text-gray-500">
                        @foreach ($shops->sortByDesc('created_at')->take(4) as $shop)
                        <li class="mb-2">{{ $shop->shop_name }}: {{ $shop->branch_name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-white overflow-hidden sm:rounded-lg p-8 ">
                    <h2 class="text-lg font-semibold text-gray-700">Shop Statistics</h2>
                    <div class="flex items-center justify-between mt-4">
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-700">
                                {{ round(($shops->where('status', 'active')->count() / $shops->count()) * 100) }}%
                            </p>
                            <p class="text-sm text-gray-500">Active</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-700">
                                {{ round(($shops->where('status', 'pending')->count() / $shops->count()) * 100) }}%
                            </p>
                            <p class="text-sm text-gray-500">Pending</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="detailsModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-1/2 shadow-lg rounded-md bg-white">
            <button class="absolute top-0 right-0 mt-5 mr-7 text-gray-500 hover:text-gray-700 text-5xl" onclick="closeModal()">
                &times;
            </button>
            <div class="mt-3 text-left relative">
                <h3 class="text-2xl leading-6 font-medium text-gray-900 ml-2">Shop Details</h3>
                <div class="mt-2 px-7 py-3">
                    <form id="shopDetailsForm">
                        <div class="mb-4">
                            <label for="shopName" class="block text-lg font-medium text-gray-700 text-left">Shop Name</label>
                            <input type="text" id="shopName" name="shopName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="branchName" class="block text-lg font-medium text-gray-700 text-left">Branch Name</label>
                            <input type="text" id="branchName" name="branchName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="shopOwner" class="block text-lg font-medium text-gray-700 text-left">Shop Owner</label>
                            <input type="text" id="shopOwner" name="shopOwner" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="categories" class="block text-lg font-medium text-gray-700 text-left">Categories</label>
                            <input type="text" id="categories" name="categories" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="dateRegistered" class="block text-lg font-medium text-gray-700 text-left">Date Registered</label>
                            <input type="text" id="dateRegistered" name="dateRegistered" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-lg font-medium text-gray-700 text-left">Status</label>
                            <input type="text" id="status" name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="documentImages" class="block text-lg font-medium text-gray-700 text-left">Document Images for Verification</label>
                            <div class="mt-2 grid grid-cols-3 gap-4">
                                <img src="path/to/document1.jpg" alt="Document 1" class="w-full h-auto border rounded-md shadow-sm">
                                <img src="path/to/document2.jpg" alt="Document 2" class="w-full h-auto border rounded-md shadow-sm">
                                <img src="path/to/document3.jpg" alt="Document 3" class="w-full h-auto border rounded-md shadow-sm">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="flex justify-end items-end h-full px-4 py-3">
                    <div class="flex flex-row space-x-2">
                        <button id="declineButton" class="px-2 py-1 bg-red-500 text-white text-m font-large rounded-md w-32 shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                            Decline
                        </button>

                        <button id="confirmButton" class="px-2 py-1 bg-green-500 text-white text-m font-large rounded-md w-32 shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                            Confirm
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function openModal(shopName, branchName, shopOwner, categories, dateRegistered, status) {
            document.getElementById('shopName').value = shopName;
            document.getElementById('branchName').value = branchName;
            document.getElementById('shopOwner').value = shopOwner;
            document.getElementById('categories').value = categories;
            document.getElementById('dateRegistered').value = dateRegistered;
            document.getElementById('status').value = status;
            document.getElementById('detailsModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('detailsModal').classList.add('hidden');
        }

        document.getElementById('confirmButton').addEventListener('click', function() {
            // Handle confirm action
            alert('Shop confirmed');
            closeModal();
        });

        document.getElementById('declineButton').addEventListener('click', function() {
            // Handle decline action
            alert('Shop declined');
            closeModal();
        });
    </script>
</x-admin-layout>