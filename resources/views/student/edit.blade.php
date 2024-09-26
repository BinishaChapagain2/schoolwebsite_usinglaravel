@extends('layouts.app')

@section('headerofadmin')
<div class="w-full px-4 py-4 bg-yellow-600 shadow-md logo text-white flex justify-between">
    <div class="left items-center flex space-x-2">
       <i class="bx bx-menu menu-icon text-lg"></i>
      <span class="font-medium logo-name text-sm sm:text-base md:text-lg lg:text-xl">Update Student</span>
  </div>
@endsection

@section('content')


<div class="mx-auto">


    <form action="{{ route('student.update',$student->id) }}" class="mt-8" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid w-full flex-1 grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">


         <!-- Admission no -->
         <div>
            <label for="admission_no" class="block mb-2 text-sm font-semibold text-blue-700">Admission No</label>
            <input type="text" name="admission_no" id="admission_no" placeholder="Admission No"
                class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                value="{{ $student->admission_no}}">
            @error('admission_no')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>


            <!-- Full Name -->
            <div>
                <label for="name" class="block mb-2 text-sm font-semibold text-blue-700">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{ $student->name }}">
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
                    <option value="Male" @if ($student->gender=="Male")
                        selected
                    @endif>Male</option>
                    <option value="Female" @if ($student->gender=="Female")
                        selected
                    @endif>Female</option>
                    <option value="Other" @if ($student->gender=="Other")
                        selected
                    @endif>Other</option>
                </select>
                @error('gender')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>



            <!-- Admission date -->
            <div>
                <label for="admission_date" class="block mb-2 text-sm font-semibold text-blue-700">Admission Date</label>
                <input type="date" name="admission_date" id="admission_date"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{ $student->admission_date }}">
                @error('admission_date')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>



            <!-- Date of Birth -->
            <div>
                <label for="date_of_birth" class="block mb-2 text-sm font-semibold text-blue-700">Date of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{ $student->date_of_birth }}">
                @error('date_of_birth')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Mobile -->
            <div>
                <label for="mobile" class="block mb-2 text-sm font-semibold text-blue-700">Mobile Number</label>
                <input type="tel" name="mobile" id="mobile" placeholder="Mobile Number"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{$student->mobile }}">
                @error('mobile')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- schoolclass id -->
            <div>
                <label for="schoolclass" class="block mb-2 text-sm font-semibold text-blue-700">SchoolClass</label>
                <select name="schoolclass_id" id="schoolclass_id"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <option value="">Select class</option>

                   @foreach ( $schoolclasses as  $schoolclass)
                   <option value="{{$schoolclass->id}}" @if ($student->schoolclass_id==$schoolclass->id)
                  selected
                  @endif>{{$schoolclass->name}}</option>
                   @endforeach
                </select>
                @error('schoolclass_id')
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

               <p>Current Picture:</p>
               <img src="{{asset('images/student/'.$student->photopath)}}" alt="" class="w-44">
            </div>

            <!-- Current Address -->
            <div>
                <label for="current_address" class="block mb-2 text-sm font-semibold text-blue-700">Current Address</label>
                <input type="text" name="current_address" id="current_address" placeholder="Current Address"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{ $student->current_address }}">
                @error('current_address')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Permanent Address -->
            <div>
                <label for="permanent_address" class="block mb-2 text-sm font-semibold text-blue-700">Permanent Address</label>
                <input type="text" name="permanent_address" id="permanent_address" placeholder="Permanent Address"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{ $student->permanent_address}}">
                @error('permanent_address')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- cast -->
            <div>
                <label for="cast" class="block mb-2 text-sm font-semibold text-blue-700">Cast</label>
                <input type="text" name="cast" id="cast" placeholder="Cast"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{ $student->cast }}">
                @error('cast')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- religious -->
            <div>
                <label for="religious" class="block mb-2 text-sm font-semibold text-blue-700">Religious</label>
                <input type="text" name="religious" id="religious" placeholder="Religious"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{$student->religious }}">
                @error('religious')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block mb-2 text-sm font-semibold text-blue-700">Email</label>
                <input type="email" name="email" id="email" placeholder="Email"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{ $student->email }}">
                @error('email')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block mb-2 text-sm font-semibold text-blue-700">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" value="{{$student->password}}"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                @error('password')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex justify-center gap-4 mt-10">
            <input type="submit" value="Update Student" class="px-6 py-3 font-semibold text-white bg-blue-900 rounded-lg hover:bg-blue-700 cursor-pointer">
            <a href="{{ route('student.index') }}" class="px-6 py-3 font-semibold text-white bg-red-700 rounded-lg hover:bg-red-500">Exit</a>
        </div>
    </form>
</div>
@endsection
