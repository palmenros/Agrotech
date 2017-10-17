<?php

Route::get('/', function () {
    return view('control');
});

Route::get('/statistics', function () {
    return view('statistics');
});

Route::get('/settings', function () {
    return view('settings');
});
