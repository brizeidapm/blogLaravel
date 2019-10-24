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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hola',function (){
     return 'Hola Mundo';
});

Route::get('/prueba',function (){
     return view('layouts.master');
});

Route::get('/prueba2',function (){
       return view('child',['name' =>'Carlos']);
});

Route::get('/prueba1',function (){
     return view('layouts.master',['name' =>'Carlos']);
});

Route::get('/prueba4',function (){
     return view('child2',['name' =>'Brizeida']);
});

Route::get('/prueba3',function (){
       return view('blog',['name' =>'Brizeida', 'surname' =>'Pastelin']);
});

Route::get('/posts/{id}',function ($id){
       return App\Post::find($id);
});

Route::get ('posts','PostController@index');

//Route::get('/home','HomeController@index')->name('home');
//Auth::routes();
