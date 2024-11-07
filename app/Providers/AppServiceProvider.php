<?php

namespace App\Providers;

use App\Models\Application;
use Exception;
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
        $application = Application::latest()->firstOrNew([], [
            'nama_aplikasi' => '',
            'keyword' => '',
            'deskripsi' => '',
            'favicon' => null,
            'logo' => null,
            'telepon' => '',
            'email' => '',
            'alamat' => '',
            'google_maps' => '',
            'pembuat_kutipan' => '',
            'kutipan_motivasi' => ''
        ]);

        View::share('application', $application);
    }
}
