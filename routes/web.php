<?php

Route::get('/', function () {
    return view('control');
});

Route::get('/statistics/{time?}', 'StatisticsController@index');

Route::get('/settings', function () {
    return view('settings');
});
