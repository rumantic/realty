<?php

Route::group([
    'namespace' => 'Sitebill\Realty\app\Http\Controllers\Frontend',
    'middleware' => ['web'],
], function () {
    Route::get('/', 'HomeController@index')->name('realty.home.index');
    Route::get('realty/{id}', 'DataFrontController@show')->name('realty.show');
    Route::crud(config('sitebill.realty.account_prefix').'/data', 'DataFrontController');
    $request = request();
    if ( !in_array($request->path(), config('sitebill.realty.controllers_urls')) ) {
        //Route::get('{slug}', 'DataFrontController@url_catcher')->where('slug', '.*')->name('realty.url_catcher');
    }
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


