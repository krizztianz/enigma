<?php

Route::group(['middleware' => 'api', 'prefix' => 'ujian', 'namespace' => 'Modules\Ujian\Http\Controllers'], function()
{
    Route::get('/', 'UjianController@index');
});
