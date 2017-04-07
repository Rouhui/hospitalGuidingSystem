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
    return view('index');
});

Route::get('Home/About', function () {
    return view('hospital.about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('register', ['as' => 'register', function(){
    return view('hospital.register');
}]);


//Route::group(['middleware' => ['web']], function (){
    Route::any('Home/Service', ['uses' => 'IndexController@service', 'type'=>'booking']);
    Route::any('Home/Service/{type}', ['uses' => 'IndexController@subService']);
    Route::any('Home/Department', ['uses' => 'IndexController@department'])->name('department');
    Route::any('Home/Department/detail_{id}', ['uses' => 'IndexController@departmentDetail'])->name('departmentDetail');
    Route::any('Home/Expert', ['uses' => 'IndexController@expert'])->name('expert');;
    Route::any('Home/Expert/detail_{id}', ['uses' => 'IndexController@expertDetail'])->name('expertDetail');

    Route::any('student/create', ['uses' => 'StudentController@create']);
    Route::any('student/save', ['uses' => 'StudentController@save']);
    Route::any('student/update/{id}', ['uses' => 'StudentController@update']);
    Route::any('student/detail/{id}', ['uses' => 'StudentController@detail']);
    Route::any('student/delete/{id}', ['uses' => 'StudentController@delete']);
//});
