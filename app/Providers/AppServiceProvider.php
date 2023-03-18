<?php

namespace App\Providers;

use App\Services\CompanyService\CompanyService;
use App\Services\StudentService\StudentsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /*$this->app->singleton('IStudentRepositories', function () {
            return new StudentRepositories();
        });*/
        //$this->app->singleton(IStudentsRepositories::class,StudentRepositories::class);
        $this->app->bind(StudentsService::class,StudentsService::class);
        $this->app->bind(CompanyService::class,CompanyService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
