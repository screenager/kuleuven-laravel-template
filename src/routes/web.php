<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Http\Request;

Route::group([
  //'prefix' => LaravelLocalization::setLocale(),
  'middleware' => [
    //'secure.content',
    //'localeSessionRedirect', 'localizationRedirect',
  ]
], function () {
  Route::get('/', function () {
    return view('welcome');
  })->name('homepage');

  Route::get('about', function () {
    return view('about');
  })->name('about');

  Route::get('terms', function () {
    return view('terms');
  })->name('terms');

  Route::get('conditions', function () {
    return view('conditions');
  })->name('conditions');

  Route::match(['get', 'post'], 'contact', function (Request $request) {
    $result = null;
    if ($request->isMethod('post')) {
      if (class_exists('Purifier')) {
        $result = clean($request->get('message'), 'contact');
      }
    }
    return view('contact', ['result' => $result]);
  })->name('contact');



  Route::group(['middleware' => ['auth.basic.once']], function () {
    // place your secured files here

  });

  // Authentication routes
  // Route::auth();
});
