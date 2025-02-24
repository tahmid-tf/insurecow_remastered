<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home_page');
});


// ------------------------ Home Page ----------------------

Route::get('/home_page', function () {
    return view('pages.home_page');
})->name('home_page');

// ------------------------ Super Admin ----------------------

Route::get('/super_admin', function () {
    return view('pages.super_admin');
})->name('super_admin');

// ------------------------ Agritech Company ----------------------

Route::get('/agritech_company', function () {
    return view('pages.agritech_company');
})->name('agritech_company');


// ------------------------ Insurance Company ----------------------

Route::get('/insurance_company', function () {
    return view('pages.insurance_company');
})->name('insurance_company');

// ------------------------ Farmer ----------------------

Route::get('/farmer', function () {
    return view('pages.farmer');
})->name('farmer');

// ------------------------ Farm Management ----------------------

Route::get('/farm_management', function () {
    return view('pages.farm_management');
})->name('farm_management');
