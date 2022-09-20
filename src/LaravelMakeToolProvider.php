<?php

namespace Ramomen\LaravelMakeTool;

use Illuminate\Support\ServiceProvider;

class LaravelMakeToolProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->commands(MakeTool::class);
    }
}
