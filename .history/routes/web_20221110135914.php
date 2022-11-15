<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginControllers;

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
    return view('index');
});


Route::get('/', [HomeController::class, 'HomeIndex']);
Route::post('/DataInsert', [HomeController::class, 'DataInsert']);
Route::get('loginPage', [LoginControllers::class, 'index'])->name('login.page');
Route::post('login/post', [LoginControllers::class, 'customLogin'])->name('login.post');
Route::get('logout', [LoginControllers::class, 'Logout']); 

Route::get('/dashboard', function () {
    return view('admin.admin_index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
