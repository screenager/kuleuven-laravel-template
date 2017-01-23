<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class LayoutHelper {

  public static function getKULtemplatePathPrefix() {
    $path = 'layouts.kul_2016.fetched_with_gulp.icts' ;

    if (env('SUB_LAYOUT') != null && env('SUB_LAYOUT') != 'default') {
      $path .= '.' . env('SUB_LAYOUT');
    }

    return $path;
  }

  public static function showChildreninMainMenu() {
    return false; // todo : first fix the bootstrap 4 code in order to work
  }

  public static function getCSPhash() {
    // csrf_token() can't be used, as in security.php the required libraries are not loaded

    if (isset($_SESSION['nonce'])) {
      return $_SESSION['nonce'];
    }

    //$nonce = app('str')->random(40);
    $nonce = Str::random(40);
    $_SESSION['nonce'] = $nonce;

    return $nonce;

  }
}