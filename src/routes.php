<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

Route::group(['prefix' => 'nradmin', 'namespace' => 'KelneBenath\NodeResource', 'middleware' => 'web'], function(){
    Route::get('/', 'Controllers\NodeAdminController@index');
});
