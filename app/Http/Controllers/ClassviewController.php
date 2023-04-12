<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Classes;

class ClassviewController extends Controller
{
    public function showclassview($id, Request $request){
        $class_sec = $request->input('class_sec');
        $class_subj = $request->input('class_subj');
       
        $data = array(
            "professors" => DB::table('professors')->simplePaginate(10),
            "subjects" => DB::table('subjects')->simplePaginate(10),
            "students" => DB::table('students')->simplePaginate(10),
            "sections" => DB::table('sections')->where('class_sec', $class_sec)
            ->where('class_subj', $class_subj)
            ->get(),
            "class" => Classes::findOrFail($id)
        );

       
        return view('class.class_view', $data);
    }


  
  



    
}
