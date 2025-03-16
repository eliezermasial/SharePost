<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use App\Models\MediaSocial;
use Conner\Tagging\Model\Tag;
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
        $tags = Tag::orderBy('id', 'Desc')->get(); //tags
        $socials = MediaSocial::orderBy('id', 'Desc')->get(); //reseaux sociaux
        $categories = Category::where('isActive', 1)->orderBy('created_at', 'Desc')->get(); //categories activé est les plus recentes
        $articles = Article::where('isActive', 1)->orderBy('created_at', 'Desc')->get(); //articles activé est les plus recentes

        view()->share('Global_tags', $tags);
        view()->share('Global_sociaux', $socials);
        view()->share('Global_category', $categories);
        view()->share('Global_recent_articles', $articles);
    }
}
