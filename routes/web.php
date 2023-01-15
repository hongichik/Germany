<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/home/pdf', [HomeController::class, 'show_pdf'])->name('show_pdf');

Route::post('/demo', function(Request $request){
    dd($request->files);   
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
