<?php


    // Kkthen2002\contactform\src\routes\web.php

    // Route::get('contact', function () {
    //     // return 'Hello from the contact form package';
    //     return view('contactform::contact');

    // });


    // Route::post('contact', function () {
    //     // logic goes here

    // })->name('contact');

    // Kkthen2002\contactform\src\routes\web.php


    Route::group(['namespace' => 'Kkthen2002\Contactform\Http\Controllers', 'middleware' => ['web']], function () {
        Route::get('contact', 'ContactFormController@index');
        Route::post('contact', 'ContactFormController@sendMail')->name('contact');
    });
