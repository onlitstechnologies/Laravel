<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

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

Route::get('/supplier', [SupplierController::class, 'index']);
//Route::get('/supplier_save',[SupplierController::class, 'store']);
Route::get('/register_supplier', function() {
    return view('register_supplier');
});

Route::post('register_suppliers', [SupplierController::class, 'store']);