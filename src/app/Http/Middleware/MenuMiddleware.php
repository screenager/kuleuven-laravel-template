<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Menu;

class MenuMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next) {
    Menu::make('MainNav', function($menu) {
      $menu->add(trans('interface.home'), [
        'url' => route('homepage'),
      ]);
      $menu->add(trans('interface.about'), [
        'url' => route('about'),
      ]);
      if (!Auth::check() && Route::has('login')) {
        $menu->add(trans('auth.login'), [
          'url' => route('login'),
        ]);
      }
    });


    return $next($request);
  }
}
