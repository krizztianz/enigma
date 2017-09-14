<?php

Route::group(['middleware' => 'web'], function() {
    // Home page
    Route::get('/', '\Enigma\Modules\Core\Http\Controllers\FrontController@index');
});

Route::group(['middleware' => ['web', 'auth', 'activation'], 'prefix' => 'core', 'namespace' => 'Enigma\Modules\Core\Http\Controllers'], function() {
    Route::get('/', 'CoreController@index');
});
