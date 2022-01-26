<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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
    return redirect('/home');
});
// Company routes
Route::get('companies', [CompanyController::class, 'index']);
Route::get('company/edit/{id}',[CompanyController::class, 'edit']);
Route::get('company/store', [CompanyController::class, 'store']);

// Employee routes
Route::get('employees',[EmployeeController::class, 'index']);
Route::get('employee/edit/{id}', [EmployeeController::class, 'edit']);
Route::get('employee/store', [EmployeeController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
