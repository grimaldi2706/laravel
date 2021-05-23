<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasDiariasController;
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

Route::resource('/task', TareasDiariasController::class);

/*
Route::get('/task', function () {
    return view('task');
});
*/
Route::get('/', function () {
    #return view('index');
    return "aca no es";
});