<?php

namespace App\Helpers;

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
}