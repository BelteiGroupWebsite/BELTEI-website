<?php

namespace App\Providers;

use App\Models\Language;
use App\Models\University\News;
use App\Models\Visitor;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Log;
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
        PaginationPaginator::useBootstrap();
    
        try {
            // Share languages with all views
            View::share('languages', Language::get());

            // Share languages with all views
            View::share('visitor', Visitor::get());
    
            // Define an associative array with category IDs and their corresponding view variable names
            $categories = [
                1 => 'contruction_news',
                2 => 'bis_news',
                3 => 'biu_news',
                4 => 'bir_news',
                5 => 'tour_news',
                6 => 'testcenter_news',
                7 => 'charity_news',
            ];
    
            // Loop through the categories and share the news for each category with the corresponding view variable name
            foreach ($categories as $category_id => $view_variable) {
                try {
                    $news = News::where('category', $category_id)->orderBy('date', 'desc')->get();
                    View::share($view_variable, $news);
                } catch (\Exception $e) {
                    // Handle the exception for individual category query
                    Log::error("Failed to fetch news for category ID $category_id: " . $e->getMessage());
                    View::share($view_variable, collect()); // Share an empty collection as a fallback
                }
            }
        } catch (\Exception $e) {
            // Handle the exception for the overall process
            Log::error("Failed to fetch data in AppServiceProvider boot method: " . $e->getMessage());
            // You may choose to handle this more gracefully in the user interface, if needed
        }
    }
    
}
