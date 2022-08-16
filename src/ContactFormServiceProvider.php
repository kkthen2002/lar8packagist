<?php


    // MyVendor\contactform\src\ContactFormServiceProvider.php

    namespace MyVendor\contactform;

    use Illuminate\Support\ServiceProvider;

    class ContactFormServiceProvider extends ServiceProvider
    {
        public function boot()
        {
            // MyVendor\contactform\src\ContactFormServiceProvider.php
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');

            // MyVendor\contactform\src\ContactFormServiceProvider.php
            $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');

            // MyVendor\contactform\src\ContactFormServiceProvider.php
            $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        }
        public function register()
        {
        }
    }
