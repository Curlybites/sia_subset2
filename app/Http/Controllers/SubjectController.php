<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function show(){
        return view('creation.subject');
    }

    public function list(){
        $data = array('subject'=> DB::table('subjects')->orderBy('created_at','asc')->paginate(10));
        return view ('creation.subject',$data);
    }

    public function create_subject(Request $request){
        // dd($request);
        $validated = $request->validate([
            'subj_name' =>['required'],
            'subj_code' =>['required'],
            'subj_unit' =>['required']
        ]);

        $subject = Subject::create($validated);
        return redirect('/Subject');
    }

    public function show_subject($id){
        $data = Subject::findorFail($id);
        // dd($data);
        return view('creation.editfile.subject_edit',['subject' => $data]);
    }

    public function update(Request $req, Subject $subject){
        $subject=Subject::find($req->id);
        $subject->subj_name=$req->subj_name;
        $subject->subj_code=$req->subj_code;
        $subject->subj_unit=$req->subj_unit;
        $subject->save();

         return redirect('/Subject');

    }





}
