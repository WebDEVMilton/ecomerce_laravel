<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Order;
use App\Models\Addproduct;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();  
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Use a wildcard * to include the view in all pages
        View::composer('user.layout.MasterApp', function ($view) {
            // $user=Auth::user();
            // $ipadress = $user->ipadress;
            // $getcartlists=Order::with('product')->where('ipadress',$ipadress)->get();
            $getcartlists=Order::with('product')->get();
            $view->with('getcartlists', $getcartlists);
        });
    }
}
