@extends('layouts.app')

@section('headerofadmin')
    <div class="flex justify-between w-full px-4 py-4 text-white bg-blue-900 shadow-md logo">
        <div class="flex items-center space-x-2 left">
            <i class="text-lg bx bx-menu menu-icon"></i>
            <span class="text-sm font-medium logo-name sm:text-base md:text-lg lg:text-xl">Add Teacher</span>
        </div>
    @endsection

    @section('content')
        <div class="mx-auto">

            {{-- code by Arun --}}

            <form action="{{ route('teacher.store') }}" class="mt-8" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid flex-1 w-full grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-semibold text-blue-700">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Full Name"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>



                    <!-- Gender -->
                    <div>
                        <label for="gender" class="block mb-2 text-sm font-semibold text-blue-700">Gender</label>
                        <select name="gender" id="gender"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('gender')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <label for="date_of_birth" class="block mb-2 text-sm font-semibold text-blue-700">Date of
                            Birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                            value="{{ old('date_of_birth') }}">
                        @error('date_of_birth')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date of Joining -->
                    <div>
                        <label for="date_of_joining" class="block mb-2 text-sm font-semibold text-blue-700">Date of
                            Joining</label>
                        <input type="date" name="date_of_joining" id="date_of_joining"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                            value="{{ old('date_of_joining') }}">
                        @error('date_of_joining')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mobile -->
                    <div>
                        <label for="mobile" class="block mb-2 text-sm font-semibold text-blue-700">Mobile Number</label>
                        <input type="tel" name="mobile" id="mobile" placeholder="Mobile Number"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                            value="{{ old('mobile') }}">
                        @error('mobile')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Marital Status -->
                    <div>
                        <label for="marital_status" class="block mb-2 text-sm font-semibold text-blue-700">Marital
                            Status</label>
                        <select name="marital_status" id="marital_status"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                            <option value="">Select Status</option>
                            <option value="Married">Married</option>
                            <option value="Unmarried">Unmarried</option>
                        </select>
                        @error('marital_status')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Photo Upload -->
                    <div>
                        <label for="photopath" class="block mb-2 text-sm font-semibold text-blue-700">Photo</label>
                        <input type="file" name="photopath" id="photopath"
                            class="w-full px-4 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('photopath')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Current Address -->
                    <div>
                        <label for="current_address" class="block mb-2 text-sm font-semibold text-blue-700">Current
                            Address</label>
                        <input type="text" name="current_address" id="current_address" placeholder="Current Address"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                            value="{{ old('current_address') }}">
                        @error('current_address')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Permanent Address -->
                    <div>
                        <label for="permanent_address" class="block mb-2 text-sm font-semibold text-blue-700">Permanent
                            Address</label>
                        <input type="text" name="permanent_address" id="permanent_address"
                            placeholder="Permanent Address"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                            value="{{ old('permanent_address') }}">
                        @error('permanent_address')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Qualification -->
                    <div>
                        <label for="qualification"
                            class="block mb-2 text-sm font-semibold text-blue-700">Qualification</label>
                        <textarea name="qualification" id="qualification" placeholder="Qualification" rows="4"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">{{ old('qualification') }}</textarea>
                        @error('qualification')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Work Experience -->
                    <div>
                        <label for="work_experience" class="block mb-2 text-sm font-semibold text-blue-700">Work
                            Experience</label>
                        <textarea name="work_experience" id="work_experience" placeholder="Work Experience" rows="4"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">{{ old('work_experience') }}</textarea>
                        @error('work_experience')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- schoolclass id -->
                    <div>
                        <label for="schoolclass"
                            class="block mb-2 text-sm font-semibold text-blue-700">SchoolClass</label>
                        <select name="schoolclass_id" id="schoolclass_id"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                            <option value="">Select class</option>

                            @foreach ($schoolclasses as $schoolclass)
                                <option value="{{ $schoolclass->id }}"
                                    {{ old('schoolclass_id') == $schoolclass->id ? 'selected' : '' }}>{{ $schoolclass->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('schoolclass_id')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Email -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-semibold text-blue-700">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block mb-2 text-sm font-semibold text-blue-700">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('password')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-center gap-4 mt-10">
                    <input type="submit" value="Add Teacher"
                        class="px-6 py-3 font-semibold text-white bg-blue-900 rounded-lg cursor-pointer hover:bg-blue-700">
                    <a href="{{ route('teacher.index') }}"
                        class="px-6 py-3 font-semibold text-white bg-red-700 rounded-lg hover:bg-red-500">Exit</a>
                </div>
            </form>
        </div>
    @endsection
