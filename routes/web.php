<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinWaitListController;
use App\Http\Controllers\ContactController;

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
});

Route::get('/about', function () {
    return view('homepages.about');
});

Route::get('/faq', function () {
    return view('homepages.faq');
});

Route::get('/contact', function () {
    return view('homepages.contact');
});

Route::get('/policy', function () {
    return view('homepages.policy');
});

Route::get('/terms', function () {
    return view('homepages.terms');
});

#=========Authentication=======#
Route::get('/signup', function () {
    return view('homepages.register');
});

Route::get('/agency-signup', function () {
    return view('homepages.agency-register');
});

Route::get('/signin', function () {
    return view('homepages.logins');
});

Route::get('/newpassword', function () {
    return view('homepages.newpassword');
});

Route::get('/forgotpassword', function () {
    return view('homepages.forgotpassword');
});

Route::get('/newpassword', function () {
    return view('homepages.newpassword');
});



#==============REALTORS EXTERNAL PAGES=================#
Route::get('realtor/property-details', function () {
    return view('realtors.homepages.realtors-property-details');
});

Route::get('realtor/profile-information', function () {
    return view('realtors.homepages.realtors-profile');
});



#==================DASHBOARD========================#

Route::get('realtor/dashboard', function () {
    return view('realtors.dashboard');
});

Route::get('realtor/properties', function () {
    return view('realtors.properties');
});

Route::get('realtor/create-properties', function () {
    return view('realtors.create-properties');
});

Route::get('realtor/edit-properties', function () {
    return view('realtors.edit-properties');
});

Route::get('realtor/customers', function () {
    return view('realtors.customers');
});

Route::get('realtor/customers-details', function () {
    return view('realtors.customers-details');
});

Route::get('realtor/profile', function () {
    return view('realtors.profile');
});

Route::get('realtor/reviews', function () {
    return view('realtors.reviews');
});

Route::get('realtor/notifications', function () {
    return view('realtors.notifications');
});

Route::get('realtor/customer-schedules', function () {
    return view('realtors.customers-schedule');
});

Route::get('realtor/customer-schedules-details', function () {
    return view('realtors.customer-schedule-details');
});

Route::get('realtor/broadcast-message', function () {
    return view('realtors.broadcast-message');
});

Route::get('realtor/pro-version', function () {
    return view('realtors.pro-version');
});

Route::get('realtor/insight', function () {
    return view('realtors.insight');
});




#==================AGENCY DASHBOARD========================#
Route::get('agency/notificaitons', function () {
    return view('agency.notificaitons');
});
Route::get('agency/booking-appointment', function () {
    return view('agency.bookings-appointment');
});
Route::get('agency/message-inquiry', function () {
    return view('agency.messaging');
});
Route::get('agency/agency-insight', function () {
    return view('agency.agency-insight');
});
Route::get('agency/agency-broadcast-message', function () {
    return view('agency.broadcast-message');
});
Route::get('agency/agency-pro-version', function () {
    return view('agency.proversion');
});
Route::get('agency/dashboard', function () {
    return view('agency.dashboard');
});
Route::get('agency/properties', function () {
    return view('agency.properties');
});
Route::get('agency/create-properties', function () {
    return view('agency.create-properties');
});
Route::get('agency/edit-properties', function () {
    return view('agency.edit-properties');
});

Route::get('agency/realtors', function () {
    return view('agency.realtors');
});
Route::get('agency/create-realtors', function () {
    return view('agency.create-realtors');
});
Route::get('agency/realtors-application', function () {
    return view('agency.realtors-application');
});
Route::get('agency/realtors-schedule-meeting', function () {
    return view('agency.realtors-meeting');
});
Route::get('agency/customers', function () {
    return view('agency.customers');
});
Route::get('agency/customers-details', function () {
    return view('agency.customers-details');
});
Route::get('agency/website-settings', function () {
    return view('agency.website-settings');
});
Route::get('agency/create-colorplates', function () {
    return view('agency.create-colorplate');
});
Route::get('agency/create-faq', function () {
    return view('agency.create-faq');
});
Route::get('agency/create-testimonial', function () {
    return view('agency.create-testimonials');
});
Route::get('agency/profile-settings', function () {
    return view('agency.profile-settings');
});