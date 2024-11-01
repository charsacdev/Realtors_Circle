<?php

use Illuminate\Support\Facades\Route;

Route::get('notificaitons', function () {
    return view('agency.notificaitons');
})->name('notification');

Route::get('booking-appointment', function () {
    return view('agency.bookings-appointment');
})->name('booking-appointment');

Route::get('message-inquiry/{id}', function ($id) {
    return view('agency.messaging', ['inquiry_id' => $id]);
})->name('message-inquiry');

Route::get('agency-insight', function () {
    return view('agency.agency-insight');
})->name('insight');

Route::get('agency-broadcast-message', function () {
    return view('agency.broadcast-message');
})->name('broadcast-message');

Route::get('agency-pro-version', function () {
    return view('agency.proversion');
})->name('proversion');

Route::get('dashboard', function () {
    return view('agency.dashboard');
})->name('dashboard');

Route::get('properties', function () {
    return view('agency.properties');
})->name('properties');

Route::get('create-properties', function () {
    return view('agency.create-properties');
})->name('properties.create');

Route::get('edit-properties/{id}', function ($id) {
    return view('agency.edit-properties', ['property_id' => $id]);
})->name('properties.edit');

Route::get('realtors', function () {
    return view('agency.realtors');
})->name('realtors');

Route::get('realtor-profile-details/{id}', function($id) {
    return view('agency.realtor-profile-details', ['realtor_id' => $id]);
})->name('realtor-profile-details');

Route::get('create-realtors', function () {
    return view('agency.create-realtors');
})->name('realtors.create');

Route::get('realtors-application/{id}', function ($id) {
    return view('agency.realtors-application', ['application_id' => $id]);
})->name('realtors-application');

Route::get('realtors-schedule-meeting/{id}', function ($id) {
    return view('agency.realtors-meeting', ['realtor_id' => $id]);
})->name('realtors-schedule-meeting');

Route::get('customers', function () {
    return view('agency.customers');
})->name('customers');

Route::get('create-customer', function () {
    return view('agency.create-customer');
})->name('customer.create');

Route::get('edit-customer/{id}', function ($id) {
    return view('agency.create-customer', ['customer_id' => $id]);
})->name('customer.edit');


Route::get('customers-details/{id}', function ($id) {
    return view('agency.customers-details', ['customer_id' => $id]);
})->name('customers-details');

Route::get('website-settings', function () {
    return view('agency.website-settings');
})->name('website-settings');

Route::get('create-colorpalette', function () {
    return view('agency.create-colorpalette');
})->name('colorpalatte.create');


Route::get('edit-colorpalette/{id}', function ($id) {
    return view('agency.edit-colorpalette', ['palette_id' => $id]);
})->name('colorpalette.edit');

Route::get('create-faq', function () {
    return view('agency.create-faq');
})->name('faq.create');

Route::get('edit-faq/{id}', function ($id){
    return view('agency.edit-faq', ['faq_id' => $id]);
})->name('faq.edit');

Route::get('create-testimonial', function () {
    return view('agency.create-testimonials');
})->name('testimonial.create');

Route::get('edit-testimonial/{id}', function ($id) {
    return view('agency.edit-testimonial', ['testimonial_id' => $id]);
})->name('testimonial.edit');


Route::get('create-team', function () {
    return view('agency.create-team');
})->name('team.create');

Route::get('edit-team/{id}', function ($id) {
    return view('agency.edit-team', ['team_id' => $id]);
})->name('team.edit');


Route::get('/contact-message', function () {
    return view('agency.contact-message');
})->name('contact-message');

Route::get('/contact-message-details/{id}', function ($id) {
    return view('agency.contact-message-details', ['message_id' => $id]);
})->name('contact-message-details');



Route::get('profile-settings', function () {
    return view('agency.profile-settings');
})->name('profile-settings');
