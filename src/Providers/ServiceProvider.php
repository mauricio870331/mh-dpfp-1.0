<?php

namespace mhtutorials\dpfp4500\Providers;

/**
 * Description of ServiceProvider
 *
 * @author Maurcio Herrera
 */
use Illuminate\Support\ServiceProvider as DpProvider;

class ServiceProvider extends DpProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {


        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        // Publica las migraciones del paquete
        $this->publishes(
                [
                    __DIR__ . '/../database/migrations' => base_path('database/migrations'),
                    __DIR__ . '/../views' => resource_path('views/dpfp_views'),
                    __DIR__ . '/../layout' => resource_path('views/layouts'),
                    __DIR__ . '/../Models' => app_path('Models/DpfpModels'),
                    __DIR__ . '/../Controllers' => app_path('Http/Controllers/DpfpApi'),
                    __DIR__ . '/../js' => base_path('public/dpfp/js'), 
                    __DIR__ . '/../css' => base_path('public/dpfp/css'),
                    __DIR__ . '/../images' => base_path('public/dpfp/images')
                ], 'mhtutorials-dpfp4500-p');
    }

}
