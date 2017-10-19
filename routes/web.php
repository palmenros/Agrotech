<?php

Route::get('/', function () {
    return view('control');
});

Route::get('/statistics', 'StatisticsController@index');

Route::get('/settings', function () {
    return view('settings');
});
