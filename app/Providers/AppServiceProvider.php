<?php

namespace App\Providers;

use App\Events\CreatedWorkerEvent;
use App\Events\DeleteWorkerEvent;
use App\Listeners\CreateProfileLestener;
use App\Listeners\DeleteProfileLestener;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
//            CreatedWorkerEvent::class,
//            CreateProfileLestener::class,
            DeleteWorkerEvent::class,
            DeleteProfileLestener::class,
        );
    }
}
