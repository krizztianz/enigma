<?php

Route::group(['middleware' => 'api', 'prefix' => 'forum', 'namespace' => 'Modules\Forum\Http\Controllers'], function()
{
    Route::get('/', 'ForumController@index');
});
