<?php

Route::group(['middleware' => 'api', 'prefix' => 'siswa', 'namespace' => 'Modules\Siswa\Http\Controllers'], function()
{
    Route::get('/', 'SiswaController@index');
});
