<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodosController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::resource('/todos', TodosController::class)->only(['index', 'create', 'store'])->middleware('auth');

Route::group(['middleware' => 'guest'], function(){
  Route::get('login', [LoginController::class, 'index'])->name('login');
  Route::post('login', [LoginController::class, 'store'])->name('login.store');
  Route::get('register', [RegisterController::class, 'index']) -> name('register');
  Route::post('register', [RegisterController::class, 'store']) -> name('register.store');
});

Route::get('logout', function(){
  auth()->logout();
  return redirect('/');
})->name('logout');
