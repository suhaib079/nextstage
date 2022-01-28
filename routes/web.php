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
Route::get('companies', [CompanyController::class, 'index'])->name('companies');

Route::get('company/edit/{id}',[CompanyController::class, 'edit'])->name('companyEdit');
Route::post('company/edit',[CompanyController::class, 'edditingcompany'])->name('edditingcompany');

Route::get('company/store', [CompanyController::class, 'store'])->name('companystore');
Route::post('company/store', [CompanyController::class, 'addingcompany'])->name('addingcompany');

Route::post('company/delete',[CompanyController::class, 'deleteingcompany'])->name('deleteingcompany');

// Employee routes
Route::get('employees',[EmployeeController::class, 'index'])->name('employees');

Route::get('employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employeeEdit');
Route::post('employee/edit', [EmployeeController::class, 'edditingemployee'])->name('edditingemployee');

Route::get('employee/store', [EmployeeController::class, 'store'])->name('employeestore');
Route::post('employee/store', [EmployeeController::class, 'addingemployee'])->name('addingemployee');

Route::post('employee/delete',[EmployeeController::class, 'deleteingemployee'])->name('deleteingemployee');


Auth::routes();

