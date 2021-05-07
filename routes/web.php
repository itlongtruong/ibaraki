<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'getIndex']);

Route::get('/login', [UserController::class, 'getLogin']);

Route::post('/login', [UserController::class, 'postLogin']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'getRegister']);

Route::get('/form1', [UserController::class, 'getForm1']);

Route::get('/form2', [UserController::class, 'getForm2']);

Route::get('/form3', [UserController::class, 'getForm3']);

Route::get('/form4', [UserController::class, 'getForm4']);

Route::get('/form5', [UserController::class, 'getForm5']);

Route::get('/form6', [UserController::class, 'getForm6']);

Route::get('/form7', [UserController::class, 'getForm7']);