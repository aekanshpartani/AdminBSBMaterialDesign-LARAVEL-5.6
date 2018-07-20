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
    return view('pages.dashboard.index');
})->name('home');

Route::get('/forms/basic-form-elements', function () {
    return view('pages.forms.basic-form-elements');
})->name('forms.basic-form-elements');

Route::get('/forms/advanced-form-elements', function () {
    return view('pages.forms.advanced-form-elements');
})->name('forms.advanced-form-elements');

Route::get('/forms/form-examples', function () {
    return view('pages.forms.form-examples');

})->name('forms.form-examples');

Route::get('/forms/form-validation', function () {
    return view('pages.forms.form-validation');

})->name('forms.form-validation');

Route::get('/forms/form-wizard', function () {
    return view('pages.forms.form-wizard');

})->name('forms.form-wizard');

Route::get('/forms/editors', function () {
    return view('pages.forms.editors');

})->name('forms.editors');
