@php
    $rows = [
        [
            'transaction_id' => '741037024',
            'services' => 'Pompadour Haircut, Faded Haircut',
            'customer' => 'Myke Tumimbang',
            'vat_no' => '87956621',
            'date' => '09 Oct, 2024',
            'time' => '11:00 AM',
            'price' => '₱2000.00',
        ],
        [
            'transaction_id' => '842105639',
            'services' => 'Beard Trim, Classic Shave',
            'customer' => 'Lara Croft',
            'vat_no' => '56283910',
            'date' => '15 Sep, 2024',
            'time' => '10:30 AM',
            'price' => '₱1500.00',
        ],
        [
            'transaction_id' => '953276148',
            'services' => 'Skin Fade, Line Up',
            'customer' => 'John Doe',
            'vat_no' => '47382910',
            'date' => '22 Aug, 2024',
            'time' => '02:15 PM',
            'price' => '₱1800.00',
        ],
        [
            'transaction_id' => '638294751',
            'services' => 'Buzz Cut, Shape Up',
            'customer' => 'Emma Stone',
            'vat_no' => '38475629',
            'date' => '05 Jul, 2024',
            'time' => '09:45 AM',
            'price' => '₱1200.00',
        ],
        [
            'transaction_id' => '527163849',
            'services' => 'Mohawk, Pompadour',
            'customer' => 'Bruce Wayne',
            'vat_no' => '29485736',
            'date' => '12 Oct, 2024',
            'time' => '01:20 PM',
            'price' => '₱2200.00',
        ],
        [
            'transaction_id' => '816374529',
            'services' => 'Afro, Taper Fade',
            'customer' => 'Clark Kent',
            'vat_no' => '58392017',
            'date' => '30 Sep, 2024',
            'time' => '11:10 AM',
            'price' => '₱2000.00',
        ],
        [
            'transaction_id' => '739182645',
            'services' => 'Crew Cut, Side Part',
            'customer' => 'Diana Prince',
            'vat_no' => '49583726',
            'date' => '18 Nov, 2024',
            'time' => '03:50 PM',
            'price' => '₱1600.00',
        ],
        [
            'transaction_id' => '645829173',
            'services' => 'Undercut, Slick Back',
            'customer' => 'Peter Parker',
            'vat_no' => '38475629',
            'date' => '25 Oct, 2024',
            'time' => '04:00 PM',
            'price' => '₱1900.00',
        ],
    ];
    $index = 0;
@endphp
<x-admin-layout :user="$user" :userrole="$userRole">
    <section class="space-y-4">
        <div class="bg-white rounded-xl w-full p-6">
            <div class="flex items-center justify-between">
                <h1 class="font-bold">Sales Report</h1>
                <button class="flex items-center justify-between gap-2 hover:bg-neutral-100 py-1 px-2 rounded-md">
                    <svg class="stroke-1 stroke-black size-5" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span class="text-neutral-700">Filter</span>
                </button>
            </div>
        </div>
        <div class="bg-white rounded-xl w-full p-6">
            <table class="min-w-full divide-y divide-gray-200 rounded-lg overflow-hidden shadow">
                <thead class="bg-gray-50">
                    <tr>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Transaction ID
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            services
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Customer
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            vat no.
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            time
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Price
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($rows as $row)
                        @php
                            $index = $loop->index;
                        @endphp
                        <tr id="row{{ $index }}">

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $row['transaction_id'] }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{ $row['services'] }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{ $row['customer'] }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{ $row['vat_no'] }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{ $row['date'] }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{ $row['time'] }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{ $row['price'] }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap flex items-center justify-between gap-2">
                                <button id="download_btn{{ $index }}"
                                    class="inline-flex items-center gap-1 bg-neutral-100 py-2 px-4 rounded-full hover:bg-brand-500 hover:text-white shadow hover:shadow-md hover:scale-105 transition ease-in-out group">
                                    <svg class="stroke-1 stroke-black group-hover:stroke-white transition ease-in-out group"
                                        width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.71875 8.59375L10 11.8741L13.2812 8.59375" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10 3.125V11.8727" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M16.875 11.875V16.25C16.875 16.4158 16.8092 16.5747 16.6919 16.6919C16.5747 16.8092 16.4158 16.875 16.25 16.875H3.75C3.58424 16.875 3.42527 16.8092 3.30806 16.6919C3.19085 16.5747 3.125 16.4158 3.125 16.25V11.875"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="text-sm">Download</span>
                                </button>
                                <button id="three_dots_btn{{ $index }}"
                                    class="grid place-items-center size-9 bg-neutral-100 rounded-full hover:bg-brand-500 hover:text-white shadow hover:shadow-md hover:scale-105 transition ease-in-out group">
                                    <svg class="stroke-1 stroke-black fill-black group-hover:stroke-white group-hover:fill-white transition ease-in-out group"
                                        width="4" height="16" viewBox="0 0 4 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 1.25C2.41421 1.25 2.75 1.58579 2.75 2C2.75 2.41421 2.41421 2.75 2 2.75C1.58579 2.75 1.25 2.41421 1.25 2C1.25 1.58579 1.58579 1.25 2 1.25ZM2 7.25C2.41421 7.25 2.75 7.58579 2.75 8C2.75 8.41421 2.41421 8.75 2 8.75C1.58579 8.75 1.25 8.41421 1.25 8C1.25 7.58579 1.58579 7.25 2 7.25ZM2 13.25C2.41421 13.25 2.75 13.5858 2.75 14C2.75 14.4142 2.41421 14.75 2 14.75C1.58579 14.75 1.25 14.4142 1.25 14C1.25 13.5858 1.58579 13.25 2 13.25Z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <x-pagination />
            </div>
        </div>
    </section>
</x-admin-layout>
