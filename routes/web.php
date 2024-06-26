<?php

use App\Http\Controllers\ContactFormController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

// @todo закрываю лишнюю ссылку: пока нет нормального личного кабинета, смысла в ней нет
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', static fn() => view('static_pages.home'))->name('home');
// Route::get('/about', static fn() => view('static_pages.about'))->name('about');
Route::get('/services', static fn() => view('static_pages.services'))->name('services');
Route::get('/documents', static fn() => view('static_pages.documents'))->name('documents');
Route::get('/contacts', static fn() => view('static_pages.contacts'))->name('contacts');

Route::post('send', [ContactFormController::class, 'sendEmail'])->name('contactForm.send');
