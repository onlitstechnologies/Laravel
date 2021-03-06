<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckForFirstLogin;
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
    return view('user.signin');
})->middleware('admin.config', 'first.login');

Route::resource('user', UserController::class);
Route::post('configure_admin', [UserController::class, 'configure_admin']);