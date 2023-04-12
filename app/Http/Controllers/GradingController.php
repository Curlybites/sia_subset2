<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Professor;
use App\Models\Student;
use Illuminate\Support\Facades\Request as Input;
use Illuminate\Http\Request;

class GradingController extends Controller
{
    public function grading_list()
    {
        $section = Classes::all();
        $data = Section::where('class_sec', Input::get('sections'))->get();

        return view('grading.tvl', ['list' => $data]+['section' => $section]);
    }

    // public function tvledit(){
        
    //     return view ('grading.editTvl');
    // }
    
    public function findStudent($id){

        $data = Section::findorfail($id);
        $list = Section::all();

        return view('grading.editTvl',['sec' => $data],['list' => $list]);

    }


    public function updateScores(Request $request, Section $section){
          
          $section=Section::find($request->id);
          $section->WH1=$request->WH1;
          $section->WH2=$request->WH2;
          $section->WH3=$request->WH3;
          $section->WH4=$request->WH4;
          $section->WH5=$request->WH5;
          $section->WH6=$request->WH6;
          $section->WH7=$request->WH7;
        //   $section->WH8=$request->WH8;
        //   $section->WH9=$request->WH9;
        //   $section->WH10=$request->WH10;
          $section->WHTOTAL=$request->WHTOTAL;
          $section->WHPGPS=$request->WHPGPS;
          $section->WHPGWS=$request->WHPGWS;
          $section->WS1=$request->WS1;
          $section->WS2=$request->WS2;
          $section->WS3=$request->WS3;
          $section->WS4=$request->WS4;
          $section->WS5=$request->WS5;
          $section->WS6=$request->WS6;
          $section->WS7=$request->WS7;
        //   $section->WS8=$request->WS8;
        //   $section->WS9=$request->WS9;
        //   $section->WS10=$request->WS10;
          $section->WSTOTAL=$request->WSTOTAL;
          $section->WSCPS=$request->WSCPS;
          $section->WSCWS=$request->WSCWS;
          $section->PH1=$request->PH1;
          $section->PH2=$request->PH2;
          $section->PH3=$request->PH3;
          $section->PH4=$request->PH4;
          $section->PH5=$request->PH5;
          $section->PH6=$request->PH6;
        //   $section->PH7=$request->PH7;
        //   $section->PH8=$request->PH8;
        //   $section->PH9=$request->PH9;
        //   $section->PH10=$request->PH10;
          $section->PHTOTAL=$request->PHTOTAL;
          $section->PHPGPS=$request->PHPGPS;
          $section->PHPGWS=$request->PHPGWS;
          $section->PS1=$request->PS1;
          $section->PS2=$request->PS2;
          $section->PS3=$request->PS3;
          $section->PS4=$request->PS4;
          $section->PS5=$request->PS5;
          $section->PS6=$request->PS6;
        //   $section->PS7=$request->PS7;
        //   $section->PS8=$request->PS8;
        //   $section->PS9=$request->PS9;
        //   $section->PS10=$request->PS10;
          $section->PSTOTAL=$request->PSTOTAL;
          $section->PPSCPS=$request->PPSCPS;
          $section->PPSCWS=$request->PPSCWS;
        
          $section->save();
    
            return redirect('/grading.tvl')->with('message','Successfully Created');

       }
}
