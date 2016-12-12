<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

Route::group(['prefix' => 'nradmin', 'namespace' => 'KelneBenath\NodeResource\Controllers', 'middleware' => ['web','auth']], function(){
    Route::get('/', 'NodeAdminController@index')->name('nr_dashboard');

    //Node CRUD routes
    Route::get('/nodes','NodifyController@index')->name('nr_node');
    Route::get('/nodes/new','NodifyController@newNode')->name('nr_node_new');
    Route::post('/nodes','NodifyController@create')->name('nr_node_create');
    Route::get('/nodes/{id}/edit','NodifyController@edit')->name('nr_node_edit');
    Route::put('/nodes/{id}','NodifyController@update')->name('nr_node_update');
    Route::delete('/nodes/{id}','NodifyController@destroy')->name('nr_node_destroy');

    Route::get('/modularize',function(){return "Hello World!";})->name('nr_modularize');
});
