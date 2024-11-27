@props(['shopbranches', 'branchappointmenttyppes', 'appointmenttypes'])
@foreach ($shopbranches as $branch)
    <div class="mb-4">
        <div class="flex flex-wrap gap-4 mb-2">
            <h6 class="font-bold">{{ $branch->branch_name }}</h6>
        </div>
        <div class="space-y-4 pl-3">
            @foreach ($branchappointmenttyppes->where('branch_id', $branch->id) as $branchType)
                @php
                    $appointmentType = $appointmenttypes->where('id', $branchType->appointment_type_id)->first();
                @endphp
                @if ($appointmentType)
                    <div
                        class="border-b-2 border-t border-x shadow border-b-neutral-400 p-4 rounded-t-lg hover:bg-neutral-100 transition-colors hover:border-b-black ease-in-out flex items-center gap-2 group">
                        @if ($appointmentType->appointment_type == 'Solo Appointment')
                            <svg class="stroke-neutral-400 stroke-1 group-hover:stroke-black transition-colors"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 19C18 16.7909 15.3137 15 12 15C8.68629 15 6 16.7909 6 19M12 12C9.79086 12 8 10.2091 8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8C16 10.2091 14.2091 12 12 12Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        @elseif ($appointmentType->appointment_type == 'Multiple People Appointment')
                            <svg class="stroke-neutral-400 stroke-1 group-hover:stroke-black transition-colors"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 19.9999C21 18.2583 19.3304 16.7767 17 16.2275M15 20C15 17.7909 12.3137 16 9 16C5.68629 16 3 17.7909 3 20M15 13C17.2091 13 19 11.2091 19 9C19 6.79086 17.2091 5 15 5M9 13C6.79086 13 5 11.2091 5 9C5 6.79086 6.79086 5 9 5C11.2091 5 13 6.79086 13 9C13 11.2091 11.2091 13 9 13Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        @else
                            <svg class="stroke-neutral-400 stroke-1 group-hover:stroke-black transition-colors"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17 20C17 18.3431 14.7614 17 12 17C9.23858 17 7 18.3431 7 20M21 17.0004C21 15.7702 19.7659 14.7129 18 14.25M3 17.0004C3 15.7702 4.2341 14.7129 6 14.25M18 10.2361C18.6137 9.68679 19 8.8885 19 8C19 6.34315 17.6569 5 16 5C15.2316 5 14.5308 5.28885 14 5.76389M6 10.2361C5.38625 9.68679 5 8.8885 5 8C5 6.34315 6.34315 5 8 5C8.76835 5 9.46924 5.28885 10 5.76389M12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        @endif
                        <p>{{ $appointmentType->appointment_type }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endforeach
