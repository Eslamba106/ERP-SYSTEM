<?php

use App\Http\Controllers\admin\Admin_panel_settingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;

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

Route::group(['namespace'=>'admin' , 'prefix'=>'admin' , 'middleware'=>'auth:admin'],function () {
    Route::get('/' , [DashboardController::class ,'index'])->name('admin.dashboard');
    Route::get('/logout' , [LoginController::class ,'logout'])->name('admin.logout');
    Route::get('/adminpanelsettings/index' , [Admin_panel_settingsController::class ,'index'])->name('admin.AdminPanelSettings.index');
});
Route::group(['namespace'=>'admin' , 'prefix'=>'admin' , 'middleware'=>'guest:admin'],function () {
    Route::get('login' , [LoginController::class ,'show_login_view'])->name('admin.showlogin');
    Route::post('login' , [LoginController::class ,'login'])->name('admin.login');
});                     