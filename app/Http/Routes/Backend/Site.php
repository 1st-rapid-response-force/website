<?php

Route::group([
    'prefix'     => 'site',
    'namespace'  => 'Site',
    'middleware' => 'access.routeNeedsPermission:view-site-management',
], function() {
    /**
     * User Management
     */
    Route::group(['namespace' => 'FAQ'], function() {
        Route::resource('faq', 'FAQController', ['except' => ['show']]);
    });
});