<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','HelloController@index');
Route::get('/del','HelloController@del');
Route::get('/message','HelloController@message');
Route::post('/message','HelloController@message');
Route::post('/namely','HelloController@namely');
Route::post('/delete','HelloController@delete');
Route::get('/img1','HelloController@img1');
Route::post('/img','HelloController@img');
Route::get('/index','SettledController@index');
Route::get('/login','SettledController@login');
Route::post('/login','SettledController@login');
Route::get('/cat','SettledController@cat');
Route::get('/post','SettledController@post');
Route::get('/new_post','SettledController@new_post');
Route::get('/my_resume','ResumeController@my_resume');
Route::post('/my_resume','ResumeController@my_resume');
Route::get('/resume_info','ResumeController@resume_info');
Route::get('/resume_work','ResumeController@resume_work');
Route::get('/resume_last_work','ResumeController@resume_last_work');
Route::get('/resume_last_item','ResumeController@resume_last_item');
Route::get('/resume_last_study','ResumeController@resume_last_study');
Route::get('/resume_my_desc','ResumeController@resume_my_desc');
Route::get('/resume_my_opus','ResumeController@resume_my_opus');
Route::get('/search_push','ResumeController@search_push');
Route::post('/search_push','ResumeController@search_push');
Route::get('/company/index','CompanyController@index');
Route::get('/', function (){
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
/*Route::get('user/{name}', function ($name='shapolang') {    return 'Hello '.$name;});*/
