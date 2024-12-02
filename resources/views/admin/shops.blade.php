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
                                            <span class=" ">Processed</span>
                                        </button>
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
</x-admin-layout>
