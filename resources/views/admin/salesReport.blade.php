@php
    $rows = [
        [
            'transaction_id' => '741037024',
            'services' => 'Pompadour Haircut, Faded Haircut',
            'customer' => 'Myke Tumimbang',
            'vat_no' => '87956621',
            'date' => '09 Oct, 2024',
            'time' => '11:00 AM',
            'price' => 'P2000.00',
        ],
        [
            'transaction_id' => '842105639',
            'services' => 'Beard Trim, Classic Shave',
            'customer' => 'Lara Croft',
            'vat_no' => '56283910',
            'date' => '15 Sep, 2024',
            'time' => '10:30 AM',
            'price' => 'P1500.00',
        ],
        [
            'transaction_id' => '953276148',
            'services' => 'Skin Fade, Line Up',
            'customer' => 'John Doe',
            'vat_no' => '47382910',
            'date' => '22 Aug, 2024',
            'time' => '02:15 PM',
            'price' => 'P1800.00',
        ],
        [
            'transaction_id' => '638294751',
            'services' => 'Buzz Cut, Shape Up',
            'customer' => 'Emma Stone',
            'vat_no' => '38475629',
            'date' => '05 Jul, 2024',
            'time' => '09:45 AM',
            'price' => 'P1200.00',
        ],
        [
            'transaction_id' => '527163849',
            'services' => 'Mohawk, Pompadour',
            'customer' => 'Bruce Wayne',
            'vat_no' => '29485736',
            'date' => '12 Oct, 2024',
            'time' => '01:20 PM',
            'price' => 'P2200.00',
        ],
        [
            'transaction_id' => '816374529',
            'services' => 'Afro, Taper Fade',
            'customer' => 'Clark Kent',
            'vat_no' => '58392017',
            'date' => '30 Sep, 2024',
            'time' => '11:10 AM',
            'price' => 'P2000.00',
        ],
        [
            'transaction_id' => '739182645',
            'services' => 'Crew Cut, Side Part',
            'customer' => 'Diana Prince',
            'vat_no' => '49583726',
            'date' => '18 Nov, 2024',
            'time' => '03:50 PM',
            'price' => 'P1600.00',
        ],
        [
            'transaction_id' => '645829173',
            'services' => 'Undercut, Slick Back',
            'customer' => 'Peter Parker',
            'vat_no' => '38475629',
            'date' => '25 Oct, 2024',
            'time' => '04:00 PM',
            'price' => 'P1900.00',
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
                        <tr id="row{{ $index }}"
                            class="hover:bg-green-50 cursor-pointer transistion-color duratio ease-in-out">

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
    {{-- Modal --}}
    <div id="sales-report-popover"
        class="fixed top-0 bottom-0 left-0 right-0 z-50 backdrop-brightness-50 place-items-center hidden">
        <div id="sales-report-popover-content"
            class="bg-white w-full max-w-screen-xl mx-auto p-10 rounded-lg shadow-lg relative">
            <div>
                <h6 class="font-bold text-4xl">Sales Report</h6>
                <h1 class="font-bold text-4xl"></h1>
                <button id="sales-report-close-btn">
                    <svg class="absolute top-10 right-10" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="border-b pb-6">
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <h6 class="text-neutral-700 uppercase text-sm">Transaction ID</h6>
                        <h1 class="text-xl">741037024</h1>
                    </div>
                    <div>
                        <h6 class="text-neutral-700 uppercase text-sm text-right">Appointment Date & Time</h6>
                        <h1 class="text-xl text-right"> October 10, 2024 - 03:45 pm</h1>
                    </div>
                </div>
                <div class="flex items-start justify-between">
                    <div>
                        <h1 class="text-xl font-bold">Shop Details</h1>
                        <p class="">Dean Wong</p>
                        <p class="text-neutral-700 text-sm">Main Branch</p>
                        <p class="text-neutral-700 text-sm">Fabian Street., Zone 1, Ayala</p>
                        <p class="text-neutral-700 text-sm">deanwong@gmail.com</p>
                        <p class="text-neutral-700 text-sm">09877899876</p>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-right">Customer Details</h1>
                        <p class=" text-right">Myke Tumimbang</p>
                        <p class="text-neutral-700 text-sm text-right">Main Branch</p>
                        <p class="text-neutral-700 text-sm text-right">Fabian Street., Zone 2, Ayala</p>
                        <p class="text-neutral-700 text-sm text-right">myketumimbang@gmail.com</p>
                        <p class="text-neutral-700 text-sm text-right">09877899876</p>
                    </div>
                </div>
            </div>
            <div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Services
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Customer
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Quantity
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Service Price
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Amount
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                    Burst Fade
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    Dave Jamir
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    1
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    P150.00
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    P150.00
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                    Taper Fade Cut
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    Moses Ramos
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    1
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    P150.00
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    P150.00
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 font-bold">
                                    Sub-Total
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    P300.00
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 font-bold">
                                    Vat (12%)
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    P36.00
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 font-bold">
                                    TOTAL (incl. fees and tax)
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    P336.00
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-end mt-4">
                <div class="space-x-2">
                    <button id="download_btn"
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
                    <button id="print_btn"
                        class="inline-flex items-center gap-1 bg-neutral-100 py-2 px-4 rounded-full hover:bg-brand-500 hover:text-white shadow hover:shadow-md hover:scale-105 transition ease-in-out group">
                        <svg class="stroke-black stroke-1 group-hover:stroke-white transition ease-in-out group"
                            width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 6.25V3.125H15V6.25" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15 11.875H5V17.1875H15V11.875Z" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M5 13.75H2.1875V7.5C2.1875 6.80964 2.79378 6.25 3.54167 6.25H16.4583C17.2062 6.25 17.8125 6.80964 17.8125 7.5V13.75H15"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M14.6875 10C15.2053 10 15.625 9.58027 15.625 9.0625C15.625 8.54473 15.2053 8.125 14.6875 8.125C14.1697 8.125 13.75 8.54473 13.75 9.0625C13.75 9.58027 14.1697 10 14.6875 10Z" />
                        </svg>
                        <span class="text-sm">Print Invoice</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/showModal.js') }}"></script>
    <script src="{{ asset('assets/js/admin/salesreport.js') }}"></script>
    @stack('scripts')
</x-admin-layout>
