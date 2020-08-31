<?php

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

/*
Routy administratora
*/

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('customers', function () { return view('pages.modules.customers.index', ['title' => "Zarządzanie klientami"]); });
    Route::get('diet', function () { return view('pages.modules.diets.diets.index', ['title' => "Zarządzanie dietami"]); });
});

Route::group(['prefix' => 'settings'], function(){
    Route::get('dictionary', function () { return view('pages.modules.settings.dictionary', ['title' => "Słownik"]); });
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('/', function () { return view('pages.auth.index', ['title' => "Logowanie"]); });
    Route::get('/register', function () { return view('pages.auth.register', ['title' => "Logowanie"]); });
    Route::get('/reset', function () { return view('pages.auth.reset-password', ['title' => "Resetuj hasło"]); });
    Route::get('/set', function () { return view('pages.auth.set-password', ['title' => "Aktywuj konto"]); });
    Route::get('/new', function () { return view('pages.auth.new-password', ['title' => "Ustaw nowe hasło"]); });
});

/*
Routy globalne
*/


Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); });
    Route::get('500', function () { return view('pages.error.500'); });
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('pages.error.404');
})->where('page','.*');
