<?php

/**
 * Frontend Access Controllers
 */
Route::group(['namespace' => 'Auth'], function () {

    /**
     * These routes require the user to be logged in
     */
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', 'AuthController@logout')->name('auth.logout');

        // Change Password Routes
        Route::get('password/change', 'PasswordController@showChangePasswordForm')->name('auth.password.change');
        Route::post('password/change', 'PasswordController@changePassword')->name('auth.password.update');
    });

    /**
     * These routes require the user NOT be logged in
     */
    Route::group(['middleware' => 'guest'], function () {
        // Authentication Routes
        Route::get('login', 'AuthController@showLoginForm')
            ->name('auth.login');

        // Confirm Account Routes
        Route::get('account/confirm/{token}', 'AuthController@confirmAccount')
            ->name('account.confirm');
        Route::get('account/confirm/resend/{token}', 'AuthController@resendConfirmationEmail')
            ->name('account.confirm.resend');

        // Password Reset Routes
        Route::get('password/reset/{token?}', 'PasswordController@showResetForm')
            ->name('auth.password.reset');
        Route::post('password/email', 'PasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'PasswordController@reset');
    });
});