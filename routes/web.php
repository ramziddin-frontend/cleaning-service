<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'main']);
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/service', [MainController::class, 'service'])->name('service');
Route::get('/project', [MainController::class, 'project'])->name('project');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/single', [MainController::class, 'single'])->name('single');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
