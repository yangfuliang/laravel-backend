<?php

namespace App\Providers;

use Godruoyi\Snowflake\Snowflake;
use Godruoyi\Snowflake\SwooleSequenceResolver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('snowflake', static function () {
            return (new Snowflake())->setSequenceResolver(new SwooleSequenceResolver());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
