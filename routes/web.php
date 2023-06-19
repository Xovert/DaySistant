<?php

use App\Http\Controllers\AssistantController;
use App\Http\Controllers\FormPekerjaanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
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
    return view('home');
})->name('home');

Route::get('/faq', function(){
    return view('faq');
})->name('faq');

Route::get('/faq',[QuestionController::class, 'getFAQPage'])->name('faq');
Route::get('/submit-faq',[QuestionController::class, 'getSubmitFAQ'])->name('submitFAQ');
Route::post('/faq-final', [QuestionController::class, 'createQuestion'])->name('faqFinal');
// Route::get('/assistant', function() {
//     return view('assistant');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'getProfile'])->name('profilePage');
    Route::get('/profile/edit',[UserController::class, 'getUpdatePage'])->name('editProfilePage');
    Route::patch('/profile/edit', [UserController::class, 'updateProfile'])->name('editProfile');

    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','IsUserMiddleware'])->group(function () {
    Route::get('/form-kerja',[FormPekerjaanController::class, 'getFormPage'])->name('getForm');
    Route::post('/form-kerja',[OrderController::class, 'createOrder'])->name('createOrder');

    Route::get('/payment/{id}',[FormPekerjaanController::class, 'getPaymentPage'])->name('paymentPage');
    Route::post('/payment/{id}', [OrderController::class, 'createPayment'])->name('createPayment');
    Route::get('/payment-final',[FormPekerjaanController::class, 'getPaymentFinal'])->name('paymentFinal');

    Route::get('/history-customer',[UserController::class, 'getHistoryPage'])->name('customerHistory');
    Route::patch('history-customer/{id}',[UserController::class, 'cancelOrder'])->name('customerCancel');
});

Route::middleware(['auth','IsAssistantMiddleware'])->group(function () {
    Route::get('/assistant', [AssistantController::class, 'getAssistantHome'])->name('assistantHome');
    Route::get('/assistant/{id}',[AssistantController::class, 'selectOrder'])->name('selectOrder');
    Route::patch('/assistant/{id}',[AssistantController::class, 'respondOrder'])->name('respondOrder');
    
    Route::get('history',[AssistantController::class, 'getHistoryPage'])->name('assistantHistory');
    Route::patch('history/{id}',[AssistantController::class, 'cancelOrder'])->name('assistantCancel');
});

require __DIR__.'/auth.php';
