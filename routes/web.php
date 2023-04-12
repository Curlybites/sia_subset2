<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('homepage.home');
// });

// Route::get('/',[ClassController::class,'show']);

// Route::get('/', [AuthController::class,'index'])->name('homepage.home')->middleware("auth:webprof");
// Route::get('/login', [AuthController::class,'login']);


// Route::get('/',function(){
//     return view('homepage.home');
// })->name('homepage.home');


// Route::get('/',[AuthController::class,'index'])->name('prof.home')->middleware("auth:webprof");
// Route::get('/login',[AuthController::class,'login'])->name('prof.login');
// Route::get('/logout',[AuthController::class,'logout'])->name('prof.logout');
// Route::get('/login',[AuthController::class,'handleLogin'])->name('prof.handleLogin');

// login phase
Route::controller(AuthController::class)->group(function(){
    Route::get('/','index')->name('prof.home')->middleware("auth:webprofessor");
    Route::get('/login','login')->name('prof.login');
    Route::get('/logout','logout')->name('prof.logout');
    Route::post('/login','handleLogin')->name('prof.handleLogin');
});


Route::controller(DashboardController::class)->group(function(){
    Route::get('/Student/Dashboard','studentblade')->name('student.blade')->middleware("auth:webprofessor");
    Route::get('/Class/Dashboard', 'classblade')->name('class.blade')->middleware("auth:webprofessor");
    
   
});




Route::controller(ClassController::class)->group(function (){
    Route::get('/Class','show');
    Route::post('/Class/Create','create');
    Route::put('/Class/{id}','update');
    Route::get('/Class','classResult');
    Route::get('/Class/{id}','show_class');
    Route::get('/filterdata','filterdata');
    Route::get('/filterdata/{id}','test');
    Route::post('/filterdata/','filtercreate');
    Route::get('/filterdatas','getStudent');
    // Route::get('/Class','showClass');

    
});

Route::controller(ProfessorController::class)->group(function (){
    Route::get('/Professor','show');
    Route::get('/Professor', 'professor_list');
    Route::post('/Professor/Create','create_prof');
    Route::get('/prof/{id}','show_id');
    Route::get('/professor/{id}','update');

  
});


Route::controller(SubjectController::class)->group(function (){
    Route::get('/Subject','show');
    Route::get('/Subject','list');
    Route::post('/Subject/Create','create_subject');
    Route::get('/Subject/{id}','show_subject');
    Route::put('/Subject/{id}','update');
});


Route::controller(StudentController::class)->group(function (){
    Route::get('/Student','show');
    Route::post('/Student/Create', 'create');
    Route::get('/Student/{id}', 'show_student');
    Route::get('/Student','student_list');
    Route::put('/Student/{id}','update');

});


Route::controller(ClassviewController::class)->group(function(){
    Route::get('/Class/Dashboard/View/{id}', 'showclassview')->middleware("auth:webprofessor");
});

Route::controller(GradingController::class)->group(function(){

    Route::get('/grading.tvl','grading_list');
    // Route::get('/editTvl','tvledit');
    Route::get('/editTvl/{id}','findStudent');
   // Route::put('/editTvl/{id}','updateScores');
    Route::put('/editTvl/{id}','updateScores');
});




