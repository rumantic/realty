<?php

/*
|--------------------------------------------------------------------------
| Backpack\NewsCRUD Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the Backpack\NewsCRUD package.
|
*/

Route::group([
    'namespace' => 'Sitebill\Realty\app\Http\Controllers\Frontend',
    'middleware' => ['web'],
], function () {
    Route::get('/', 'HomeController@index')->name('realty.home.index');
});


Route::group([
    'namespace' => 'Sitebill\Realty\app\Http\Controllers\Admin',
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', 'admin'],
], function () {
    Route::crud('data', 'DataCrudController');
    Route::crud('topic', 'TopicCrudController');
    Route::crud('client', 'ClientCrudController');
});


