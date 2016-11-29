<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

namespace KelneBenath\NodeResource;

use Illuminate\Support\ServiceProvider;

class NodeResourceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Load Dependencies
        $this->loadRoutesFrom(__DIR__."/routes.php");
        $this->loadViewsFrom(__DIR__."/Views","nrviews");
        $this->loadMigrationsFrom(__DIR__."/migrations");

        //Publishers
        $this->publishes([
            __DIR__."/public" => public_path('vendor/kelnebenath/noderesource')
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
