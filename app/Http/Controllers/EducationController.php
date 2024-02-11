<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function EducationForm($id){
        $data=Education::all();
        return view('edu_form',compact('id', 'data'));
    }

    public function StoreEducation(Request $request){
        $data= new Education();

        $data->studentId=$request->input('studentId');
        $data->degreeName=$request->input('degreeName');
        $data->instituteName=$request->input('instituteName');
        $data->passingYear=$request->input('passingYear');

        $data->save();
        return back();
    }

    public function EditEducation($id){
        $data=Education::find($id);
        return view('update_edu_form',compact('data'));
    }
    public function DeleteEducation($id){
        Education::destroy($id);
        return back();
    }

    public function StoreUpdatedEducation(Request $request, $id){
        $data=Education::find($id);

        $data->studentId=$request->input('studentId');
        $data->degreeName=$request->input('degreeName');
        $data->instituteName=$request->input('instituteName');
        $data->passingYear=$request->input('passingYear');

        $data->save();
        return redirect()->route('add_edu',$id);
    }


}
