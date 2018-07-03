<?php namespace Crydesign\FwBackend;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function register()
    {
        $this->app->register(\Folklore\GraphQL\ServiceProvider::class);
        $alias = \Illuminate\Foundation\AliasLoader::getInstance()->alias('GraphQL', \Folklore\GraphQL\Support\Facades\GraphQL::class);
        $this->app['config']['graphql'] = require __DIR__ . '/config/graphql.php';
    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
