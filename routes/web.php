<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JoinWaitListController;

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

Route::fallback(function () {
    // Your fallback logic here
    return  redirect("/");
});

#*********MESSAGE AND WAIT LIST*********#
Route::post('/submit-form', [JoinWaitListController::class, 'submitForm'])->name('submitForm');
Route::post('/submit-message', [ContactController::class, 'SendMessage'])->name('submitMessage');


#=========HOMEPAGES=======#
Route::get('/', function () {
    return view('homepages.index');
})->name('home');

Route::get('/about', function () {
    return view('homepages.about');
})->name('about');

Route::get('/faq', function () {
    return view('homepages.faq');
})->name('faq');

Route::get('/contact', function () {
    return view('homepages.contact');
})->name('contact');

Route::get('/policy', function () {
    return view('homepages.policy');
})->name('policy');

Route::get('/terms', function () {
    return view('homepages.terms');
})->name('terms');

#=========Authentication=======#
Route::get('/signup', function () {
    return view('homepages.register');
})->name('signup');

Route::post('logout', function () {
    
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('signin');
    
})->name('logout');

Route::get('/agency-signup', function () {
    return view('homepages.agency-register');
})->name('agency-signup');

Route::get('/signin', function () {
    return view('homepages.logins');
})->name('signin');

Route::get('/newpassword', function () {
    return view('homepages.newpassword');
})->name('new-password');

Route::get('/forgotpassword', function () {
    return view('homepages.forgotpassword');
})->name('forgot-password');


#==============REALTORS EXTERNAL PAGES=================#
Route::get('property-details', function () {
    return view('realtors.homepages.realtors-property-details');
})->name('property-details');

Route::get('profile-information/{slug}', function () {
    return view('realtors.homepages.realtors-profile');
})->name('realtor.profile-information');
