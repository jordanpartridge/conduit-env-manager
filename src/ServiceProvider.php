<?php

declare(strict_types=1);

namespace Jordanpartridge\ConduitEnvmanager;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Jordanpartridge\ConduitEnvmanager\Commands\EnvinitCommand;

class ServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Jordanpartridge\ConduitEnvmanager\Commands\EnvinitCommand::class
            ]);
        }
    }
}