<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exam;

class ExamController extends Controller
{
public function index(){
    $exams=exam::all();
     return view('exam.index',compact('exams'));
 }

 public function create(){

     return view('exam.create');
 }

 public function store(Request $request){

     $data=$request->validate([
         'name'=>'required|string',



     ]);


    exam::create($data);

     return redirect(route('exam.index'))->with('success', 'Exam type  added Sucessfully');

 }

 public function edit($id){

 $exam=exam::find($id);


 return view('exam.edit',compact('exam'));
 }

 public function update(Request $request,$id){


    $data=$request->validate([
        'name'=>'required|string',



    ]);

     $exam=exam::find($id);




      $exam->update($data);
      return redirect(route('exam.index'))->with('success', 'Exam type update Sucessfully');

     }

     public function destroy($id){

         $exam=exam::find($id);

         $exam->delete();

         return redirect(route('exam.index'))->with('success', 'Exam type deleted Sucessfully');
     }

    }






