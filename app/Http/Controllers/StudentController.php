<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function Show(){
        return view('creation.student');
    }

    public function create(Request $request){

        // dd($request);
        $validated = $request->validate([
            'stud_num' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required','email',Rule::unique('students','email')],
            'age' => ['required'],
            'gender' => ['required'],
        ]);

        $student = Student::create($validated);

        return redirect('/Student');
    }

    public function show_student($id){
        $data = Student::findorFail($id);
        // dd($data);
        return view('creation.editfile.student_edit',['student' => $data]);
    }

    public function update(Request $req, Student $student){
        $student=Student::find($req->id);
        $student->stud_num=$req->stud_num;
        $student->first_name=$req->first_name;
        $student->last_name=$req->last_name;
        $student->age=$req->age;
        $student->gender=$req->gender;
        $student->email=$req->email;
        $student->save();
         return redirect('/Student');
    }


    public function student_list(){
        $data = Student::all();   
        return view ('creation.student',['students'=>$data]);
    }

    



}
