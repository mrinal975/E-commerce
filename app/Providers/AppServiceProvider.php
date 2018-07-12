<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //View::share('name','BITM');
        //View::share('name','baba');
        View::composer('frontEnd.includes.menu',function ($view){
            $publishedCategory=Category::where('publication_status',1)->get();
        $view->with('publishedCategory',$publishedCategory);
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
