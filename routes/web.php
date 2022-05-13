<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Requests\MessageContactFormRequest;
use App\Mail\MessageContactForm;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', static fn() => view('static_pages.home'))->name('home');
// Route::get('/about', static fn() => view('static_pages.about'))->name('about');
Route::get('/services', static fn() => view('static_pages.services'))->name('services');
Route::get('/documents', static fn() => view('static_pages.documents'))->name('documents');
Route::get('/contacts', static fn() => view('static_pages.contacts'))->name('contacts');

Route::post('send', [ContactFormController::class, 'sendEmail'])->name('contactForm.send');
// тестирование разметки email
Route::any('/testMessageContactForm', static function (MessageContactFormRequest $request) {
    $messageData = $request->validated();
    return new MessageContactForm($messageData);
})->name('contactForm.testSend');
