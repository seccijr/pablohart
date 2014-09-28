<?php

Route::get('/', function() {
    return View::make('pages.home', array('title' => 'Pablo Hart'));
});

Route::get('/about', function() {
    return View::make('pages.about');
});

Route::get('/contact', function() {
    return View::make('pages.contact');
});

Route::get('/art', function() {
    return View::make('pages.art');
});

Route::get('/comic', function() {
    return View::make('pages.comic');
});

Route::get('/contemporaneous', function() {
    return View::make('pages.contemporaneous');
});

Route::get('/urban', function() {
    return View::make('pages.urban');
});
