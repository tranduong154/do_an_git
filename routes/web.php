<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Auth'
], function () {
    Route::get('/', 'LoginController@showLoginForm');
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout');
});

// Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix'    => 'admin',
    'namespace' => 'Admin',
    'as'        => 'admin.',
    'middleware' => ['admin']
],function(){   
    Route::get('index', 'HomeController@index')->name('home');

    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::post('profile', 'ProfileController@store')->name('updateProfile');

    Route::group([
        'prefix'    => 'putPitch',
        'as'        => 'putPitch.',
    ],function(){
        Route::get('/', 'PutPitchController@index')->name('index');
        Route::get('add/', 'PutPitchController@create')->name('add');
        Route::post('add', 'PutPitchController@store')->name('create');
        Route::get('edit/{id}', 'PutPitchController@edit')->name('edit');
        Route::post('edit/{id}', 'PutPitchController@update')->name('update');
        Route::get('delete/{id}', 'PutPitchController@destroy')->name('delete');
        Route::get('search/', 'PutPitchController@search')->name('search');
        Route::get('/orderSearch', 'PutPitchController@orderSearch')->name('orderSearch');
    });

    Route::group([
        'prefix'    => 'customer',
        'as'        => 'customer.',
    ],function(){
        Route::get('/', 'CustomerController@index')->name('index');
        Route::get('add/', 'CustomerController@create')->name('add');
        Route::post('add', 'CustomerController@store')->name('create');
        Route::get('edit/{id}', 'CustomerController@edit')->name('edit');
        Route::post('edit/{id}', 'CustomerController@update')->name('update');
        Route::get('delete/{id}', 'CustomerController@destroy')->name('delete');
        Route::get('search/', 'CustomerController@search')->name('search');
    });

    Route::group([
        'prefix'    => 'personnel',
        'as'        => 'personnel.',
    ],function(){
        Route::get('/', 'PersonnelController@index')->name('index');
        Route::get('add/', 'PersonnelController@create')->name('add');
        Route::post('add', 'PersonnelController@store')->name('create');
        Route::get('edit/{id}', 'PersonnelController@edit')->name('edit');
        Route::post('edit/{id}', 'PersonnelController@update')->name('update');
        Route::get('delete/{id}', 'PersonnelController@destroy')->name('delete');
        Route::get('search/', 'PersonnelController@search')->name('search');
    });

    Route::group([
        'prefix'    => 'football_pitch',
        'as'        => 'football_pitch.',
    ],function(){
        Route::get('/', 'FootballPitchController@index')->name('index');
        Route::get('add/', 'FootballPitchController@create')->name('add');
        Route::post('add', 'FootballPitchController@store')->name('create');
        Route::get('edit/{id}', 'FootballPitchController@edit')->name('edit');
        Route::post('edit/{id}', 'FootballPitchController@update')->name('update');
        Route::get('delete/{id}', 'FootballPitchController@destroy')->name('delete');
        Route::get('price-time/', 'FootballPitchController@priceTime')->name('priceTime');
        Route::get('edit-price-time/{id}', 'FootballPitchController@editPriceTime')->name('editPriceTime');
        Route::post('edit-price-time/{id}', 'FootballPitchController@editPostPriceTime')->name('editPostPriceTime');

    });

    Route::group([
        'prefix'    => 'service',
        'as'        => 'service.',
    ],function(){
        Route::get('/', 'ServiceController@index')->name('index');
        Route::get('add/', 'ServiceController@create')->name('add');
        Route::post('add', 'ServiceController@store')->name('create');
        Route::get('edit/{id}', 'ServiceController@edit')->name('edit');
        Route::post('edit/{id}', 'ServiceController@update')->name('update');
        Route::get('delete/{id}', 'ServiceController@destroy')->name('delete');
    });

    Route::group([
        'prefix'    => 'regulation',
        'as'        => 'regulation.',
    ],function(){
        Route::get('/', 'RegulationController@index')->name('index');
        Route::get('add/', 'RegulationController@create')->name('add');
        Route::post('add', 'RegulationController@store')->name('create');
        Route::get('edit/{id}', 'RegulationController@edit')->name('edit');
        Route::post('edit/{id}', 'RegulationController@update')->name('update');
        Route::get('delete/{id}', 'RegulationController@destroy')->name('delete');
    });

    Route::get('chart', 'ChartController@index')->name('chart');
    Route::group([
        'prefix'    => 'chart',
        'as'        => 'chart.',
    ],function(){
        Route::get('/', 'ChartController@index')->name('index');
        Route::post('search/', 'ChartController@store')->name('search');
        Route::post('search-month/', 'ChartController@searchMonth')->name('search_month');
        Route::post('auto-chart', 'ChartController@autoChart')->name('autoChart');
    });
});

Route::group([
    'prefix'    => 'frontend',
    'namespace' => 'Frontend',
    'as'        => 'frontend.',
    
],function(){
    Route::get('index', 'HomeController@index')->name('index');
    Route::get('about', 'AboutController@index')->name('about');
    Route::get('order', 'OrderController@index')->name('order');
    Route::get('contact', 'ContactController@index')->name('contact');

    Route::group([
        'prefix' => 'account', 
        'as' => 'account.'
    ], function(){
        Route::get('register', 'AccountController@register')->name('register');
        Route::post('register', 'AccountController@postRegister')->name('postRegister');
        Route::get('login', 'AccountController@login')->name('login');
        Route::post('login', 'AccountController@postLogin')->name('postLogin');
        Route::get('logout', 'AccountController@logout')->name('logout');
    });

    Route::group([
        'prefix' => 'order', 
        'as' => 'order.',
        'middleware' => ['customer']
    ], function(){
        Route::post('/order', 'OrderController@create')->name('post');
        Route::get('/orderSearch', 'OrderController@store')->name('orderSearch');
    });
    
    Route::group([
        'prefix' => 'checkout', 
        'as' => 'checkout.',
        'middleware' => ['customer']
    ], function(){
        Route::get('/checkout', 'CheckoutController@index')->name('index');
        Route::get('/success', 'CheckoutController@show')->name('success');
        Route::get('/history', 'CheckoutController@store')->name('history');
        Route::get('/search', 'CheckoutController@search')->name('search');
        Route::get('/delete/{id}', 'CheckoutController@destroy')->name('delete');
        Route::get('/delete-session', 'CheckoutController@deleteSession')->name('deleteSession');
        Route::get('/update/{id}', 'CheckoutController@update')->name('update');
        Route::get('/showHistory', 'CheckoutController@showHistory')->name('showHistory');
        Route::get('/vnpay', 'CheckoutController@showVnpay')->name('vnpay');
        Route::post('/vnpay', 'CheckoutController@createPayment')->name('vnpayCreate');
    });
});