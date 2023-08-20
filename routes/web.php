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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



    Route::prefix('task')->group(function () {
        Route::get('/', [App\Http\Controllers\TaskController::class, 'index']);
        Route::get('/add', function () {
            return view('admin.customer.add');
        });
        Route::post('/add', 'TaskController@add');
        Route::get('/updated/{id?}', 'TaskController@updatedView');
        Route::post('/updated/{id?}', 'TaskController@updated');
    });

