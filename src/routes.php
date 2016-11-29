<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

Route::group(['prefix' => 'nradmin', 'namespace' => 'KelneBenath\NodeResource', 'middleware' => 'web'], function(){
    Route::get('/', 'Controllers\NodeAdminController@index')->name('nr_dashboard');
    Route::get('/nodify',function(){return "Hello World!";})->name('nr_nodify');
    Route::get('/modularize',function(){return "Hello World!";})->name('nr_modularize');
});
