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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'App\Http\Controllers\NewsController@showHome');
Route::get('/', function () {
    return view('home');
});

Route::get('/services', 'App\Http\Controllers\NewsController@showServices' );


Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact']);
//Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/product', function () {
    return view('product');
});



Route::get('/actualite/{id}', 'App\Http\Controllers\NewsController@showNew');
Route::get('/actualites', 'App\Http\Controllers\UsersController@showNews');


Route::get('/admin' ,  '\App\Http\Controllers\UsersController@showUsers' );
Route::get('/adminplans' ,  '\App\Http\Controllers\AdminController@adminProducts' );
Route::get('/adminnews' ,  '\App\Http\Controllers\AdminController@adminNews' );
Route::get('/deleteuser/{id}' ,  '\App\Http\Controllers\UsersController@deleteUser' );
Route::get('/edituser/{id}' ,  '\App\Http\Controllers\UsersController@editUser' );


Route::get('/sendemail', 'ContactController@index');
Route::post('/sendemail/send', 'ContactController@send');


Route::get('/faq', function () {
    return view('faq');
});

Route::fallback(function() {
    return view('404'); // la vue
});


Route::get('/home', function () {
    return view('admin');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
