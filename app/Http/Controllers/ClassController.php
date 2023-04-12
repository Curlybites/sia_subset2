<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Professor;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Section;
use Illuminate\Support\Facades\Redis;

class ClassController extends Controller
{
    public function show(){
        return view('creation.class');
    }

    public function create(Request $request){
        // dd($request);
        $validated = $request->validate([
            "class_name"=>['required'],
            "class_num"=>['required'],
            "class_sec"=>['required'],
            "class_prof"=>[ 'required'],
            "class_subj"=>[ 'required']
        ]);

        $classes = Classes::create($validated);

        return redirect('/Class');
    }

    public function classResult(){
        $prof = Professor::all();
        $subj = Subject::all();
        $data = Classes::all();
        return view ('creation.class',['classes' => $data],['subj' => $subj]+['professor' => $prof]);
    }

    public function show_class($id){
        $data = Classes::findorFail($id);
        $list = Professor::all();
        $subject = Subject::all();
        return view('creation.editfile.class_edit',['class' => $data],['professor'=>$list]+['subject'=>$subject]);
    }

    public function update(Request $request, Classes $class){
        $class=Classes::find($request->id);
        $class->class_name=$request->class_name;
        $class->class_num=$request->class_num;
        $class->class_sec=$request->class_sec;
        $class->class_prof=$request->class_prof;
        $class->class_subj=$request->class_subj;
        $class->save();

         return redirect('/Class');

    }

    // inserting student to class

    public function filtercreate(Request $request) {
        //dd($request);
        $validated = $request->validate([
            "student_no"=>['required'],
            "first_name"=>['required'],
            "last_name"=>['required'],
            "age"=>[ 'required'],
            "gender"=>[ 'required'],
            "email"=>[ 'required'],
            "contact_no"=>[ 'required'],
            "class_sec"=>[ 'required'],
            "class_subj"=>[ 'required']
        ]);

        $section = Section::create($validated);

        return redirect('/filterdata');
    }

    public function filterdata(){
        return view ('creation.editfile.filter');
    }

    // public function showClass(){
        
    //     $professor = Professor::all();
    //     $subject = Subject::all();
    //     return view('creation.class',['professor' => $professor],['subject' => $subject]);
     
    //  }
 
     public function getStudent() {
         $p=Student::all();
         return response()->json($p);
     }

     public function test($id){
        $data = Classes::findorFail($id);
        // $list = Section::all();
        // dd($data);
        return view('creation.editfile.filter',['class' => $data]);
    }



}
