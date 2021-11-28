<?php
namespace Steffenkong\ModelCli;

use Illuminate\Support\ServiceProvider;

class ModelCliProvider extends ServiceProvider
{

    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ModelCli::class
            ]);
        }
    }
}