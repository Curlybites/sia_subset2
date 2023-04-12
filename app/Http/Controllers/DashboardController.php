<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Classes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function studentblade(){
        return view('student.student');
    }

    public function classblade(){
        $id = Auth::User()->lname;
        $subjectcount =  Professor::select("classes.class_subj","class_sec")
        ->join('classes','class_prof', '=' , 'professors.lname')
        ->where('class_prof', '=' ,$id )->count();

        
        $Classes = Classes::select('classes.class_name', 'class_num' , 'class_sec', 'class_subj', 'id')
        ->where('class_prof', '=' , $id)
        ->get();


        return view('class.class',['subjc' => $subjectcount , 'classes' => $Classes]);
    }

  

    // public function show_student($id, Request $request){
    //     $class_sec = $request->input('class_sec');
    //     $class_subj = $request->input('class_subj');
       
    //     $data = array(
    //         "professors" => DB::table('professors')->simplePaginate(10),
    //         "subjects" => DB::table('subjects')->simplePaginate(10),
    //         "students" => DB::table('students')->simplePaginate(10),
    //         "sections" => DB::table('sections')->where('class_sec', $class_sec)
    //         ->where('class_subj', $class_subj)
    //         ->get(),
    //         "class" => classes::findOrFail($id)
    //     );

       
    //     return view('classes.class_view',  $data);
    // }

}
