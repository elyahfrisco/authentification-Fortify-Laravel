<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('integration/connexion/login');
})->name('home');

Route::get('/home', function () {
    return view('pages/connexion/login');
})->middleware(['auth','verified'])->name('home');


Route::get('/visiteur', function () {
    return view('pages.visiteur');
})->middleware(['auth','verified'])->name('visiteur');





// // Route Integration page Login
// Route::get('/integration/login', function () {
//     return view('integration/connexion/login');
// })->name('login');

// // Route Integration page Register
// Route::get('/integration/register', function () {
//     return view('integration/connexion/register');
// })->name('register');

