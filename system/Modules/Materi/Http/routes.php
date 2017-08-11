<?php

Route::group(['middleware' => 'api', 'prefix' => 'materi', 'namespace' => 'Modules\Materi\Http\Controllers'], function()
{
    Route::get('/', 'MateriController@index');
});
