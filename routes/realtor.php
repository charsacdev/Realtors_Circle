<?php

use Illuminate\Support\Facades\Route;





#==================DASHBOARD========================#

Route::get('dashboard', function () {
    return view('realtors.dashboard');
})->name('dashboard');

Route::get('properties', function () {
    return view('realtors.properties');
})->name('properties');

Route::get('create-properties', function () {
    return view('realtors.create-properties');
})->name('properties.create');

Route::get('edit-properties/{id}', function ($id) {
    return view('realtors.edit-properties', ['property_id' => $id]);
})->name('properties.edit');

Route::get('customers', function () {
    return view('realtors.customers');
})->name('customers');

Route::get('create-customer', function () {
    return view('realtors.create-customer');
})->name('customer.create');

Route::get('customers-details/{id}', function ($id) {
    return view('realtors.customers-details', ['customer_id' => $id]);
})->name('customer-details');

Route::get('profile', function () {
    return view('realtors.profile');
})->name('profile');

Route::get('create-testimonial', function () {
    return view('realtors.create-testimonial');
})->name('testimonial.create');

Route::get('edit-testimonial/{id}', function ($id) {
    return view('realtors.edit-testimonial', ['testimonial_id' => $id]);
})->name('testimonial.edit');



Route::get('notifications', function () {
    return view('realtors.notifications');
})->name('notfications');

Route::get('customer-schedules', function () {
    return view('realtors.customers-schedule');
})->name('customer-schedule');

Route::get('customer-schedules-details/{id}', function ($id) {
    return view('realtors.customer-schedule-details', ['schedule_id' => $id]);
})->name('customer-schedule-details');

Route::get('broadcast-message', function () {
    return view('realtors.broadcast-message');
})->name('broadcast-message');

Route::get('pro-version', function () {
    return view('realtors.pro-version');
})->name('proversion');

Route::get('insight', function () {
    return view('realtors.insight');
})->name('insight');



