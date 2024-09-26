<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\schoolclass;

class SubjectController extends Controller
{
    public function index(){
        $subjects=subject::all();
        return view('subject.index',compact('subjects'));
    }


    public function create(){
        $schoolclasses=schoolclass::all();
        return view('subject.create',compact('schoolclasses'));
    }

    public function store(Request $request){
        $data=$request->validate([

        'name'=>'required|string',

        'schoolclass_id'=>'required',


        ]);



          subject::create($data);
           return redirect(route('subject.index'))->with('success', 'Subject added Sucessfully');
    }

    public function edit($id){

        $subject=subject::find($id);

        $schoolclasses = SchoolClass::all(); // Get all school classes instead of using get($id)
        return view('subject.edit',compact('subject','schoolclasses'));
        }



        public function update(Request $request,$id){

            $data=$request->validate([

                'name'=>'required|string',

                'schoolclass_id'=>'required',


                ]);


            $subject=subject::find($id);




             $subject->update($data);
             return redirect(route('subject.index'))->with('success', 'Subject update Sucessfully');

            }

            public function destroy($id){
                $subject=subject::find($id);



                $subject->delete();


                return redirect(route('subject.index'))->with('success', 'Subject deleted Sucessfully');



            }


}
