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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('about-us', 'App\Http\Controllers\AboutController@index')->name('about-us');
Route::get('career', 'App\Http\Controllers\CareerController@index')->name('career');
Route::post('career', 'App\Http\Controllers\CareerController@career')->name('career');
Route::get('contact-us', 'App\Http\Controllers\ContactController@index')->name('contact-us');
Route::get('general-queries', 'App\Http\Controllers\GeneralQueriesController@index')->name('general-queries');
Route::post('general-queries',  'App\Http\Controllers\GeneralQueriesController@general_qu')->name('general-queries');
Route::get('news-and-events', 'App\Http\Controllers\NewsEventsController@index')->name('news-and-events');
Route::get('news-detail/{id}', 'App\Http\Controllers\NewsEventsController@detail')->name('news-detail');
Route::get('events-detail/{id}', 'App\Http\Controllers\NewsEventsController@eventsdetail')->name('events-detail');
Route::get('partners', 'App\Http\Controllers\PartnersController@index')->name('partners');
Route::get('partner-detail/{slug}' , 'App\Http\Controllers\PartnersController@detail')->name('partner-detail');
Route::get('services', 'App\Http\Controllers\ServicesController@index')->name('services');
Route::get('services-detail/{slug}', 'App\Http\Controllers\ServicesController@detail')->name('services-detail');
Route::get('solution-list', 'App\Http\Controllers\SolutionController@index')->name('solution-list');
Route::get('solution/{slug}', 'App\Http\Controllers\SolutionController@detail')->name('solution');
Route::get('success-stories', 'App\Http\Controllers\SuccessStoriesController@index')->name('success-stories');
Route::get('success-stories-detail/{slug}', 'App\Http\Controllers\SuccessStoriesController@detail')->name('success-stories-detail');

Route::Post('send-msg','App\Http\Controllers\ChatController@send')->name('chat-msg-send');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('setlocale/{locale}', function ($locale) {
    // dd($locale);
    if (in_array($locale, \Config::get('app.locales'))) {
      session(['locale' => $locale]);
    }
    return redirect()->back();
  });

  Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return redirect(route('home'));
   });
