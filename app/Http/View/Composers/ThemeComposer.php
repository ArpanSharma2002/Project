<?php

namespace App\Http\View\Composers;
use Illuminate\View\View;
use App\Models\Currency;
use App\Models\Language;

class ThemeComposer
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function compose(View $view)
    {
        $view->with([
            'currencies' => Currency::all(),
            'languages' => Language::all(),
        ]);
    }
}
