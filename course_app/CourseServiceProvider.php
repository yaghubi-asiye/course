<?php

namespace CourseApp;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CourseServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //load migrations
        $this->loadMigrationsFrom([
            base_path('course_app/migrations')
        ]);

        //load views
        $this->loadViewsFrom(base_path('course_app/views'), 'Course');

        //load web routes
        Route::middleware('web')
        ->group(base_path('course_app/web.php'));
    }
}
