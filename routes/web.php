<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//
//
// KLANTEN
//
//
Route::get('/', [MenuController::class, 'index'])->name('index');
Route::get('/menu', [MenuController::class, 'show'])->name('menu');
Route::get('/menu/order', [MenuController::class, 'order'])->name('order');
Route::post('/menu/', [MenuController::class, 'addToOrder'])->name('addToOrder');
Route::post('/menu/remove', [MenuController::class, 'removeFromOrder'])->name('removeFromOrder');
Route::post('/menu/order/place', [MenuController::class, 'placeOrder'])->name('placeOrder');


//
//
// MEDEWERKERS
//
//

Route::get('employee/', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employeeIndex')->middleware('auth');
Route::get('employee/orders', [App\Http\Controllers\EmployeeController::class, 'orders'])->name('employeeOrders')->middleware('auth');
Route::post('employee/orders/complete', [App\Http\Controllers\EmployeeController::class, 'completeOrder'])->name('completeOrder')->middleware('auth');
Route::post('employee/orders/remove', [App\Http\Controllers\EmployeeController::class, 'removeOrder'])->name('removeOrder')->middleware('auth');



