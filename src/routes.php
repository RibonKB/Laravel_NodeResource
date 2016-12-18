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

    //Distribution Node CRUD routes
    Route::get('/dnodes','DistributeController@index')->name('nr_dnode');
    Route::get('/dnodes/new','DistributeController@newNode')->name('nr_dnode_new');
    Route::post('/dnodes','DistributeController@create')->name('nr_dnode_create');
    Route::get('/dnodes/{id}/edit','DistributeController@edit')->name('nr_dnode_edit');
    Route::put('/dnodes/{id}','DistributeController@update')->name('nr_dnode_update');
    Route::delete('/dnodes/{id}','DistributeController@destroy')->name('nr_dnode_destroy');

    Route::get('/modularize',function(){return "Hello World!";})->name('nr_modularize');

    Route::group(['prefix' => 'api', 'namespace' => 'Api'], function(){
        Route::get('/nodes','NodeController@index')->name('nr_api_node');
    });

});
