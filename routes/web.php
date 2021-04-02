<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/leadership', [MainController::class, 'leadership'])->name('leadership');
Route::get('/documents', [MainController::class, 'documents'])->name('documents');
Route::get('/documents/{slug}', [MainController::class, 'viewDocument'])->name('viewDocument');
Route::get('/rules', [MainController::class, 'rules'])->name('rules');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/posts', [MainController::class, 'posts'])->name('posts');
Route::get('/oav', [MainController::class, 'oav'])->name('oav');
Route::get('/detail/{slug}', [MainController::class, 'detail'])->name('detail');
Route::get('/regions', [MainController::class, 'regions'])->name('regions');
Route::get('/regions/{slug}', [MainController::class, 'viewRegion'])->name('viewRegion');

Route::get('/search', [MainController::class, 'search'])->name('search');
Route::get('/cources', [MainController::class, 'cources'])->name('cources');
Route::get('/cources/{slug}', [MainController::class, 'viewCource'])->name('viewCource');
Route::get('/faq', [MainController::class, 'faq'])->name('faq');
Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');
Route::get('/videos', [MainController::class, 'videos'])->name('videos');
Route::get('/structure', [MainController::class, 'structure'])->name('structure');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
