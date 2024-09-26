@extends('layouts.app')

@section('headerofadmin')
<div class="w-full px-4 py-4 bg-yellow-600 shadow-md logo text-white flex justify-between">
    <div class="left items-center flex space-x-2">
       <i class="bx bx-menu menu-icon text-lg"></i>
      <span class="font-medium logo-name text-sm sm:text-base md:text-lg lg:text-xl">Update Notice</span>
  </div>
@endsection

@section('content')


<div class="mx-auto">


    <form action="{{ route('schoolnotice.update',$schoolnotice->id) }}" class="mt-8" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid w-full flex-1 grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">


         <!--  Publish Date-->
         <div>
            <label for="publish_date" class="block mb-2 text-sm font-semibold text-blue-700">Publish_Date</label>
            <input type="date" name="publish_date" id="publish_date" placeholder="publish_date"
                class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                value="{{ $schoolnotice->publish_date }}">
            @error('publish_date')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>


            <!-- Notice Title -->
            <div>
                <label for="title" class="block mb-2 text-sm font-semibold text-blue-700">Notice_Title</label>
                <input type="text" name="title" id="title" placeholder="Notice title"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{$schoolnotice->title}}">
                @error('title')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>



            <!-- Notice Description -->
            <div>
                <label for="description" class="block mb-2 text-sm font-semibold text-blue-700">Description</label>
                <input type="text" name="description" id="description"
                    class="w-full px-4 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    value="{{$schoolnotice->description }}">
                @error('description')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>



            <!-- Notice Upload -->
            <div>
                <label for="photopath" class="block mb-2 text-sm font-semibold text-blue-700">Upload_Notice</label>


                <input type="file" name="photopath" id="photopath"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-600">
                @error('photopath')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror

                <p>Current Notice:</p>
                <img src="{{asset('images/schoolnotice/'.$schoolnotice->photopath)}}" alt="" class="w-44">


            </div>

        <div class="flex justify-center gap-4 mt-10">
            <input type="submit" value="Update Notice" class="px-6 py-3 font-semibold text-white bg-blue-900 rounded-lg hover:bg-blue-700 cursor-pointer">
            <a href="{{ route('schoolnotice.index') }}" class="px-6 py-3 font-semibold text-white bg-red-700 rounded-lg hover:bg-red-500">Exit</a>
        </div>
    </form>
</div>
@endsection
