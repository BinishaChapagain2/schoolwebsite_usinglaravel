<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\schoolclass;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
       $teachers=Teacher::all();
        return view('teacher.index',compact('teachers'));
    }

    public function create(){
        $schoolclasses=schoolclass::all();
        return view('teacher.create',compact('schoolclasses'));
    }

    public function store(Request $request){

        $data=$request->validate([
            'name'=>'required|string',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'date_of_joining'=>'required',
            'mobile'=>'required|numeric',
            'marital_status'=>'required',
            'photopath'=> 'required|image',
            'current_address'=>'required',
            'permanent_address'=>'required',
            'qualification'=>'required',
            'work_experience'=>'required',
            'schoolclass_id'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);

        // storing picture

        $photo = $request->file('photopath');
        $photoname = time() . '.' . $photo->extension();
        $photo->move(public_path('images/teacher/'), $photoname);
        $data['photopath'] = $photoname;

       Teacher::create($data);
        return redirect(route('teacher.index'))->with('success', 'Teacher added Sucessfully');

    }

    public function edit($id){

    $teacher=Teacher::find($id);
    $schoolclasses = SchoolClass::all(); // Get all school classes instead of using get($id)

    return view('teacher.edit',compact('teacher','schoolclasses'));
    }

    public function update(Request $request,$id){

        $data=$request->validate([
            'name'=>'required|string',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'date_of_joining'=>'required',
            'mobile'=>'required|numeric',
            'marital_status'=>'required',
            'photopath'=> 'nullable|image',
            'current_address'=>'required',
            'permanent_address'=>'required',
            'qualification'=>'required',
            'work_experience'=>'required',
            'schoolclass_id'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);

        $teacher=Teacher::find($id);


        if($request->hasFile('photopath')){

            $photo = $request->file('photopath');
            $photoname = time() . '.' . $photo->extension();
            $photo->move(public_path('images/teacher/'), $photoname);
            $data['photopath'] = $photoname;



        $oldphoto=public_path('images/teacher/' . $teacher->photopath);

         if(file_exists($oldphoto)){
           unlink($oldphoto);
         }
         $data['photopath']=$photoname;
        }

         $teacher->update($data);
         return redirect(route('teacher.index'))->with('success', 'Teacher update Sucessfully');

        }

        public function destroy($id){

            $teacher=Teacher::find($id);


            $photo=public_path('images/teacher/'.$teacher->photopath);

            if(file_exists($photo)){
                unlink($photo);
              }

            $teacher->delete();
            return redirect(route('teacher.index'))->with('success', 'Teacher deleted Sucessfully');



        }


}

