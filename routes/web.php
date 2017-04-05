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

Route::get('Home/Service', function () {
    return view('hospital.service');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('register', ['as' => 'register', function(){
    return view('hospital.register');
}]);

Route::get('Home/Service/{id}', ['uses' => 'MemberController@info2'])
    ->where('id', '[0-9]+');
