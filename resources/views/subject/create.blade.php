@extends('layouts.app')

@section('headerofadmin')
<div class="w-full px-4 py-4 bg-blue-900 shadow-md logo text-white flex justify-between">
    <div class="left items-center flex space-x-2">
       <i class="bx bx-menu menu-icon text-lg"></i>
      <span class="font-medium logo-name text-sm sm:text-base md:text-lg lg:text-xl">Add Subject</span>
  </div>
@endsection

@section('content')


<div class="mx-auto">


    <form action="{{ route('subject.store') }}" class="mt-8" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid w-full flex-1 grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">





            <!-- Subject Name -->
            <div>
                <label for="name" class="block mb-2 text-sm font-semibold text-blue-700">Subject Name</label>
                <input type="text" name="name" id="name" placeholder="Subject Name"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>


            <!-- schoolclass id -->
            <div>
                <label for="schoolclass" class="block mb-2 text-sm font-semibold text-blue-700">Class</label>
                <select name="schoolclass_id" id="schoolclass_id"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <option value="">Select class</option>

                   @foreach ( $schoolclasses as  $schoolclass)

                   <option value="{{$schoolclass->id}}" {{old('schoolclass_id')==$schoolclass->id?'selected':''}}>{{$schoolclass->name}}</option>
                   @endforeach
                </select>
                @error('schoolclass_id')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>







        <div class="flex justify-center gap-4 mt-10">
            <input type="submit" value="Add Subject" class="px-6 py-3 font-semibold text-white bg-blue-900 rounded-lg hover:bg-blue-700 cursor-pointer">
            <a href="{{ route('subject.index') }}" class="px-6 py-3 font-semibold text-white bg-red-700 rounded-lg hover:bg-red-500">Exit</a>
        </div>
    </form>
</div>
@endsection
