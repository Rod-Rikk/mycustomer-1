<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// backend codes

Route::get('/backend/login', function () {
    return view('backend.login');
});

Route::get('backend/recoverPassword', function () {
    return view('backend.recoverPassword.recoverPassword');

});


// dashboard
Route::get('/backend/dashboard', function () {
    return view('backend.dashboard');
});


// transaction

Route::get('/backend/transactions' , function () {
    return view ('backend.transactions.index');	    
});

Route::get('/backend/transactions/view', function () {
    return view('backend.transactions.show');	    
});

// all users

Route::get('/users_list', function () {
    return view('users_list.single_user');
});





