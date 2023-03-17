<?php

namespace App\Providers;

use App\Contracts\IStudentsRepositories;
use App\Modules\StudentModule\Student;
use App\Modules\StudentModule\StudentsService;
use App\Repositories\StudentRepositories;
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
        $this->app->singleton(IStudentsRepositories::class,StudentRepositories::class);
        $this->app->bind(StudentsService::class,StudentsService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
