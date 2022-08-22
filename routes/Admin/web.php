<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function () {
    return view('welcome');
});

// Route::group(['prefix' => 'admin', 'middleware' => ['role:admin|super_admin']], function() {
//     Route::get('/', 'DashboardController@index');
//     Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
// });
