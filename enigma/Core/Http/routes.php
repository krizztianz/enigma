<?php

Route::group(['middleware' => 'web'], function() {
    // Home page
    Route::get('/', '\Enigma\Modules\Core\Http\Controllers\Profile\ProfileController@index');
});

Route::group(['middleware' => 'web', 'prefix' => 'core', 'namespace' => 'Enigma\Modules\Core\Http\Controllers'], function() {
    Route::get('/', 'CoreController@index');
});
