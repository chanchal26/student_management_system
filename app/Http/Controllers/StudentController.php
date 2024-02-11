<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function createStudent(){
        return view('student_form');
    }

    public function storeStudent(Request $request){
        $data=new Student();

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->age=$request->input('age');
        $data->gender=$request->input('gender');
        $data->district=$request->input('district');

        $data->save();
        return redirect()->route('student_list');
    }

    public function studentList(){
        $data=Student::all();
        return view('student_list',compact('data'));
    }

    public function deleteStudent($id){
        Student::destroy($id);
        return back();
    }
    public function editStudent($id){
        $data=Student::find($id);
        return view('update_form',compact('data'));
    }

    public function updateStudent(Request $request,$id){
        $data=Student::find($id);

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->age=$request->input('age');
        $data->gender=$request->input('gender');
        $data->district=$request->input('district');

        $data->save();
        return redirect()->route('student_list');
    }
}
