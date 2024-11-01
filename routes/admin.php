<?php

use Illuminate\Support\Facades\Route;


Route::get('dashboard', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::get('realtors', function(){
    return view('admin.realtors');
})->name('realtors');

Route::get('realtor/{slug}', function($slug){
    return view('admin.realtor-details', ['slug' => $slug]);
})->name('realtor.details');

Route::get('agencies', function(){
    return view('admin.agencies');
})->name('agencies');

Route::get('agency/{slug}', function($slug){
    return view('admin.agency-details', ['slug' => $slug]);
})->name('agency.details');

Route::get('broadcast-message', function(){
    return view('admin.broadcast-message');
})->name('broadcast-message');

Route::get('contact-us', function(){
    return view('admin.contact-us');
})->name('contact-us');

Route::get('contact-us-details/{id}', function($id){
    return view('admin.contact-us-details', ['message_id' => $id]);
})->name('contact-us.details');

Route::get('profile', function(){
    return view('admin.profile');
})->name('profile');