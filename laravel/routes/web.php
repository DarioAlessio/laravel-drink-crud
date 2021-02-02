<?php

Route::get('/', 'BeverageController@index') -> name('beverage-index');

Route::get('/beverage/{id}', 'BeverageController@show') -> name('beverage-show');

Route::get('/new/beverage', 'BeverageController@create') -> name('beverage-create');

Route::post('/new/beverage/store', 'BeverageController@store')-> name('beverage-store');

Route::get('/edit/beverage/{id}', 'BeverageController@edit')-> name('beverage-edit');

Route::post('/update/beverage/{id}', 'BeverageController@update')-> name('beverage-update');

Route::get('/delete/beverage/{id}', 'BeverageController@delete')-> name('beverage-delete');
