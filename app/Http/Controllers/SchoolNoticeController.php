<?php

namespace App\Http\Controllers;

use App\Models\schoolnotice;
use Illuminate\Http\Request;

class SchoolNoticeController extends Controller
{

public function index(){
    $schoolnotices=schoolnotice::all();
    return view('schoolnotice.index',compact('schoolnotices'));
}


public function create(){
    $schoolnotices=schoolnotice::all();
    return view('schoolnotice.create',compact('schoolnotices'));
}

public function store(Request $request){
    $data=$request->validate([
    'publish_date'=>'required',
    'title'=>'required|string',
    'description'=>'required|string',
    'photopath'=>'required|image',


    ]);

       // storing picture

       $photo = $request->file('photopath');
       $photoname = time() . '.' . $photo->extension();
       $photo->move(public_path('images/schoolnotice/'), $photoname);
       $data['photopath'] = $photoname;

      schoolnotice::create($data);
       return redirect(route('schoolnotice.index'))->with('success', 'schoolnotice added Sucessfully');
}

public function edit($id){

    $schoolnotice=schoolnotice::find($id);
    return view('schoolnotice.edit',compact('schoolnotice'));
    }



    public function update(Request $request,$id){

        $data=$request->validate([
            'publish_date'=>'required',
            'title'=>'required|string',
            'description'=>'required|string',
            'photopath'=>'nullable|image',


            ]);


        $schoolnotice=schoolnotice::find($id);


        if($request->hasFile('photopath')){

            $photo = $request->file('photopath');
            $photoname = time() . '.' . $photo->extension();
            $photo->move(public_path('images/schoolnotice/'), $photoname);
            $data['photopath'] = $photoname;

            $oldphoto=public_path('images/schoolnotice/' . $schoolnotice->photopath);

            if(file_exists($oldphoto)){
              unlink($oldphoto);
            }


          $data['photopath']=$photoname;



        }


         $schoolnotice->update($data);
         return redirect(route('schoolnotice.index'))->with('success', 'schoolnotice update Sucessfully');

        }

        public function destroy($id){
            $schoolnotice=schoolnotice::find($id);
            $photo=public_path('images/schoolnotice/'.$schoolnotice->photopath);

            if(file_exists($photo)){
                unlink($photo);
              }


            $schoolnotice->delete();


            return redirect(route('schoolnotice.index'))->with('success', 'schoolnotice deleted Sucessfully');



        }


}
