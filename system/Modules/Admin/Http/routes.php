<?php
// Admin CRUD
Route::group(['middleware' => 'api', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index');
});
