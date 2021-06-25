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


/*  Website page  */


Route::get('/faq', function () {return view('faq');});

Route::fallback(function() {return view('404');});

Route::get('/services', 'App\Http\Controllers\NewsController@showServices' );

Route::get('/product', function () {return view('product');});
Route::post('/product', 'App\Http\Controllers\CheckoutController@store' );

Route::get('/contact', function () { return view('contact');});
Route::post('/contact', '\App\Http\Controllers\ContactController@sendMail');

Route::get('/', 'App\Http\Controllers\NewsController@showHome');
Route::get('/', [\App\Http\Controllers\NewsController::class, 'showHome']);

Route::get('/actualites', [\App\Http\Controllers\UsersController::class, 'showNews']);

Route::get('/actualite/{id}', 'App\Http\Controllers\NewsController@showNew');


/*  Admin Page  */

Route::get('/admin' ,  '\App\Http\Controllers\UsersController@showUsers' );
Route::get('/deleteuser/{id}' ,  '\App\Http\Controllers\UsersController@deleteUser' );
Route::get('/edituser/{id}' ,  '\App\Http\Controllers\UsersController@editUser' );


Route::get('/admindashboard' ,  '\App\Http\Controllers\AdminController@showDashboard' );

Route::get('/adminplans' ,  '\App\Http\Controllers\AdminController@adminProducts' );

Route::get('/adminnews' ,  '\App\Http\Controllers\AdminController@adminNews' );
Route::get('/deletenew/{id}' ,  '\App\Http\Controllers\NewsController@deleteNew' );
Route::get('/editnew/{id}' ,  '\App\Http\Controllers\NewsController@editNew' );

Route::get('/newsform' ,  '\App\Http\Controllers\AdminController@newsForm' );
Route::get('/addactuality' ,  '\App\Http\Controllers\AdminController@newsForm' );



Route::get('/home', function () {
    return view('admin');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
