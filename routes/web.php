<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAdminController;
use App\Models\Admin;
use App\Http\Controllers\admin\DashboardController;use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('about',[HomeController::class,'about']);
Route::post('about',[HomeController::class,'about']);

Route::get('chart',[HomeController::class,'chart'])->name('chart');
Route::post('chart',[HomeController::class,'chart']);

Route::get('pesan',[HomeController::class,'pesan'])->name('pesan');
Route::post('pesan',[HomeController::class,'pesan']);

Route::get('dashboard',[HomeController::class,'dashboard']);
Route::post('dashboard',[HomeController::class,'dashboard']);

Route::get('master', [HomeController::class, 'master'])->name('master');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [LoginController::class, 'login'])->name('login');
Route::post('home', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('admin/loginadmin', [LoginAdminController::class, 'showLoginForm'])->name('admin.loginadmin');
Route::post('admin/loginadmin', [LoginAdminController::class, 'loginadmin']);
Route::post('admin/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');
Route::get('admin/adminlogin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::post('loginadmin', [LoginAdminController::class, 'loginadmin'])->name('loginadmin');

// tidak bisa manggil name usernya






