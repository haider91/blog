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
Route::group(['prefix'=>LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){


Route::get('/', function () {
    return view('index');
});

Route::get('/redirect/{service}', 'App\Http\Controllers\SocialController@redirect');
Route::get('/callback/{service}', 'App\Http\Controllers\SocialController@callback');

Route::get('/offer', 'App\Http\Controllers\OfferController@offerQuery');
Route::get('/offer/add', 'App\Http\Controllers\OfferController@addOffer');
Route::post('/offer/store', 'App\Http\Controllers\OfferController@store')->name('offer.store');
Route::get('offer/all','App\Http\Controllers\OfferController@showAllOffers');









});
