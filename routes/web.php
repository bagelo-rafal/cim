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
    Route::get('customers/reviews', function () { return view('pages.modules.customers.reviews', ['title' => "Opinie klientów"]); });
    Route::get('diets', function () { return view('pages.modules.diets.diets.index', ['title' => "Zarządzanie dietami"]); });
    Route::get('diets/variants', function () { return view('pages.modules.diets.variants.index', ['title' => "Warianty kaloryczne"]); });
    Route::get('diets/types', function () { return view('pages.modules.diets.types.index', ['title' => "Typy diet"]); });
    Route::get('diets/addons', function () { return view('pages.modules.diets.addons.index', ['title' => "Produkty dodatkowe"]); });
    Route::get('diets/menu', function () { return view('pages.modules.diets.menu.index', ['title' => "Menu"]); });
    Route::get('diets/meal', function () { return view('pages.modules.diets.meal.meal.index', ['title' => "Posiłki"]); });
    Route::get('diets/ingredients', function () { return view('pages.modules.diets.ingredients.index', ['title' => "Składniki"]); });
    Route::get('diets/dish', function () { return view('pages.modules.diets.dish.index', ['title' => "Potrawy"]); });
});

Route::group(['prefix' => 'settings'], function(){
    Route::get('dictionary', function () { return view('pages.modules.settings.dictionary.index', ['title' => "Słownik"]); });
});

Route::get('/', function () { return view('pages.auth.index', ['title' => "Logowanie"]); });

Route::group(['prefix' => 'dashboard/logistic'], function(){
    Route::get('/', function () { return view('pages.modules.logistic.zones.index', ['title' => "Strefy dostaw"]); });
    Route::get('/zone/edit', function () { return view('pages.modules.logistic.zones.edit', ['title' => "Edycja strefy dostawy"], ['type' => "edit"]); });
    Route::get('/zone/add', function () { return view('pages.modules.logistic.zones.add', ['title' => "Dodaj strefę dostawy"], ['type' => "add"]); });
    Route::get('/report', function () { return view('pages.modules.logistic.report', ['title' => "Raport dostaw"]); });
});

Route::group(['prefix' => 'dashboard/staff'], function(){
    Route::get('/', function () { return view('pages.modules.staff.workers.index', ['title' => "Zarządzanie pracownikami"]); });
    Route::get('/role', function () { return view('pages.modules.staff.roles.index', ['title' => "Role i uprawnienia"]); });
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('/', function () { return view('pages.auth.index', ['title' => "Logowanie"]); });
    Route::get('/register', function () { return view('pages.auth.register', ['title' => "Rejestracja"]); });
    Route::get('/reset', function () { return view('pages.auth.reset-password', ['title' => "Resetuj hasło"]); });
    Route::get('/set', function () { return view('pages.auth.set-password', ['title' => "Aktywuj konto"]); });
    Route::get('/new', function () { return view('pages.auth.new-password', ['title' => "Ustaw nowe hasło"]); });
    Route::get('/thank-you', function () { return view('pages.auth.thankyou', ['title' => "Dziękujemy za rejestrację"]); });
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
