<?php

// Home
Breadcrumbs::register('homepage', function($breadcrumbs) {
  $breadcrumbs->push(trans('interface.home'), route('homepage'));
});

// Pages
Breadcrumbs::register('about', function($breadcrumbs) {
  $breadcrumbs->parent('homepage');
  $breadcrumbs->push(trans('interface.about'), route('about'));
});

Breadcrumbs::register('terms', function($breadcrumbs) {
  $breadcrumbs->parent('about');
  $breadcrumbs->push('Terms', route('terms'));
});
Breadcrumbs::register('conditions', function($breadcrumbs) {
  $breadcrumbs->parent('about');
  $breadcrumbs->push('Conditions', route('conditions'));
});

Breadcrumbs::register('contact', function($breadcrumbs) {
  $breadcrumbs->parent('homepage');
  $breadcrumbs->push('Contact', route('contact'));
});

// Home > Login
Breadcrumbs::register('login', function($breadcrumbs) {
  $breadcrumbs->parent('homepage');
  $breadcrumbs->push('Login', route('login'));
});
