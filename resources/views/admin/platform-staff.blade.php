@php
    $staffs = [
        [
            'name' => 'Dave Jamir Basa',
            'email' => 'basadavejamir@gmail.com',
            'position' => 'Platform Administrator',
            'role' => 'Project Manager',
            'contact_number' => '09268396163',
            'address' => 'Putik, Lunzuran Rd, Zamboanga City',
            'dp_path' => 'assets/images/images/jamir.jpg',
            'external_link' => 'www.facebook.com/jamirbasa',
            'hired_at' => '2021-08-01',
            'status' => 'Active',
            'office_location' => 'N/A',
            'department' => 'N/A',
        ],
        [
            'name' => 'Carl Mosses Ramos',
            'email' => 'mossesramos@gmail.com',
            'position' => 'Platform Administrator',
            'role' => 'Quality Assurance ',
            'contact_number' => '09995396469',
            'address' => 'Guiwan, Zamboanga City',
            'dp_path' => 'assets/images/images/mosses.jpg',
            'external_link' => 'www.facebook.com/mossesramos',
            'hired_at' => '2021-08-01',
            'status' => 'Active',
            'office_location' => 'N/A',
            'department' => 'N/A',
        ],
        [
            'name' => 'Paul Daniel Ojales',
            'email' => 'paulojales@gmail.com',
            'position' => 'Platform Administrator',
            'role' => 'Data Analyst',
            'contact_number' => '09270180602',
            'address' => 'San Jose Gusu, Zamboanga City',
            'dp_path' => 'assets/images/images/paul.jpg',
            'external_link' => 'www.facebook.com/pauldaniel',
            'hired_at' => '2021-08-01',
            'status' => 'Active',
            'office_location' => 'N/A',
            'department' => 'N/A',
        ],
        [
            'name' => 'Art Michael Cadiz',
            'email' => 'Mc1791798@gmail.com',
            'position' => 'Platform Administrator',
            'role' => 'Lead Developer',
            'contact_number' => '09931430542',
            'address' => 'Ayala, Zamboanga City',
            'dp_path' => 'assets/images/images/art.jpg',
            'external_link' => 'www.facebook.com/artmichael',
            'hired_at' => '2021-08-01',
            'status' => 'Active',
            'office_location' => 'N/A',
            'department' => 'N/A',
        ],
        [
            'name' => 'Gioiel Guevarra',
            'email' => 'guevarragioiel@gmail.com',
            'position' => 'Platform Administrator',
            'role' => 'UI/UX Designer',
            'contact_number' => '09493982593',
            'address' => 'Culianan, Zamboanga City',
            'dp_path' => 'assets/images/images/gioiel.jpg',
            'external_link' => 'www.facebook.com/gioiel',
            'hired_at' => '2021-08-01',
            'status' => 'Active',
            'office_location' => 'N/A',
            'department' => 'N/A',
        ],
    ];
@endphp

<x-admin-layout :user="$user" :userrole="$userRole">

    <div class="grid grid-cols-3 gap-4 mb-4">

        {{-- First Column --}}
        <div class="relative">
            {{-- Admin Basic Information Card --}}
            <div class="flex flex-col bg-white px-7 py-7 rounded-lg shadow-sm mb-4 gap-8 justify-center">

                {{-- Admin Name, Role, Profile Picture --}}
                <div class="flex gap-8 w-full px-7">
                    <img class="object-cover size-24 rounded-full" src="{{ asset($staffs[0]['dp_path']) }}">
                    <div class="flex flex-col justify-center">
                        <h2 class="text-2xl font-bold">{{ $staffs[0]['name'] }}</h2>
                        <h6>{{ $staffs[0]['role'] }}</h6>
                    </div>
                </div>

                {{-- Change Profile Picture Button --}}
                <div class="w-full px-7">
                    <button id="editManager"
                        class="bg-brand-500 text-white py-4 px-6 rounded-full hover:shadow-md hover:scale-105 transition-transform ease-in-out w-full">
                        Change Profile Picture
                    </button>
                </div>

            </div>

            {{-- Staff List --}}
            <div class="flex flex-col bg-white px-7 py-7 rounded-lg shadow-sm relative justify-center">
                <h1 class="text-4xl font-bold mb-4">Staff List</h1>

                {{-- Staff --}}
                @foreach ($staffs as $staff)
                    <div class="flex gap-4 px-4 py-4 rounded-lg hover:bg-neutral-100 cursor-pointer">
                        <div>
                            <img class="object-cover size-24 rounded-full" src="{{ asset($staff['dp_path']) }}">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h2 class="text-lg font-bold">{{ $staff['name'] }}</h2>
                            <h6>{{ $staff['role'] }}</h6>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>



        {{-- Second Column --}}
        <div class="flex flex-col bg-white px-7 py-7 rounded-lg shadow-sm relative col-span-2 justify-center">

            {{-- General Information --}}
            <div class="py-4 px-4">
                <h1 class="text-4xl font-bold mb-4">General Information</h1>

                <div class="flex w-full gap-4 px-4 py-4">
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Full Name</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['name'] }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Email</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['email'] }}
                        </div>
                    </div>
                </div>

                <div class="flex w-full gap-4 px-4 py-4">
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Position</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['position'] }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Role</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['role'] }}
                        </div>
                    </div>
                </div>

                <div class="flex w-full gap-4 px-4 py-4">
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Contact Number</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['contact_number'] }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Home Address</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['address'] }}
                        </div>
                    </div>
                </div>

            </div>

            {{-- Separator --}}
            <hr class="my-8 border-t-2 border-neutral-200">


            {{-- Additional Information --}}
            <div class="py-4 px-4">
                <h1 class="text-4xl font-bold mb-4">Additional Information</h1>

                <div class="flex w-full gap-4 px-4 py-4">
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">External Link</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['external_link'] }}
                        </div>
                    </div>
                </div>

                <div class="flex w-full gap-4 px-4 py-4">
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Date Hired</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['hired_at'] }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Status</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['status'] }}
                        </div>
                    </div>
                </div>

                <div class="flex w-full gap-4 px-4 py-4">
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Office Location</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['office_location'] }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-full">
                        <label class="font-semibold" for="username">Department</label>
                        <div class="border border-neutral-400 py-3 px-4 rounded-lg w-full">
                            {{ $staffs[0]['department'] }}
                        </div>
                    </div>
                </div>

            </div>



        </div>

    </div>
    </div>
</x-admin-layout>
