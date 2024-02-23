<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view ('welcome');
});


Route::get('/add-employee', [EmployeeController::class, 'create'])->name('create');

Route::post('/store', [EmployeeController::class, 'store'])->name('store');

Route::get('/dashboard', [EmployeeController::class, 'show'])->name('dashboard');

Route::get('/edit-employee/{id}', [EmployeeController::class, 'edit'])->name('edit');

Route::patch('/update-employee/{id}', [EmployeeController::class, 'update'])->name('update');

Route::delete('/delete-employee/{id}', [EmployeeController::class, 'destroy'])->name('destroy');

Route::resource('employees', EmployeeController::class);
