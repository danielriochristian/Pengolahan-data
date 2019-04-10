<?php

namespace App\Providers;
use App\Jurusan;
use Illuminate\Support\ServiceProvider;

class JurusanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
          $view->with('jurusan',Jurusan::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
