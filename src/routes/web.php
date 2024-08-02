<?php

use App\Http\Controllers\ContactController;
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
Route::get('/', [ContactController::class,'index']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::post('/register', [ContactController::class, 'register'] );
Route::get('/login',[ContactController::class, 'login']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/thanks', [ContactController::class, 'thanks']);