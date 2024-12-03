@php
$rows = [
    [
        'Id' => '01',
        'Username' => '@SubaruNatsuki',
        'Date_Restricted' => '09/10/2024',
        'Duration' => '7 days',
        'Commited_by' => 'Emilia',

    ],
    [
        'Id' => '02',
        'Username' => '@SubaruNatsuki',
        'Date_Restricted' => '09/15/2024',
        'Duration' => '7 days',
        'Commited_by' => 'Rem',

    ],
    [
        'Id' => '03',
        'Username' => '@SubaruNatsuki',
        'Date_Restricted' => '09/22/2024',
        'Duration' => '7 days',
        'Commited_by' => 'Ram',

    ],
    [
        'Id' => '04',
        'Username' => '@SubaruNatsuki',
        'Date_Restricted' => '09/05/2024',
        'Duration' => '7 days',
        'Commited_by' => 'Beatrice',

    ],
    [
        'Id' => '05',
        'Username' => '@SubaruNatsuki',
        'Date_Restricted' => '09/12/2024',
        'Duration' => '7 days',
        'Commited_by' => 'Roswaal',

    ],
    [
        'Id' => '06',
        'Username' => '@SubaruNatsuki',
        'Date_Restricted' => '09/30/2024',
        'Duration' => '7 days',
        'Commited_by' => 'Echidna',

    ],
    [
        'Id' => '07',
        'Username' => '@SubaruNatsuki',
        'Date_Restricted' => '09/18/2024',
        'Duration' => '7 days',
        'Commited_by' => 'Garfiel',

    ],
    [
        'Id' => '08',
        'Username' => '@SubaruNatsuki',
        'Date_Restricted' => '09/25/2024',
        'Duration' => '7 days',
        'Commited_by' => 'Otto',
    ],
];
    $index = 0;
@endphp
<x-admin-layout :user="$user" :userrole="$userRole">
    <section class="space-y-4">
        <div class="bg-white rounded-xl w-full p-6">
            <div class="flex flex-col">
                <h1 class="font-bold text-3xl">Restricted Accounts</h1>
                <div class="flex items-center justify-between mt-4">
                   <input type="search" placeholder="Search" class="h-10 w-11/12 py-1 pl-10 pr-2 rounded-full border-neutral-300 border-2 text-black">
                    <button class="flex items-center gap-2 hover:bg-neutral-100 py-1 px-2 rounded-md">
                        <svg class="stroke-1 stroke-black size-5" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <span class="text-neutral-700">Sort by</span>
                    </button>
                </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl w-full p-6">
            <table class="min-w-full divide-y divide-gray-200 rounded-lg overflow-hidden shadow">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-base font-semibold text-gray-500 uppercase tracking-wider">ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-base font-semibold text-gray-500 uppercase tracking-wider">Username</th>
                        <th scope="col" class="px-6 py-3 text-left text-base font-semibold text-gray-500 uppercase tracking-wider">Committed By</th>
                        <th scope="col" class="px-6 py-3 text-left text-base font-semibold text-gray-500 uppercase tracking-wider">Duration</th>
                        <th scope="col" class="px-6 py-3 text-left text-base font-semibold text-gray-500 uppercase tracking-wider">Date Restricted</th>
                        <th scope="col" class="px-14 py-3 text-left text-base font-semibold text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($rows as $row)
                    @php
                        $index = $loop->index;
                    @endphp
                    <tr id="row{{ $index }}">
                        <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $row['Id'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $row['Username'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $row['Commited_by'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-red-500 text-sm">{{ $row['Duration'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $row['Date_Restricted'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap flex items-center justify-between gap-2">
                            <button id="lift_restriction_btn{{ $index }}" class="inline-flex items-center gap-1 bg-neutral-100 py-2 px-4 rounded-full hover:bg-brand-500 hover:text-white shadow hover:shadow-md hover:scale-105 transition ease-in-out group">
                                <span class="text-sm">Lift Restriction</span>
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

