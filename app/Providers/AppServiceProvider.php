<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\FooterSection;
use App\Contact;
use App\About;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $footerData = FooterSection::first();
        $contactData = Contact::first();
        $aboutData = About::first();
        
        view()->share('footerData', $footerData); 
        view()->share('contactData', $contactData); 
        view()->share('aboutData', $aboutData);
    }
}
