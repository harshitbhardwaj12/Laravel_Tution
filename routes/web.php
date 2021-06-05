<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller;
use App\Http\Controllers\Tution;

// -----------------Kunal-------------------------------

// -----------------Contolller--------------------------
Route::GET('/', 'App\Http\Controllers\Controller@index');
Route::POST('/basic', 'App\Http\Controllers\Controller@basic_Insert');
Route::POST('/course', 'App\Http\Controllers\Controller@course_Insert');
Route::GET('/get_id', 'App\Http\Controllers\Controller@insert_basic');
Route::GET('/get_course_details', 'App\Http\Controllers\Controller@Course_details');
Route::POST('/info', 'App\Http\Controllers\update@updateInfo');
Route::POST('/update', 'App\Http\Controllers\update@update');
Route::POST('/tutor_reg', 'App\Http\Controllers\Controller@tutor_reg');
Route::POST('/check_email', 'App\Http\Controllers\Controller@tutor_email');

// -----------------Search-------------------------------
Route::GET('/search', 'App\Http\Controllers\search@search');
Route::POST('/searchbyid', 'App\Http\Controllers\search@search_By_Id');
Route::POST('/send_msg', 'App\Http\Controllers\search@contact');
Route::POST('/filter', 'App\Http\Controllers\search@filter');

// -----------------Dashboard----------------------------
Route::GET('/dashboard', function () { return view('dashboard'); });
Route::GET('/visual', 'App\Http\Controllers\search@gender');
Route::GET('/fee_status', 'App\Http\Controllers\search@fee_status');

// -----------------Page supporting-----------------------
Route::POST('/tutor_home', function () { return view('Tutor_home');});
Route::GET('/update', function () { return view('update'); });
Route::GET('/succes', function () { return view('succes'); });
Route::GET('/chat', function () { return view('chat'); });
Route::GET('/tutor_home', function () { return view('Tutor_home'); });
Route::GET('/tutor_signup', function () { return view('tutor_signup');});








// -----------------Harshit----------------------------

Route::get('/forgot', function () {
    return view('forgot');
});
Route::post("api/mail",[Tution::class,'forgot_mail']);

/*------------------------------------THIS IS FOR THE TEACHER LOGIN ROUTE---------------------------- */
Route::get("/teacher",'App\Http\Controllers\Tution@teacher_login');
Route::post("/teacher_login",'App\Http\Controllers\Tution@login');

/*------------------------------------THIS IS FOR THE STUDENT LOGIN ROUTE---------------------------- */
Route::get("/student",'App\Http\Controllers\Tution@student_login');

/*------------------------------------THIS IS FOR THE CHANGE PASSWORD ROUTE---------------------------- */
Route::get('/change_password', function () {
    return view('change_password');
});
Route::post("/change",'App\Http\Controllers\Tution@change_password');


Route::get('/fees', function () {
    return view("fees_alert");
});
Route::post("/ajax",'App\Http\Controllers\Tution@fees');
Route::post("/post",'App\Http\Controllers\Tution@fees_alert');


Route::get('/marks', function () {
    return view("marks_alert");
});
Route::post("/ajax2",'App\Http\Controllers\Tution@marks');
Route::post("/marks",'App\Http\Controllers\Tution@marks_alert');

Route::get('/time', function () {
    return view("timing_alert");
});
Route::post("/ajax3",'App\Http\Controllers\Tution@timing');
Route::post("/time",'App\Http\Controllers\Tution@timing_alert');

Route::get('/syllabus', function () {
    return view("syllabus_alert");
});

Route::post("/ajax4",'App\Http\Controllers\Tution@syllabus');
Route::post("/syllabus",'App\Http\Controllers\Tution@syllabus_alert');

Route::get('/student_content', function () {
    return view("student_content");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


?>





