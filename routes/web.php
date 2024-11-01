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
    return view('homepages.contact-us');
})->name('contact');

Route::get('/policy', function () {
    return view('homepages.policy');
})->name('policy');

Route::get('/terms', function () {
    return view('homepages.terms');
})->name('terms');

Route::get('/agency-and-realtor', function () {
    return view('homepages.agency-and-realtor');
})->name('agency-and-realtor');



#=========Authentication=======#
Route::get('/signup', function () {
    return view('homepages.register');
})->name('signup');

Route::get('/email-verification', function(){
    return view('homepages.email-verification');
})->name('email.verification');

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

Route::get('/newpassword/{token}', function ($token) {
    return view('homepages.newpassword', ['token' => $token]);
})->name('new-password');

Route::get('/forgotpassword', function () {
    return view('homepages.forgotpassword');
})->name('forgot-password');


#==============REALTORS EXTERNAL PAGES=================#
Route::get('realtor/{slug}/property-details/{property_id}', function () {
    return view('realtors.homepages.realtors-property-details');
})->name('realtor-property-details');

Route::get('realtor/profile/{slug}', function () {
    return view('realtors.homepages.realtors-profile');
})->name('realtor.profile-information');



#==============AGENCIES EXTERNAL PAGES=================#
Route::get('agency/{slug}/home', function(){
    return view('agency.homepages.index-home');
})->name('agency-home');

Route::get('agency/{slug}/about', function(){
    return view('agency.homepages.aboutus');
})->name('agency-about');

Route::get('agency/{slug}/properties', function(){
    return view('agency.homepages.properties');
})->name('agency-properties');

Route::get('agency/{slug}/realtor/{realtor_slug}/{property_id}/property-description', function(){
    return view('agency.homepages.property-details');
})->name('agency-property-description');

Route::get('agency/{slug}/faq', function(){
    return view('agency.homepages.faq');
})->name('agency-faq');

Route::get('agency/{slug}/contact', function(){
    return view('agency.homepages.contact-us');
})->name('agency-contact');

Route::get('agency/{slug}/realtors-application', function(){
    return view('agency.homepages.realtors-application');
})->middleware('auth')->name('agency-realtor-application');

Route::get('agency/{slug}/realtors', function(){
    return view('agency.homepages.realtors');
})->name('agency-realtors');

Route::get('agency/{slug}/realtor/profile/{realtor_slug}', function () {
    return view('agency.homepages.realtor-profile');
})->name('agency-realtor-profile-information');



