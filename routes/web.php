<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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

Route::get('/',[WebController::class,'index'])->name('home');
Route::get('/about-us',[WebController::class,'aboutUs'])->name('aboutUs');
Route::get('/contact-us',[WebController::class,'contactUs'])->name('contactUs');



require __DIR__ . '/admin.php';
