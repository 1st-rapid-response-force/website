<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('about', 'FrontendController@about')->name('frontend.about');
Route::get('servers', 'FrontendController@servers')->name('frontend.servers');
Route::get('modpack', 'FrontendController@modpack')->name('frontend.modpack');
Route::get('structure-assignments', 'FrontendController@structure')->name('frontend.structure_assignments');
Route::get('apply', 'FrontendController@apply')->name('frontend.apply');
Route::get('faq', 'FrontendController@faq')->name('frontend.faq');
Route::get('contact', 'FrontendController@contact')->name('frontend.contact');

//Steam Route
Route::get('login/validate/steam', 'SteamController@confirmLogin')
    ->name('steam.validate');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
    });


});