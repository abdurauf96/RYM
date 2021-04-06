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

Route::get('/locale/{locale}', function ($locale) {
    session(['locale'=>$locale]);
     return back();
});

Route::get('/documents', [MainController::class, 'documents'])->name('documents'); //done ++
Route::get('/documents/{slug}', [MainController::class, 'viewDocument'])->name('viewDocument'); //done ++

Route::get('/news', [MainController::class, 'news'])->name('news'); //done++
Route::get('/news/{slug}', [MainController::class, 'viewNews'])->name('viewNews'); //done++

Route::get('/posts', [MainController::class, 'posts'])->name('posts'); //done ++
Route::get('/posts/{slug}', [MainController::class, 'viewPost'])->name('viewPost'); //done ++

Route::get('/oav', [MainController::class, 'oav'])->name('oav'); //done ++
Route::get('/oav/{slug}', [MainController::class, 'viewOav'])->name('viewOav'); //done ++

Route::get('/regions', [MainController::class, 'regions'])->name('regions'); //done ++
Route::get('/district/{slug}', [MainController::class, 'viewDistrict'])->name('viewDistrict'); //done ++

Route::get('/courses', [MainController::class, 'cources'])->name('cources'); //done ++
Route::get('/courses/{slug}', [MainController::class, 'viewCource'])->name('viewCource'); //done ++

Route::get('/event/{slug}', [MainController::class, 'viewEvent'])->name('viewEvent'); //done ++

Route::get('/', [MainController::class, 'home'])->name('home'); //done++
Route::get('/about', [MainController::class, 'about'])->name('about'); //done ++
Route::get('/leadership', [MainController::class, 'leadership'])->name('leadership'); //done ++
Route::get('/rules', [MainController::class, 'rules'])->name('rules'); //done ++
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/search', [MainController::class, 'search'])->name('search');
Route::get('/faq', [MainController::class, 'faq'])->name('faq'); //done ++
Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery'); //done +++
Route::get('/videos', [MainController::class, 'videos'])->name('videos'); //done ++
Route::get('/structure', [MainController::class, 'structure'])->name('structure');

Route::post('/sign-in', [MainController::class, 'signIn']); //done ++
Route::post('/like', [MainController::class, 'like']); //done ++
Route::post('/subscribe', [MainController::class, 'subscribe']); //done ++


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
