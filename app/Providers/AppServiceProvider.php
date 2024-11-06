<?php

namespace App\Providers;

use App\Models\Application;
use Illuminate\Support\Facades\View;
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
        $application = Application::latest()->first();

        if (is_null($application)) {
            $application = new Application();
            $application->nama_aplikasi = '';
            $application->keyword = '';
            $application->deskripsi = '';
            $application->favicon = null;
            $application->logo = null;
            $application->telepon = '';
            $application->email = '';
            $application->alamat = '';
            $application->google_maps = '';
            $application->pembuat_kutipan = '';
            $application->kutipan_motivasi = '';
        }

        View::share('application', $application);
    }
}
