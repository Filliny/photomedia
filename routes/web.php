<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/category/{category:slug}', [MainController::class,'category'])->name('category');
Route::get('/article/{article:slug}', [MainController::class,'article'])->name('article');
Route::get('/tag/{tag:slug}', [MainController::class,'tag'])->name('tag');

Route::resource('articles',ArticleController::class)->middleware('auth');
Route::resource('users',RegisteredUserController::class)->middleware('auth');

Route::prefix('user')->name('user.')->middleware(['auth','user'])->group(function(){
    Route::get('/', [DashboardController::class,'user_index'])->name('user');
});


Route::prefix('admin')->name('admin.')->middleware(['auth','admin'])->group(function(){
    Route::get('/', [DashboardController::class,'index'])->name('admin');
    Route::resource('categories',CategoryController::class);
    Route::resource('tags',TagController::class);
    Route::resource('contacts', ContactController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {     \UniSharp\LaravelFilemanager\Lfm::routes();});


//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
