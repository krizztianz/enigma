<?php

Route::group(['middleware' => 'api', 'prefix' => 'dosen', 'namespace' => 'Modules\Dosen\Http\Controllers'], function()
{
    Route::get('/', 'DosenController@index');
});
