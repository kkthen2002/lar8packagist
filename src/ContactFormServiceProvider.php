<?php

    // Kkthen2002\contactform\src\ContactFormServiceProvider.php

    namespace Kkthen2002\contactform;

    use Illuminate\Support\ServiceProvider;

    class ContactFormServiceProvider extends ServiceProvider
    {
        public function boot()
        {
            // Kkthen2002\contactform\src\ContactFormServiceProvider.php
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');

            // Kkthen2002\contactform\src\ContactFormServiceProvider.php
            $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');

            // Kkthen2002\contactform\src\ContactFormServiceProvider.php
            $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        }
        public function register()
        {
        }
    }
