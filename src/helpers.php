<?php

use Illuminate\Support\Str;

if (! function_exists('get_csp_nonce')) {
    /**
     * Generate a hash to be used for CSP
     *
     * @return string
     */
    function get_csp_nonce()
    {
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