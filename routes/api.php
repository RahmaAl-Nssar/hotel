<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auth Routes


    Route::post('/logout', 'AuthController@logout');
    Route::post('/login', 'AuthController@login');
    Route::post('/register', 'AuthController@register');
    Route::post('forgot-password', 'AuthController@sendPasswordResetEmail');
    // forget password
    
   // Route::post('check-forgot-password-code', 'AuthController@checkForgetPasswordCode');
   // Route::post('set-new-password', 'AuthController@setNewPassword'); 


