<?php


Route::group(['middleware' => ['auth','web'], 'namespace' => 'Modullo\ModulesInit\Http\Controllers', 'prefix' => 'init'], function () {
    Route::get('/', 'ModulesCustomersController@index')->name('init-index');
});



?>