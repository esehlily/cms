<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\UserController;

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
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

});
Route::middleware(['user-access:user'])->group(function () {
    Route::get('/mycomplaints', [ComplaintController::class, 'mycomplaints'])->name('mycomplaints');
    Route::get('/newcomplaints', [ComplaintController::class, 'newcomplaints'])->name('newcomplaints');
    Route::get('/showcomplaints/{complaint}', [ComplaintController::class, 'showcomplaints'])->name('showcomplaints');
    Route::post('/storecomplaints', [ComplaintController::class, 'store'])->name('storecomplaints');
});
Route::middleware(['user-access:admin'])->group(function () {
    Route::get('/complaints', [AdminController::class, 'complaints'])->name('complaints');
    Route::get('/managecomplaints/{complaint}', [AdminController::class, 'show'])->name('managecomplaints');
    // Route::get('/complaints/{complaint}/update-status', [AdminController::class, 'showUpdateStatusForm'])->name('complaints.update-status-form');
    Route::post('/complaints/{complaint}/update-status', [AdminController::class, 'updateStatus'])->name('complaints.update-status');
});
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/userdashboard', [UserController::class, 'userdashboard'])->name('userdashboard');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admindashboard', [AdminController::class, 'admindashboard'])->name('admindashboard');
});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');




