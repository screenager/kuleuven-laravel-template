<?php

return [
  'content' => [
    'default' => 'global',
    'profiles' => [
      'global' => [
        'base-uri' => [
          "'self'",
          'about:'
        ],
        'font-src' => [
          "'self'",
          'data:',
          'https://fonts.gstatic.com', // needed by kul style 2016
        ],
        'object-src' => "'none'",
        'img-src' => [
          "'self'",
          'data:',
          'https://www.google-analytics.com',
          //'http://www.google-analytics.com',
          'https://stijl.kuleuven.be/2016/img/svg/logo.svg', // needed by kul style 2016
        ],
        'script-src' => [
          'https://www.google-analytics.com',
          // "'self'",
          "'unsafe-eval'", // needed for bootstrap 4 de-collapse
          env('APP_DEBUG_BAR') == 'false' ? "'unsafe-inline'" : "'nonce-" . App\Helpers\LayoutHelper::getCSPhash() . "'",
          'about:', # for the 'about:blank' by google analytics
          // 'www.google-analytics.com',
          // 'ssl.google-analytics.com',
        ],
        'style-src' => [
          "'self'",
          "'unsafe-inline'",
        ],
      ],
    ],
  ],
];