<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Professor;
class AuthController extends Controller
{
  
    public function index(){

        $id = Auth::User()->lname;
        $subject = Professor::select("classes.class_subj","class_sec")
                    ->join('classes','class_prof', '=' , 'professors.lname')
                    ->where('class_prof', '=' ,$id )
                    ->get();
        $subjectcount =  Professor::select("classes.class_subj","class_sec")
        ->join('classes','class_prof', '=' , 'professors.lname')
        ->where('class_prof', '=' ,$id )->count();

        // @dd($subject);
        return view('homepage.home',['subj'=> $subject, 'subjc' => $subjectcount]);
        
    }
    
    public function login(){
        return view('login.login');
    }

    public function handleLogin(Request $request){
        if(Auth::guard('webprofessor')->attempt($request->only(['email','password']))){
            $request->session()->regenerate();
            return redirect()->route('prof.home');
        }

    }

    public function logout(Request $request){
        Auth::guard('webprofessor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('prof.login');
    }


}
