<?php

use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Company\CompanyPolicyController;
use App\Http\Controllers\Company\RegisterFieldAgentController;
use Illuminate\Support\Facades\Route;

// -------------------------------------------------------------------- Company --------------------------------------------------------------------


Route::middleware(['auth', 'company'])->prefix('company')->group(function () {
    Route::get('test', function () {
        return "Company";
    });

//    -------------------------- Register Field Agent -----------------------------

    Route::resource('farmer_register', RegisterFieldAgentController::class);


//    -------------------------- Register Field Agent -----------------------------

//    -------------------------- Registered Farmer / Agents -----------------------------

    Route::get('registered', [CompanyController::class, 'registered_farmers'])->name('company.farmer_registered');

//    -------------------------- Registered Farmer / Agents -----------------------------

//    -------------------------- Policy Creation -----------------------------

    Route::resource('policy', CompanyPolicyController::class);

//    -------------------------- Policy Creation -----------------------------

});


// -------------------------------------------------------------------- Company --------------------------------------------------------------------
