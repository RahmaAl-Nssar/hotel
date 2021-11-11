<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auth Routes
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::middleware('auth:api')->group(function () {
    Route::post('/logout', 'AuthController@logout')->middleware('token.auth');
   
    
    // forget password
    
   // Route::post('check-forgot-password-code', 'AuthController@checkForgetPasswordCode');
   // Route::post('set-new-password', 'AuthController@setNewPassword'); 
});
Route::post('forgot-password', 'AuthController@sendPasswordResetEmail');
