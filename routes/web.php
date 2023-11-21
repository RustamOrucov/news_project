<?php

use App\Http\Controllers\front\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('welcome');
})->name('index');
// Route::get('/contact', function(){
//     return view('frontend.pages.contact');
// })->name('contact');
// Route::get('/single', function(){
//     return view('frontend.pages.single');
// })->name('single');


