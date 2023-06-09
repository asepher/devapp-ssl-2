<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'AdminLogin'])->name('admin.login');
Route::get('admin/register',[RegisterController::class, 'AdminRegister'])->name('admin.register');
