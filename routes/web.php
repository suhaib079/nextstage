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
    return redirect('/companies');
});
// Company routes
Route::controller(CompanyController::class)->group(function () {
    Route::get('companies', 'index')->name('companies');
    Route::get('company/edit/{id}','edit')->name('companyEdit');
    Route::post('company/edit','edditingcompany')->name('edditingcompany');
    Route::get('company/store', 'store')->name('companystore');
    Route::post('company/store', 'addingcompany')->name('addingcompany');
    Route::post('company/delete','deleteingcompany')->name('deleteingcompany');
});


// Employee routes
Route::controller(EmployeeController::class)->group(function () {
    Route::get('employees', 'index')->name('employees');
    Route::get('employee/edit/{id}', 'edit')->name('employeeEdit');
    Route::post('employee/edit', 'edditingemployee')->name('edditingemployee');
    Route::get('employee/store', 'store')->name('employeestore');
    Route::post('employee/store', 'addingemployee')->name('addingemployee');
    Route::post('employee/delete', 'deleteingemployee')->name('deleteingemployee');
});


Auth::routes();

