<?php

use Illuminate\Support\Facades\Route;


Route::get('dashboard', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::get('users', function(){
    return view('admin.users');
})->name('users');

Route::get('user/{slug}', function(){
    return view('admin.user-details');
})->name('user');

Route::get('agencies', function(){
    return view('admin.agencies');
})->name('agencies');

Route::get('agency/{slug}', function(){
    return view('admin.agency-details');
})->name('agency');

Route::get('broadcast-message', function(){
    return view('admin.broadcast-message');
})->name('broadcast-message');

Route::get('contact-us', function(){
    return view('admin.contact-us');
})->name('contact-us');

Route::get('contact-us/{slug}', function(){
    return view('admin.contact-us-details');
})->name('contact-us.details');

Route::get('profile', function(){
    return view('admin.profile');
})->name('profile');