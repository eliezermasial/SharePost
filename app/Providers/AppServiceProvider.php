<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\MediaSocial;
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
        $socials = MediaSocial::orderBy('id', 'Desc')->get();
        $categories = Category::where('isActive', 1)->orderBy('created_at', 'Desc')->get();


        view()->share('Global_sociaux', $socials);
        view()->share('Global_category', $categories);
    }
}
