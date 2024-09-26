@extends('layouts.app')

@section('headerofadmin')

    <div class="w-full px-4 py-4 bg-blue-900 shadow-md logo text-white flex justify-between">
      <div class="left items-center flex space-x-2">
         <i class="bx bx-menu menu-icon text-lg"></i>
        <span class="font-medium logo-name text-sm sm:text-base md:text-lg lg:text-xl">School Dashboard</span>
    </div>

    <div class="right">
        <a href="{{route('teacher.create')}}" class="text-white  px-3 py-3   sm:px-3 sm:py-2 md:px-3 md:py-2 lg:px-3 lg:py-2 lg:text-base"><i class='bx bx-message-dots text-2xl font-medium'></i> </a>
    </div>

    </div>

@endsection



@section('content')


    <div class="grid flex-1 grid-cols-1 gap-4  p-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <div class="p-5 bg-blue-100 rounded-lg shadow">
            <i class=" bx bxs-graduation  text-3xl text-blue-600"></i>
            <h2 class="text-2xl font-bold text-blue-900">Teacher</h2>
            <p>Total Teachers: {{$teachers}}</p>
        </div>
        <div class="p-5 bg-green-100 rounded-lg shadow">
            <i class="bx bxs-user text-3xl text-blue-600"></i>
            <h2 class="text-2xl font-bold text-blue-900">Student</h2>
            <p>Total Students: {{$students}}</p>
        </div>

        <div class="p-5 bg-green-100 rounded-lg shadow">
            <i class='bx bx-building  text-3xl text-blue-600'></i>
            <h2 class="text-2xl font-bold text-blue-900">Class</h2>
            <p>Total Classes: {{$schoolclass}}</p>
        </div>

        <div class="p-5 bg-pink-100 rounded-lg shadow">
            <i class='bx bxs-edit-alt text-3xl text-blue-600'></i>
            <h2 class="text-2xl font-bold text-blue-900">Notice</h2>
            <p>Total Notice:{{$schoolnotice}}</p>
        </div>


        <div class="p-5 bg-pink-100 rounded-lg shadow">
            <i class='bx bx-mail-send text-3xl text-blue-600'></i>
            <h2 class="text-2xl font-bold text-blue-900">Enquiry</h2>
            <p>Total Enquiries: 15</p>
        </div>


    </div>
@endsection
