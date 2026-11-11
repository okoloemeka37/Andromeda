<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact',function(){
return view('contact');
})->name('contact');

Route::get('/about',function(){
return view('about');
})->name('about');

Route::get('/',function(){
return view('welcome');
})->name('home');

Route::get('/whyus',function(){
return view('whyus');
})->name('whyus');

Route::get('/service',function(){
return view('service');
})->name('services');