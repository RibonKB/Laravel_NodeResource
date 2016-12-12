<?php
/*
 * This file is part of Node Resource Project.
 * for more information visit: http://www.github.com/RibonKB/Laravel_NodeResource
 *
 * Author: Tomás Lara (RibonKB)
 */

namespace KelneBenath\NodeResource;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        $this->loadTranslationsFrom(__DIR__."/translations",'nr');

        //Publishers
        $this->publishes([
            __DIR__."/public" => public_path('vendor/kelnebenath/noderesource')
        ], 'public');

        $this->registerValidators();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Register custom data input validators
    */
    private function registerValidators(){
        Validator::extend('nr_closed_leaf','\KelneBenath\NodeResource\Requests\Custom\NodeValidator@isClosedLeaf');
        Validator::replacer('nr_closed_leaf','\KelneBenath\NodeResource\Requests\Custom\NodeValidator@translateError');
    }
}
