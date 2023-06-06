<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function(){
    Route::resource('annoncement',App\Http\Controllers\AnnoncementController::class );
    Route::resource('mail',App\Http\Controllers\MailController::class );
    Route::resource('book',App\Http\Controllers\BookController::class );
    Route::resource('contact',App\Http\Controllers\ContactController::class );
    Route::resource('user',App\Http\Controllers\UserController::class );

});


Route::get('/profile/{id}',[App\Http\Controllers\ProfileController::class,'view'])->name('profile.view');
Route::get('/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');

Route::post('/profile/{user}',[App\Http\Controllers\ProfileController::class,'update'])->name('profile.update');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/view-annoncement', [App\Http\Controllers\AnnoncementViewController::class, 'view'])->name('new');
Route::get('/library', [App\Http\Controllers\BookViewController::class, 'view'])->name('bookview');
Route::get('/library/{file}', [App\Http\Controllers\BookViewController::class, 'download'])->name('bookdownload');
Route::get('/show-book/{id}', [App\Http\Controllers\BookViewController::class, 'show'])->name('bookshow');

Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'create'])->name('contactus.create');
Route::post('/store-contact', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contactus.store');

Route::get('/read-mail', [App\Http\Controllers\ContactUsController::class, 'read'])->name('contactus.read');
Route::get('/mail-box', [App\Http\Controllers\ContactUsController::class, 'all'])->name('contactus.all');

Route::get('/show-annoncement/{id}', [App\Http\Controllers\AnnoncementViewController::class, 'show'])->name('show.new');
