<?php

/*
|--------------------------------------------------------------------------
| Uses
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Language routes
|--------------------------------------------------------------------------
*/

Route::get('/change_language/{language}/{path?}', [LanguageController::class, 'changeLanguage'])
    ->name('language.change')
    ->where('path', '.*');

/*
|--------------------------------------------------------------------------
| Generic pages
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/en/home');
});

//Route::get('/3d', function () {
//    return redirect('/en/3d');
//});

Route::prefix('{language}')
    ->where(['language' => 'en|ru|bg|jp'])
    ->group(function () {
        Route::get('/home', function () {
            return view('pages.generic.home');
        })->name('home');

        Route::get('/leee', function () {
            return view('pages.generic.leee');
        })->name('leee');
    });
