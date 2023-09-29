<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/promo', [HomeController::class, 'promo']);
Route::get('/latest', [HomeController::class, 'latest']);
Route::get('/press', [HomeController::class, 'press']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/payment', [HomeController::class, 'payment']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/term', [HomeController::class, 'term']);
Route::get('/coverage', [HomeController::class, 'coverage']);

