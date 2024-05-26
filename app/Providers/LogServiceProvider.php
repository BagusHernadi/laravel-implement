<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class LogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Log::info('Application started');
    }
}