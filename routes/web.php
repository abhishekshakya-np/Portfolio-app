<?php

use App\Http\Controllers\PageController;
use App\Livewire\ContactForm;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');
//Route::resource('blogs',PageController::class);
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
//Route::get('/contactus', ContactForm::class);

/*

Route::post('/images', [ImageController::class, 'store'])->name('images.store');
Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::get('/upload', [ImageController::class, 'create'])->name('images.create');




Route::resource('blogs', BlogController::class);


Route::resource('website-contains', WebsiteContainController::class);*/
