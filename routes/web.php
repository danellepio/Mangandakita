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


/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('pages.signup');
}); 

Route::get('/menu', function(){
    return view('pages.menu');
})->middleware('auth');

Route::get('/placeorder', function(){
    return view('pages.placeorder');
})->middleware('auth');

Route::get('/techstack', function(){
    return view('pages.technologystack');
});

Route::get('/account', function(){
    return view('pages.account');
});

Route::get('/contact', function(){
    return view('pages.contact');
});
*/

Auth::routes();

Route::get('/home', function () {
    return view ('home');
})->middleware('auth');

//LANDING PAGE
Route::get('/', function () {
    return view ('pages.index');
});

Route::get('/placeorder', [App\Http\Controllers\OrdersController::class, 'create'])->middleware('auth');
Route::post('/p', [App\Http\Controllers\OrdersController::class, 'store']);


//PAGE ROUTES
Route::get('/menu', [App\Http\Controllers\PagesController::class, 'menu']);
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact']);
Route::get('/techstack', [App\Http\Controllers\PagesController::class, 'techstack']);

Route::get('account/{username}/edit', [App\Http\Controllers\PagesController::class, 'edit']);
Route::patch('account/{username}', [App\Http\Controllers\PagesController::class, 'update']);

//ADMIN ROUTES
Route::get('/adminorders', [App\Http\Controllers\OrdersController::class, 'index'])->middleware('auth'); //VIEW ORDERS
Route::get('/adminorders/{id}', [App\Http\Controllers\OrdersController::class, 'show'])->middleware('auth'); //VIEW SPECIFIC ORDER
Route::post('/adminorders/filter', [App\Http\Controllers\OrdersController::class, 'filter'])->middleware('auth'); // FILTER ORDERS
Route::post('/adminorders/filterordertype', [App\Http\Controllers\OrdersController::class, 'filterordertype'])->middleware('auth'); // FILTER ORDERTYPE ORDERS
Route::post('/adminorders/search', [App\Http\Controllers\OrdersController::class, 'search'])->middleware('auth'); // SEARCH ORDERS
Route::patch('/adminorders/{id}', [App\Http\Controllers\OrdersController::class, 'update'])->middleware('auth'); // UPDATE ORDER TO DELIVERED OR TO DELIVER


