<x-admin-layout :user="$user" :userrole="$userRole">
    <div class="">
        <div class="">
            <div class="bg-white overflow-hidden sm:rounded-lg mb-6">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4 flex items-center justify-between gap-20">
                        <h1 class="font-bold text-neutral-700">Manage Users</h1>
                        <input type="search" name="search" id="search" placeholder="Search for shops"
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
                                    Username
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
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
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @php
                                $index = 0;
                            @endphp
                            @foreach ($users as $user)
                                @php
                                    $index = $loop->index;
                                @endphp
                                <tr>
                                    {{-- index --}}
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $index + 1 }}
                                        </div>
                                    </td>
                                    {{-- Username --}}
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ $user->username }}
                                        </div>
                                    </td>
                                    {{-- Email --}}
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ $user->email }}
                                        </div>
                                    </td>
                                    {{-- Name --}}
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            @if ($user->first_name == null && $user->last_name == null)
                                                <span class="text-red-500">No Name Set yet</span>
                                            @else
                                                {{ $user->first_name }} {{ $user->last_name }}
                                            @endif
                                        </div>
                                    </td>
                                    {{-- Date Registered --}}
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button class="text-sm text-gray-500">
                                            <span class="">{{ $user->created_at }}</span>
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                            {{ $user->last_login_at && now()->diffInMinutes($user->last_login_at) < 15
                                                ? 'bg-green-100 text-green-800'
                                                : 'bg-red-100 text-red-800' }}">
                                            {{ $user->last_login_at && now()->diffInMinutes($user->last_login_at) < 15 ? 'Online' : 'Offline' }}
                                        </span>
                                    </td>
                                    {{-- Status --}}
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            <a href="" class="text-indigo-600 hover:text-indigo-900">View</a>

                                        </div>
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
                    <h2 class="text-lg font-semibold text-gray-700">User Summary</h2>
                    <p class="text-sm text-gray-500">Total Users: {{ $users->count() }}</p>
                    <p class="text-sm text-gray-500">Verified Users:
                        {{ $users->where('email_verified_at', '!=', null)->count() }}</p>
                    <p class="text-sm text-gray-500">Unverified Users:
                        {{ $users->where('email_verified_at', null)->count() }}</p>
                </div>
                <div class="bg-white overflow-hidden sm:rounded-lg p-8 ">
                    <h2 class="text-lg font-semibold text-gray-700">Recent Registrations</h2>
                    <ul class="text-sm text-gray-500">
                        @foreach ($users->sortByDesc('created_at')->take(4) as $user)
                            <li class="mb-2">
                                {{ $user->username }} - {{ $user->email }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-white overflow-hidden sm:rounded-lg p-8 ">
                    <h2 class="text-lg font-semibold text-gray-700">User Statistics</h2>
                    <div class="flex items-center justify-between mt-4">
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-700">
                                {{ round(($users->where('email_verified_at', '!=', null)->count() / $users->count()) * 100) }}%
                            </p>
                            <p class="text-sm text-gray-500">Verified</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-gray-700">
                                {{ round(($users->where('email_verified_at', null)->count() / $users->count()) * 100) }}%
                            </p>
                            <p class="text-sm text-gray-500">Unverified</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>


<!-- Inside the foreach loop, add: -->
