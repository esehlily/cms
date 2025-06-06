<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\MyComplaintsController;

use App\Http\Controllers\ComplaintController;





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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/landing', [AuthController::class, 'index'])->name('landing');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSave'])->name('register.post');
Route::middleware(['auth'])->group(function () {
    Route::get('/mycomplaints', [MyComplaintsController::class, 'mycomplaints'])->name('mycomplaints');
    Route::get('/newcomplaints', [ComplaintController::class, 'newcomplaints'])->name('newcomplaints');
    Route::get('/complaints', [ComplaintController::class, 'complaints'])->name('complaints');
});
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/userdashboard', [UserController::class, 'userdashboard'])->name('userdashboard');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admindashboard', [AdminController::class, 'admindashboard'])->name('admindashboard');
});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');




