<?php

namespace App\Http\Controllers;
use App\Models\Professor;
use App\Models\Classes;
use Illuminate\Validation\Rule;
use Illuminate\Support\Fascades\Hash;
use Illuminate\Support\Fascades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{


    public function show(){
        return view('creation.professor');
    }

    // public function login(){
    //     return view('login.login');
    // }


    public function create_prof(Request $request){

        // dd($request);
        $validated = $request->validate([
            'fname' => ['required'],
            'lname' => ['required'],
            'email' => ['required', 'email',Rule::unique('professors','email')],
            'gender' => ['required'],
            'password' => 'required'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $prof = Professor::create($validated);
        return redirect('/Professor');
    }



    public function professor_list(){
        $data = Professor::paginate(5);
        return view('creation.professor',['professors'=>$data]);
    }

    public function show_id($id){
        $data = Professor::findorFail($id);
        // dd($data);
        return view ('creation.editfile.prof_edit', ['prof' => $data]);
    }

    public function update(Request $req, Professor $professor){

        $professor=Professor::find($req->id);
        $professor->fname=$req->fname;
        $professor->lname=$req->lname;
        $professor->email=$req->email;
        $professor->gender=$req->gender;
        $professor->password=$req->password;
        $professor->save();
        return redirect('/Professor');

    }








}
