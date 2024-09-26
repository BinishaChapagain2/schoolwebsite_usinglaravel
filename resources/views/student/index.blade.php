@extends('layouts.app')

@section('headerofadmin')

    <div class="w-full px-4 py-4 bg-blue-900 shadow-md logo text-white flex justify-between">
      <div class="left items-center flex space-x-2">
         <i class="bx bx-menu menu-icon text-lg"></i>
        <span class="font-medium logo-name text-sm sm:text-base md:text-lg lg:text-xl">Student Panel</span>
    </div>

    <div class="right">
        <a href="{{route('student.create')}}" class="bg-blue-700 text-white px-3 py-2 text-xs font-bold rounded sm:px-4 sm:py-2 md:px-4 md:py-3 lg:px-4 lg:py-2 lg:text-base">Add Student</a>
    </div>

    </div>

@endsection

@section('content')


<div class="overflow-x-auto shadow-md px-2 py-5 sm:px-4 sm:py-6 md:px-6 md:py-8 lg:px-4 lg:py-10 w-full">
    <table class="min-w-full bg-white border border-gray-300 divide-y divide-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Admission No</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Student Photo</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Student Name</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Gender</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Date of Birth</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Admission Date</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Class </th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Current Address</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Permanent Address</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Cast</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Religious</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Mobile</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Email</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Password</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($students as $student)
            <tr>

                <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $student->admission_no }}</td>
                <td class="px-4 py-3">
                    <img src="{{ asset('images/student/' . $student->photopath) }}" alt="student Photo" class="w-12 h-12  object-cover">
                </td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->name }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->gender }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->date_of_birth }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->admission_date }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->schoolclass->name }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->current_address }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->permanent_address }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->cast }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->religious }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->mobile }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->email }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $student->password }}</td>
                <td class="px-4 py-3 text-sm">
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('student.edit', $student->id) }}" class="px-2 py-1 text-xs font-semibold text-white bg-blue-600 rounded hover:bg-blue-500">Edit</a>
                        <a  class="px-2 py-1 text-xs font-semibold text-white bg-red-600 rounded cursor-pointer hover:bg-red-500" onclick="showpopup({{$student->id}})">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Pop up mode --}}

<div class="fixed inset-0 items-center justify-center hidden bg-gray-600 bg-opacity-50 backdrop-blur-sm" id="popup">
    <form action="{{ route('student.destroy') }}" class="px-8 py-6 text-center bg-white rounded-lg shadow-lg"
        method="POST">
        @csrf
        @method('DELETE')

        <h1 class="mb-4 text-2xl font-semibold text-gray-800">Confirm Deletion</h1>
        <p class="mb-6 text-gray-600">Are you sure you want to delete this student? <br> <span
                class="text-red-500">This action cannot be undone.</span>
        </p>

        <input type="hidden" name="id" id="student_id">
        <div class="flex justify-center space-x-4">
            <button type="submit"
                class="px-6 py-2 text-white bg-red-600 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">Yes,
                Delete</button>
            <button type="button" onclick="hidepopup()"
                class="px-6 py-2 text-white bg-gray-600 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Cancel</button>
        </div>
    </form>
</div>

{{-- end pop up model --}}
@endsection


<script>
function showpopup(student_id) {
    document.getElementById('popup').classList.remove('hidden');
    document.getElementById('popup').classList.add('flex');
    document.getElementById('student_id').value = student_id;
}

function hidepopup() {
    document.getElementById('popup').classList.remove('flex');
    document.getElementById('popup').classList.add('hidden');
}
</script>








