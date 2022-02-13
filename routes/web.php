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
//Route methode
Route::get('/', function () {
    return view('welcome');
});


Route::get('home','HomeControllers@index');

Route::get('admin','Admin\AdminControllers@index');

//ROute Prameer

Route::get('/post/{id}', function () {
    return "This Is Posts Page ";
});

//Route Prameter Opshnal

Route::get('/user/{id?}', function () {
    return "This Is Posts Page ";
});
/*
Route::prefix('admin')->group( function (){

    Route::get('/',function (){
        return "This is admin Page";
    });

    Route::get('/create',function (){
        return "This is Cereate  Page";
    });

    Route::get('/edit',function (){
        return "This is edit  Page";
    });

});
*/

Route::resource('posts','PostsController');

