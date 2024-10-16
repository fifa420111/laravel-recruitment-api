<?php

namespace Juraboyev\LaravelRecruitmentApi;

use Illuminate\Support\ServiceProvider;

class RecruitmentApiServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
