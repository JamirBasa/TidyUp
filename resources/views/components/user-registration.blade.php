{{-- Form --}}
<form action="" method="POST">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-6 md:mb-8">
        {{-- User's First Name --}}
        <div class="flex flex-col gap-3">
            <label class="font-semibold" for="first_name">First Name</label>
            <input
                class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('first_name') ring-1 ring-red-500 @enderror"
                type="text" name="first_name" id="first_name" placeholder="Enter your first name"
                value="{{ old('first_name') }}">
            @error('first_name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        {{-- User's Last Name --}}
        <div class="flex flex-col gap-3">
            <label class="font-semibold" for="last_name">Last Name</label>
            <input
                class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('last_name') ring-1 ring-red-500 @enderror"
                type="text" name="last_name" id="last_name" placeholder="Enter your last name"
                value="{{ old('last_name') }}">
            @error('last_name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-6 md:mb-8">
        {{-- Username --}}
        <div class="flex flex-col gap-3">
            <label class="font-semibold" for="username">Username</label>
            <input
                class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('username') ring-1 ring-red-500 @enderror"
                type="text" name="username" id="username" placeholder="Enter your username"
                value="{{ old('username') }}">
            @error('username')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Gender --}}
        <div class="flex flex-col gap-3">
            <label class="font-semibold" for="gender">Gender</label>
            <div class="relative flex items-center">
                <select
                    class="border border-neutral-400 py-3 px-4 rounded-lg w-full appearance-none @error('gender') ring-1 ring-red-500 @enderror"
                    name="gender" id="gender">
                    <option value="">Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Others" {{ old('gender') == 'Others' ? 'selected' : '' }}>Others</option>
                </select>
                <svg class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            @error('gender')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-6 md:mb-8">
        {{-- Email --}}
        <div class="flex flex-col gap-3 md:col-span-2">
            <label class="font-semibold" for="email">Email</label>
            <input
                class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('email') ring-1 ring-red-500 @enderror"
                type="email" name="email" id="email" placeholder="Enter your email"
                value="{{ old('email') }}">
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        {{-- Phone Number --}}
        <div class="flex flex-col gap-3">
            <label class="font-semibold" for="phone_num">Phone Number</label>
            <input
                class="border border-neutral-400 py-3 px-4 rounded-lg w-full @error('phone_num') ring-1 ring-red-500 @enderror"
                type="tel" inputmode="numeric" name="phone_num" id="phone_num" placeholder="XXXX-XXX-XXXX"
                value="{{ old('phone_num') }}">
            @error('phone_num')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    {{-- Address --}}
    <div class="flex flex-col mb-6 md:mb-8">
        <label class="font-semibold mb-3" for="address">Address</label>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
            {{-- Region --}}
            <div class="flex flex-col gap-3">
                <label for="region">Region</label>
                <div class="relative flex items-center">
                    <select
                        class="border w-full border-neutral-400 py-3 px-4 rounded-lg appearance-none @error('region') ring-1 ring-red-500 @enderror"
                        id="regionSelect" name="region">
                        <option value="">Select Region</option>
                        <option value="Region1" {{ old('region') == 'Region1' ? 'selected' : '' }}>Region 1
                        </option>
                        <option value="Region2" {{ old('region') == 'Region2' ? 'selected' : '' }}>Region 2
                        </option>
                        <option value="Region3" {{ old('region') == 'Region3' ? 'selected' : '' }}>Region 3
                        </option>
                    </select>
                    <svg class="absolute stroke-black stroke-1 right-3 pointer-events-none" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                @error('region')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Province --}}
            <div class="flex flex-col gap-3">
                <label for="province">Province</label>
                <div class="relative inline-flex items-center">
                    <select
                        class="border w-full border-neutral-400 py-3 pl-4 pr-9 rounded-lg @error('province')
                                    ring-1 ring-red-500 
                                @enderror"
                        id="provinceSelect" name="province" value="{{ old('province') }}">
                        <option value="">Select Province</option>
                    </select>
                    <svg id="caret-down2" class="absolute stroke-black stroke-1 right-3 pointer-events-none"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                @error('province')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            {{-- City --}}
            <div class="flex flex-col gap-3">
                <label for="city">City</label>
                <div class="relative inline-flex items-center">
                    <select
                        class="border w-full border-neutral-400 py-3 pl-4 pr-9 rounded-lg @error('city')
                                    ring-1 ring-red-500 
                                @enderror"
                        id="citySelect" name="city" value="{{ old('city') }}">
                        <option value="">Select City</option>
                    </select>
                    <svg id="caret-down3" class="absolute stroke-black stroke-1 right-3 pointer-events-none"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                @error('city')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            {{-- Barangay --}}
            <div class="flex flex-col gap-3">
                <label for="barangay">Barangay</label>
                <div class="relative flex items-center">
                    <select
                        class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('barangay')
                                    ring-1 ring-red-500 
                                @enderror"
                        id="barangaySelect" name="barangay" value="{{ old('barangay') }}">
                        <option value="">Select Barangay</option>
                    </select>
                    <svg id="caret-down4" class="absolute stroke-black stroke-1 right-3 pointer-events-none"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10L12 14L8 10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                @error('barangay')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

        </div>

        <div class="flex flex-col gap-3">
            <label for="detailed_address">Detailed Address</label>
            <input
                class="border border-neutral-400 py-3 px-4 rounded-lg @error('detailed_address') ring-1 ring-red-500 @enderror"
                type="text" name="detailed_address" id="detailed_address"
                placeholder="Enter your detailed address" value="{{ old('detailed_address') }}">
            @error('detailed_address')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    {{-- Password Section --}}
    <div class="flex flex-col gap-3 mb-4">
        <div class="flex items-center justify-between">
            <label class="font-semibold" for="password">Password</label>
            <p id="strengthDisplay" class="text-sm"></p>
        </div>
        <div class="relative flex items-center">
            <input
                class="border w-full border-neutral-400 py-3 px-4 rounded-lg @error('password') ring-1 ring-red-500 @enderror"
                type="password" name="password" id="password" placeholder="Enter your password">
            <!-- Password visibility toggle icons -->
        </div>
        @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    {{-- Password Conditions --}}
    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 mb-6 text-center">
        <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use 8 or more Characters</li>
        <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use a number (e.g. 1234)</li>
        <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use upper and lower case letter (e.g. Aa)</li>
        <li class="text-neutral-500 text-xs sm:text-sm">&bull; Use a symbol(e.g. !@#$)</li>
    </ul>

    {{-- Confirm Password --}}
    <div class="flex flex-col gap-3 mb-8">
        <div class="flex items-center justify-between">
            <label class="font-semibold" for="password_confirmation">Confirm Password</label>
            <p id="matchPasswordDisplay" class="text-red-400 text-sm"></p>
        </div>
        <div class="relative flex items-center">
            <input class="border w-full border-neutral-400 py-3 px-4 rounded-lg" type="password"
                name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
            <!-- Password visibility toggle icons -->
        </div>
    </div>

    {{-- Buttons Container --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <a href=""
            class="bg-neutral-300 hover:bg-neutral-400 active:bg-neutral-200 rounded-lg p-3 font-semibold w-full transition-colors duration-150 ease-in-out text-center">
            Back
        </a>
        <button type="submit"
            class="bg-brand-500 hover:bg-brand-600 active:bg-brand-400 text-white rounded-lg p-3 font-semibold">
            Register
        </button>
    </div>
</form>
