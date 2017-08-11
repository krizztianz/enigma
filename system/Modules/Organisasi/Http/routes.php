<?php

Route::group(['middleware' => 'api', 'prefix' => 'organisasi', 'namespace' => 'Modules\Organisasi\Http\Controllers'], function()
{
    Route::get('/', 'OrganisasiController@index');
});
