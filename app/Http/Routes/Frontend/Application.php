<?php

/**
 * Frontend Controllers
 */

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'Application'], function() {
        Route::resource('application', 'ApplicationController', ['except' => ['destroy','edit','update']]);
    });


});