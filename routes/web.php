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

Route::get('/typography', function () {
    return view('pages.typography');

})->name('typography');

Route::get('/helper-classes', function () {
    return view('pages.helper-classes');

})->name('helper-classes');


Route::get('/tables/normal-tables', function () {
    return view('pages.tables.normal-tables');

})->name('tables.normal-tables');


Route::get('/tables/jquery-datatables', function () {
    return view('pages.tables.jquery-datatables');

})->name('tables.jquery-datatables');


Route::get('/tables/editable-tables', function () {
    return view('pages.tables.editable-tables');

})->name('tables.editable-tables');


Route::get('/medias/image-gallery', function () {
    return view('pages.medias.image-gallery');

})->name('medias.image-gallery');

Route::get('/medias/carousel', function () {
    return view('pages.medias.carousel');

})->name('medias.carousel');

Route::get('/widgets/cards/basic', function () {
    return view('pages.widgets.cards.basic');

})->name('widgets.cards.basic');

Route::get('/widgets/cards/colored', function () {
    return view('pages.widgets.cards.colored');

})->name('widgets.cards.colored');

Route::get('/widgets/cards/no-header', function () {
    return view('pages.widgets.cards.no-header');

})->name('widgets.cards.no-header');

Route::get('/widgets/infobox/infobox-1', function () {
    return view('pages.widgets.infobox.infobox-1');

})->name('widgets.infobox.infobox-1');

Route::get('/widgets/infobox/infobox-2', function () {
    return view('pages.widgets.infobox.infobox-2');

})->name('widgets.infobox.infobox-2');

Route::get('/widgets/infobox/infobox-3', function () {
    return view('pages.widgets.infobox.infobox-3');

})->name('widgets.infobox.infobox-3');

Route::get('/widgets/infobox/infobox-4', function () {
    return view('pages.widgets.infobox.infobox-4');

})->name('widgets.infobox.infobox-4');

Route::get('/widgets/infobox/infobox-5', function () {
    return view('pages.widgets.infobox.infobox-5');

})->name('widgets.infobox.infobox-5');
