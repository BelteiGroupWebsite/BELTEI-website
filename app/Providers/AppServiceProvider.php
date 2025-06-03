<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\Country;
use App\Models\Language;
use App\Models\University\Collaborator\UtbCollaborators;
use App\Models\University\Collaborator\UtbCountry;
use App\Models\University\News;
use App\Models\University\Poster\UtbPoster;
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
            View::share('visitorCount', Visitor::count());

            // Share languages with all views
            View::share('countries', Country::withCount('visitors')->having('visitors_count', '>', 100)->get());
            View::share('bicc_news', News::where('category', 10)->orderBy('date', 'desc')->paginate(10));
            View::share('biccr_news', News::where('category', 11)->orderBy('date', 'desc')->paginate(10));

            // $categories = [
            //     1 => 'contruction_news',
            //     10 => 'bicc_news',
            //     11 => 'biccr_news',
            // ];

            // foreach ($categories as $category_id => $view_variable) {
            //     try {
            //         $news = News::where( 'category', $category_id)->orderBy('date', 'desc')->paginate(10);
            //         View::share($view_variable, $news);
            //     } catch (\Exception $e) {
            //     }
            // }
        } catch (\Exception $e) {
            // Handle the exception for the overall process
            Log::error("Failed to fetch data in AppServiceProvider boot method: " . $e->getMessage());
            // You may choose to handle this more gracefully in the user interface, if needed
        }
    }
}
