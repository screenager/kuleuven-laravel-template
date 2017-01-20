<?php

// Home
Breadcrumbs::register('homepage', function($breadcrumbs) {
  $breadcrumbs->push(trans('interface.home'), route('homepage'));
});

// About
Breadcrumbs::register('about', function($breadcrumbs) {
  $breadcrumbs->parent('homepage');
  $breadcrumbs->push(trans('interface.about'), route('about'));
});

// Home > Login
Breadcrumbs::register('login', function($breadcrumbs) {
  $breadcrumbs->parent('homepage');
  $breadcrumbs->push('Login', route('login'));
});
