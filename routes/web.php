<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search/{searchKey}','HomeController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/locale/{lang?}',function ($lang = null){
    if($lang){
        App::setlocale($lang);
    }
    //return config('app.locale');
  return  view('test');
});


Route::get('/sendemail',function (){
    dispatch(new \App\Jobs\SendEmail());
    return "Email send properly";
});

Route::get('/event',function (){
  $event = event(new \App\Event\TaskEvent("I am good"));
  dd($event);
});
