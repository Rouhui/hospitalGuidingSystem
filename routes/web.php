<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('hospital.index');
});

Route::get('Home/About', function () {
    return view('hospital.about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('register', ['as' => 'register', function(){
    return view('hospital.register');
}]);

Route::get('Home/Service/{id}', ['uses' => 'MemberController@info2'])
    ->where('id', '[0-9]+');

Route::group(['middleware' => ['web']], function (){
    Route::any('Home/Service', ['uses' => 'IndexController@service', 'type'=>'booking']);
    Route::any('Home/Service/{type}', ['uses' => 'IndexController@subService']);
    Route::any('Home/Department', ['uses' => 'IndexController@department']);

    Route::any('student/create', ['uses' => 'StudentController@create']);
    Route::any('student/save', ['uses' => 'StudentController@save']);
    Route::any('student/update/{id}', ['uses' => 'StudentController@update']);
    Route::any('student/detail/{id}', ['uses' => 'StudentController@detail']);
    Route::any('student/delete/{id}', ['uses' => 'StudentController@delete']);
});
