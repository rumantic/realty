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
    'namespace' => 'Sitebill\Realty\app\Http\Controllers\Admin',
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', 'admin'],
], function () {
    Route::crud('data', 'DataCrudController');
    Route::get('data/list_builder', 'DataCrudController@list_builder');
    Route::crud('topic', 'TopicCrudController');
    Route::crud('client', 'ClientCrudController');
});
