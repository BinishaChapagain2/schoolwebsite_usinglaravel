<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\schoolclass;
use App\MOdels\student;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{


    public function index(){
        $schoolclasses=schoolclass::all();
         return view('schoolclass.index',compact('schoolclasses'));
     }

     public function create(){

         return view('schoolclass.create');
     }

     public function store(Request $request){

         $data=$request->validate([
             'name'=>'required|string',



         ]);


        schoolclass::create($data);

         return redirect(route('schoolclass.index'))->with('success', 'Class  added Sucessfully');

     }

     public function edit($id){

     $schoolclass=schoolclass::find($id);


     return view('schoolclass.edit',compact('schoolclass'));
     }

     public function update(Request $request,$id){


        $data=$request->validate([
            'name'=>'required|string',



        ]);

         $schoolclass=schoolclass::find($id);




          $schoolclass->update($data);
          return redirect(route('schoolclass.index'))->with('success', 'class update Sucessfully');

         }

         public function destroy($id){

             $schoolclass=schoolclass::find($id);
             $teachers=teacher::where('schoolclass_id',$id)->count();
             $students=student::where('schoolclass_id',$id)->count();
             if($students>0 OR $teachers>0)
             {
                return redirect(route('schoolclass.index'))->with('success', 'Class cannot be deleted, It has teacher or students!');

             }
             $schoolclass->delete();

             return redirect(route('schoolclass.index'))->with('success', 'Class deleted Sucessfully');
         }






}
