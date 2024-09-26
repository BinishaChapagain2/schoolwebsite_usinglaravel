@extends('layouts.app')

@section('headerofadmin')
<div class="w-full px-4 py-4 bg-yellow-600 shadow-md logo text-white flex justify-between">
    <div class="left items-center flex space-x-2">
       <i class="bx bx-menu menu-icon text-lg"></i>
      <span class="font-medium logo-name text-sm sm:text-base md:text-lg lg:text-xl">Edit Class</span>
  </div>
@endsection

@section('content')


<div class="mx-auto">


    <form action="{{ route('schoolclass.update',$schoolclass->id) }}" class="mt-8" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid w-full flex-1 grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!-- Class Name -->
            <div>
                <label for="name" class="block mb-2 text-sm font-semibold text-blue-700">Class Name</label>
                <input type="text" name="name" id="name" placeholder="Class Name"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{ $schoolclass->name }}">
                @error('name')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>












        <div class="flex justify-center gap-4 mt-10">
            <input type="submit" value="Update Class" class="px-6 py-3 font-semibold text-white bg-blue-900 rounded-lg hover:bg-blue-700 cursor-pointer">
            <a href="{{ route('schoolclass.index') }}" class="px-6 py-3 font-semibold text-white bg-red-700 rounded-lg hover:bg-red-500">Exit</a>
        </div>
    </form>
</div>
@endsection
