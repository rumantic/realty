<?php

Route::group([
    'namespace' => 'Sitebill\Realty\app\Http\Controllers\Frontend',
    'middleware' => ['web'],
], function () {
    Route::get('/', 'HomeController@index')->name('realty.home.index');
    Route::get('realty/{id}', 'DataFrontController@show')->name('realty.show');
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


