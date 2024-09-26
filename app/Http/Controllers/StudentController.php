<?php

namespace App\Http\Controllers;
use App\Models\student;
use App\Models\schoolclass;
use Illuminate\Http\Request;

class StudentController extends Controller
{

public function index(){
    $students=student::all();
    return view('student.index',compact('students'));
}


public function create(){
    $schoolclasses=schoolclass::all();
    return view('student.create',compact('schoolclasses'));
}

public function store(Request $request){
    $data=$request->validate([
    'admission_no'=>'required|integer',
    'photopath'=>'required|image',
    'name'=>'required|string',
    'gender'=>'required',
    'admission_date'=>'required',
    'date_of_birth'=>'required',
    'mobile'=>'required',
    'schoolclass_id'=>'required',
    'current_address'=>'required',
    'permanent_address'=>'required',
    'cast'=>'required',
    'religious'=>'required',
    'email'=>'required',
    'password'=>'required',

    ]);

       // storing picture

       $photo = $request->file('photopath');
       $photoname = time() . '.' . $photo->extension();
       $photo->move(public_path('images/student/'), $photoname);
       $data['photopath'] = $photoname;

      student::create($data);
       return redirect(route('student.index'))->with('success', 'Student added Sucessfully');
}

public function edit($id){

    $student=student::find($id);

    $schoolclasses = SchoolClass::all(); // Get all school classes instead of using get($id)
    return view('student.edit',compact('student','schoolclasses'));
    }



    public function update(Request $request,$id){

        $data=$request->validate([
            'admission_no'=>'required|integer',
            'photopath'=>'nullable|image',
            'name'=>'required|string',
            'gender'=>'required',
            'admission_date'=>'required',
            'date_of_birth'=>'required',
            'mobile'=>'required',
            'schoolclass_id'=>'required',
            'current_address'=>'required',
            'permanent_address'=>'required',
            'cast'=>'required',
            'religious'=>'required',
            'email'=>'required',
            'password'=>'required',

            ]);


        $student=student::find($id);


        if($request->hasFile('photopath')){

            $photo = $request->file('photopath');
            $photoname = time() . '.' . $photo->extension();
            $photo->move(public_path('images/student/'), $photoname);
            $data['photopath'] = $photoname;

            $oldphoto=public_path('images/student/' . $student->photopath);

            if(file_exists($oldphoto)){
              unlink($oldphoto);
            }


          $data['photopath']=$photoname;



        }


         $student->update($data);
         return redirect(route('student.index'))->with('success', 'Student update Sucessfully');

        }

        public function destroy($id){
            $student=student::find($id);
            $photo=public_path('images/student/'.$student->photopath);

            if(file_exists($photo)){
                unlink($photo);
              }


            $student->delete();


            return redirect(route('student.index'))->with('success', 'Student deleted Sucessfully');



        }


}
