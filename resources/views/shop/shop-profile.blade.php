<x-shop-layout :user="$user" :userrole="$userRole">
    <section>
        <div class="grid grid-cols-5 gap-4 mb-4">
            {{-- General Information Card --}}
            <div class="bg-white p-10 rounded-lg shadow-sm col-span-2">
                <div class="flex items-center justify-between mb-10">
                    <h1 class="text-4xl font-bold">General Information</h1>
                    <a href="">
                        <svg class="stroke-neutral-300 stroke-1 size-10" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 8.00012L4 16.0001V20.0001L8 20.0001L16 12.0001M12 8.00012L14.8686 5.13146L14.8704 5.12976C15.2652 4.73488 15.463 4.53709 15.691 4.46301C15.8919 4.39775 16.1082 4.39775 16.3091 4.46301C16.5369 4.53704 16.7345 4.7346 17.1288 5.12892L18.8686 6.86872C19.2646 7.26474 19.4627 7.46284 19.5369 7.69117C19.6022 7.89201 19.6021 8.10835 19.5369 8.3092C19.4628 8.53736 19.265 8.73516 18.8695 9.13061L18.8686 9.13146L16 12.0001M12 8.00012L16 12.0001"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <div class="mb-4">
                    <h6 class="font-semibold">Owner</h6>
                </div>
                {{-- Basic Owner Info --}}
                <div class="mb-8 flex items-center gap-4">
                    <div class="size-18">
                        <x-user-profile-pic />
                    </div>
                    <div class="flex flex-col gap-1">
                        @if ($shopOwner[0]->first_name && $shopOwner[0]->last_name)
                            <h6 class="font-semibold">{{ $shopOwner[0]->first_name . ' ' . $shopOwner[0]->last_name }}
                            </h6>
                        @else
                            <h6 class="font-semibold">{{ $shopOwner[0]->username }}</h6>
                        @endif
                        <p>{{ '@' . $user->username }}</p>
                    </div>
                </div>
                <div class="mb-4 flex gap-2">
                    <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.50246 4.25722C9.19873 3.4979 8.46332 3 7.64551 3H4.89474C3.8483 3 3 3.8481 3 4.89453C3 13.7892 10.2108 21 19.1055 21C20.1519 21 21 20.1516 21 19.1052L21.0005 16.354C21.0005 15.5361 20.5027 14.8009 19.7434 14.4971L17.1069 13.4429C16.4249 13.1701 15.6483 13.2929 15.0839 13.7632L14.4035 14.3307C13.6089 14.9929 12.4396 14.9402 11.7082 14.2088L9.79222 12.2911C9.06079 11.5596 9.00673 10.3913 9.66895 9.59668L10.2363 8.9163C10.7066 8.35195 10.8305 7.57516 10.5577 6.89309L9.50246 4.25722Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p>{{ $shopBranches[0]->contact_number }}</p>
                </div>
                <div class="mb-4 flex gap-2">
                    <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3 12H8M3 12C3 16.9706 7.02944 21 12 21M3 12C3 7.02944 7.02944 3 12 3M8 12H16M8 12C8 16.9706 9.79086 21 12 21M8 12C8 7.02944 9.79086 3 12 3M16 12H21M16 12C16 7.02944 14.2091 3 12 3M16 12C16 16.9706 14.2091 21 12 21M21 12C21 7.02944 16.9706 3 12 3M21 12C21 16.9706 16.9706 21 12 21"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p>{{ $shopBranches[0]->email }}</p>
                </div>
                <div class="mb-4 flex gap-2">
                    <svg class="stroke-neutral-400 stroke-1" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 20H4M4 20H14M4 20V6.2002C4 5.08009 4 4.51962 4.21799 4.0918C4.40973 3.71547 4.71547 3.40973 5.0918 3.21799C5.51962 3 6.08009 3 7.2002 3H10.8002C11.9203 3 12.4796 3 12.9074 3.21799C13.2837 3.40973 13.5905 3.71547 13.7822 4.0918C14 4.5192 14 5.07899 14 6.19691V12M14 20H20M14 20V12M20 20H22M20 20V12C20 11.0681 19.9999 10.6024 19.8477 10.2349C19.6447 9.74481 19.2557 9.35523 18.7656 9.15224C18.3981 9 17.9316 9 16.9997 9C16.0679 9 15.6019 9 15.2344 9.15224C14.7443 9.35523 14.3552 9.74481 14.1522 10.2349C14 10.6024 14 11.0681 14 12M7 10H11M7 7H11"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p>{{ count($shopBranches) }} {{ Str::plural('Branch', count($shopBranches)) }}</p>
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm col-span-3">
                <h1 class="text-4xl font-bold mb-10">Shop Gallery</h1>
                <div class="grid grid-cols-3     gap-4 h-[19.5rem] overflow-y-scroll">
                    @php
                        $hasAvailableBranch = false;
                        $shopGallery = DB::table('shop_gallery')->get();
                    @endphp
                    @foreach ($shopBranches as $branch)
                        @php
                            $imageCount = $shopGallery->where('branch_id', $branch->id)->count();
                            if ($imageCount < 3) {
                                $hasAvailableBranch = true;
                            }
                        @endphp
                    @endforeach
                    @if ($hasAvailableBranch)
                        {{-- Add Images Button --}}
                        <button id="add-image-open-btn"
                            class="h-36 rounded-xl overflow-hidden bg-neutral-100 flex flex-col items-center justify-center">
                            <svg class="stroke-neutral-400 stroke-1 size-14" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12H12M12 12H18M12 12V18M12 12V6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <p class="text-neutral-400">Add Image</p>
                        </button>
                    @endif
                    {{-- Gallery-contents --}}
                    <div id="gallery-contents" class="contents">
                        @php
                            $allImages = collect();
                            foreach ($shopBranches as $branch) {
                                $shopGallery = DB::table('shop_gallery')
                                    ->where('branch_id', $branch->id)
                                    ->get();
                                $allImages = $allImages->concat($shopGallery);
                            }
                            $sortedImages = $allImages->sortByDesc('created_at');
                        @endphp
                        <x-gallery-image :sortedimages="$sortedImages" />
                    </div>

                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm col-span-2 flex items-start   gap-10">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-8xl font-bold mb-4">0.0</h1>
                    {{-- Star Rating --}}
                    <div class=" relative">
                        <div class="flex items-start gap-1 ">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="stroke-black stroke-1  size-4" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            @endfor
                        </div>
                        <div class="flex items-start gap-1 absolute top-0 right-0 left-0">
                            @for ($i = 0; $i < 0; $i++)
                                <svg class="stroke-black stroke-1 fill-black size-4" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.33301 10.3363C2.01976 10.0466 2.18992 9.5229 2.61361 9.47267L8.61719 8.76058C8.78987 8.7401 8.93986 8.63166 9.0127 8.47376L11.5449 2.98397C11.7236 2.59654 12.2744 2.59646 12.4531 2.9839L14.9854 8.47365C15.0582 8.63155 15.2072 8.74028 15.3799 8.76075L21.3838 9.47267C21.8075 9.5229 21.9772 10.0468 21.6639 10.3364L17.2258 14.4414C17.0981 14.5595 17.0413 14.7352 17.0752 14.9058L18.2531 20.8355C18.3362 21.2539 17.8908 21.5782 17.5185 21.3698L12.2432 18.4161C12.0915 18.3312 11.9071 18.3316 11.7554 18.4165L6.47949 21.369C6.10718 21.5774 5.66099 21.2539 5.74414 20.8354L6.92219 14.9061C6.95608 14.7356 6.89938 14.5594 6.77172 14.4414L2.33301 10.3363Z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-lg">0 reviews</p>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    @php
                        $barSizes = [0, 50, 0, 0, 50, 0];
                    @endphp
                    @for ($i = 5; $i > 0; $i--)
                        <div class="flex items-center gap-3">
                            <span class="text-lg">{{ $i }}</span>
                            <div class="flex-1 relative">
                                <div class="bg-neutral-300 w-[100%] h-3 rounded-full"></div>
                                <div style="width: {{ $barSizes[$i] }}%"
                                    class="bg-brand-300 h-3 rounded-full absolute top-0 bottom-0">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm col-span-3">
                <p>Shop</p>
                <h1 class="text-4xl font-bold mb-10">Branch Locations</h1>
                <div>
                    <div class="flex flex-wrap gap-4">
                        @foreach ($shopBranches as $shopBranch)
                            <div
                                class="border-1 border p-4 rounded-xl hover:bg-neutral-100 transition-colors hover:border-black ease-in-out">
                                <p>{{ $shopBranch->detailed_address }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="bg-white p-10 rounded-lg shadow-sm w-full">
                <p>Available</p>
                <h1 class="text-4xl font-bold mb-10">Type of Services</h1>
                <div class="flex gap-10">
                    @php
                        $appointmentTypes = DB::table('appointment_types')->get();
                        $branchAppointmentTypes = DB::table('branch_appointment_types')->get();
                    @endphp
                    <x-appointmentType :shopbranches="$shopBranches" :appointmenttypes="$appointmentTypes" :branchappointmenttyppes="$branchAppointmentTypes" />
                </div>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="bg-white p-10 rounded-lg shadow-sm w-full">
                <h1 class="text-4xl font-bold mb-10">Branch Managers</h1>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <div class="mb-8">
                            <img class="size-20 rounded-full object-cover"
                                src="{{ asset('assets/images/DeanWong.png') }}" />
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Name:</h6>
                            <p class="col-span-4">Dean Wong</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Email:</h6>
                            <p class="col-span-4">deanwong@gmail.com</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Branch:</h6>
                            <p class="col-span-4">{{ $shopBranches[0]->detailed_address }}</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Contact Number:</h6>
                            <p class="col-span-4">09877896789</p>
                        </div>
                    </div>
                    <div>
                        <div class="mb-8">
                            <img class="size-20 rounded-full object-cover"
                                src="{{ asset('assets/images/PaulDaveCadiz.png') }}" />
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Name:</h6>
                            <p class="col-span-4">Paul Dave Cadiz</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Email:</h6>
                            <p class="col-span-4">mixman@gmail.com</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Branch:</h6>
                            <p class="col-span-4">3rd Floor, KCC Mall de Zamboanga.</p>
                        </div>
                        <div class="grid grid-cols-6 mb-2">
                            <h6 class="col-span-2 font-bold">Contact Number:</h6>
                            <p class="col-span-4">09981234654</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center justify-between mb-10">
                    <div class="inline-flex items-center gap-2">
                        <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h1 class="text-4xl font-bold">Top Services </h1>
                    </div>
                    <button class="flex items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke="black"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Sort By</span>
                    </button>
                </div>
                <div class="border-b py-3 px-4 flex items-center justify-between">
                    <h6 class="font-bold">Service</h6>
                    <h6 class="font-bold">Total</h6>
                </div>
                <div class="py-3 px-4 flex items-center justify-between">
                    <p>Regular Haircut</p>
                    <p>44</p>
                </div>
                <div class="py-3 px-4 flex items-center justify-between">
                    <p>Faded Haircut</p>
                    <p>20</p>
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center justify-between mb-10">
                    <div class="inline-flex items-center gap-2">
                        <svg class="stroke-black stroke-1" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H9M17 7V15" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h1 class="text-4xl font-bold">Top Branches </h1>
                    </div>
                    <button class="flex items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 16L8 19M8 19L5 16M8 19V5M13 8L16 5M16 5L19 8M16 5V19" stroke="black"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Sort By</span>
                    </button>
                </div>
                <div class="border-b py-3 px-4 flex items-center justify-between">
                    <h6 class="font-bold">Branch</h6>
                    <h6 class="font-bold">Earning in Percentage</h6>
                </div>
                @foreach ($shopBranches as $branch)
                    <div class="py-3 px-4 flex items-center justify-between">
                        <p>{{ $branch->branch_name }}</p>
                        <p>0%</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Add Image Modal --}}
    <div id="add-image-modal"
        class="fixed top-0 bottom-0 left-0 right-0 z-50 backdrop-brightness-50 place-items-center hidden">
        <form id="add-image-modal-content" class="bg-white w-[50rem] mx-auto p-10 rounded-lg shadow-lg relative"
            action="{{ route('shop.upload-images') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <h6 class="font-bold text-4xl">Add Image</h6>
                <h1 class="font-bold text-4xl"></h1>
                <button id="add-image-modal-close-btn">
                    <svg class="absolute top-10 right-10" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="mb-4">
                <h4 class="text-xl">Branch</h4>
                <p class="text-sm opacity-80">Please select the branch to which these images belong.</p>
            </div>
            <div class="mb-4 relative">
                <select class="w-full border-1 border rounded-lg p-2" name="branch_id">
                    @php
                        $shopGallery = DB::table('shop_gallery')->get();
                    @endphp
                    @foreach ($shopBranches as $branch)
                        @php
                            $imageCount = 0;
                        @endphp
                        @foreach ($shopGallery as $image)
                            @php
                                $imageCount = $shopGallery->where('branch_id', $branch->id)->count();
                            @endphp
                        @endforeach
                        @if ($imageCount < 3)
                            <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                        @endif
                    @endforeach

                </select>
                <svg class="stroke-1 stroke-black absolute top-2 right-2" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="mb-4">
                <label for="branch_img" class="text-xl">
                    <span>Images</span>
                    <p class="text-sm opacity-80">Please select up to 3 images to upload</p>
                    <div id="file-count-warning" class="text-red-500 hidden text-sm">Maximum 3 files allowed</div>
                    {{-- @error('branch_img')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror --}}
                </label>
            </div>
            <div class="mb-4">
                <input name="branch_img[]" id="branch_img" type="file" multiple accept="image/*"
                    class="mt-2 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-neutral-100 file:text-bwhite hover:file:bg-neutral-150">
            </div>
            <div id="image-preview" class="grid grid-cols-3 gap-4 mb-10">
                <!-- Preview images will be appended here -->
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-brand-500 text-white px-8 py-2 rounded-lg">Upload</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/showModal.js') }}"></script>
    <script src="{{ asset('assets/js/shop/shopProfile.js') }}"></script>

</x-shop-layout>
