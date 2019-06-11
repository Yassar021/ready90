<?php

Route::get('/', 'KumalaController@index');

Route::get('/daftarberita', 'KumalaController@berita')->name('berita');
Route::get('/lowongankarir', 'KumalaController@karir')->name('karir');
Route::get('/otomotif', 'KumalaController@otomotif')->name('oto');
Route::get('/otomotif/{oto}', 'KumalaController@oto')->name('motif');
Route::get('/detail/{id}', 'KumalaController@otom')->name('otom');
Route::get('/berita/{id}', 'KumalaController@beritaja')->name('single');
Route::get('/trade/{id}', 'KumalaController@trading')->name('dtrade');
Route::get('/tradings', 'KumalaController@trade')->name('trading');
Route::get('/min/{id}', 'KumalaController@min')->name('dmining');
Route::get('/properti/{id}', 'KumalaController@proper')->name('dproperty');
Route::get('/mins', 'KumalaController@mining')->name('mining');
Route::get('/properti', 'KumalaController@property')->name('property');
Route::get('/tentang', function () {
    return view('tentang');
})->name('about');
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/trades', function () {
    return view('trading1');
})->name('trade');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/users', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/slider', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/berita', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/karir', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/partner', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/drive', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/incoming', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/career', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/automotif', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/trading', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/mining', "HomeController@index")->where('path', '[A-Za-z]+');
Route::get('/property', "HomeController@index")->where('path', '[A-Za-z]+');

Route::get('/locale/{locale?}', array('as'=>'set-locale', 
'uses'=>'LanguageController@setLocale'));

Route::post('/ujikendara', 'KumalaController@uji')->name('uji');
Route::post('/ujipenawaran', 'API\ComeController@store')->name('nawar');
Route::post('/ujipelamar', 'API\ControllerPelamar@store')->name('lamar');