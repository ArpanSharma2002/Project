<?php

namespace App\Providers;

use App\Models\Currency;
use App\Models\Language;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        View::composer([
            'theme.index', 
            'theme.about',
            'theme.products',
            'theme.single-product',
            'theme.contact'
        ], function($view) {
            $view->with([
                'currencies' => Currency::all(),
                'languages' => Language::all(),
            ]);
        });
    }
}
