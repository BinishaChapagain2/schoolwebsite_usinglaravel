@extends('layouts.app')

@section('headerofadmin')

    <div class="w-full px-4 py-4 bg-blue-900 shadow-md logo text-white flex justify-between">
      <div class="left items-center flex space-x-2">
         <i class="bx bx-menu menu-icon text-lg"></i>
        <span class="font-medium logo-name text-sm sm:text-base md:text-lg lg:text-xl">Teacher Panel</span>
    </div>

    <div class="right">
        <a href="{{route('teacher.create')}}" class="bg-blue-700 text-white px-3 py-2 text-xs font-bold rounded sm:px-4 sm:py-2 md:px-4 md:py-3 lg:px-4 lg:py-2 lg:text-base">Add Teacher</a>
    </div>

    </div>

@endsection

@section('content')


<div class="overflow-x-auto shadow-md px-2 py-5 sm:px-4 sm:py-6 md:px-6 md:py-8 lg:px-4 lg:py-10 w-full">
    <table class="min-w-full bg-white border border-gray-300 divide-y divide-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Photo</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Teacher Name</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Email</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Date of Birth</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Date of Joining</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Mobile</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Marital Status</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Current Address</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Permanent Address</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Qualification</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Work Experience</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Class </th>

                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Password</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($teachers as $teacher)
            <tr>
                <td class="px-4 py-3">
                    <img src="{{ asset('images/teacher/' . $teacher->photopath) }}" alt="Teacher Photo" class="w-12 h-12  object-cover">
                </td>
                <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $teacher->name }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->email }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->date_of_birth }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->date_of_joining }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->mobile }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->marital_status }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->current_address }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->permanent_address }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->qualification }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->work_experience }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->schoolclass->name }}</td>

                <td class="px-4 py-3 text-sm text-gray-700">{{ $teacher->password }}</td>
                <td class="px-4 py-3 text-sm">
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('teacher.edit', $teacher->id) }}" class="px-2 py-1 text-xs font-semibold text-white bg-blue-600 rounded hover:bg-blue-500">Edit</a>
                        <a href="{{ route('teacher.destroy', $teacher->id) }}" class="px-2 py-1 text-xs font-semibold text-white bg-red-600 rounded hover:bg-red-500" onclick="return confirm('Are you sure?')">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
