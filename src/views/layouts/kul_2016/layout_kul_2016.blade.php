<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
  <base href="{{ getenv('APP_URL') }}" />

  <title>
    @if (array_key_exists('page-short-title', app('view')->getSections()))
      @yield('page-short-title')
      -
    @elseif (array_key_exists('page-title', app('view')->getSections()))
      @yield('page-title')
      -
    @endif
    @section('title') {{ env('APP_NAME') }} @show
  </title>

  <link href="{{ asset('css/style2016/app.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Open+Sans:400italic,600italic,700italic,400,700,600|Merriweather:400italic,400,700" type="text/css">

  @if (getenv('GOOGLE_ANALYTICS_ENABLED') == 'true')
    @include('layouts.kul_2016.partials.google-analytics')
  @endif
</head>

<body>
  <div class="l-page">
    <!-- global header-->
    @include(LayoutHelper::getKULtemplatePathPrefix() . '.header_' . App::getLocale())
    <!-- end global header-->

    <!-- local header-->
    @include('layouts.kul_2016.partials.app_local_header')
    <!-- end local header-->

    <!-- main content-->
    @if (array_key_exists('jumbotron', app('view')->getSections()))
      @yield('jumbotron')
    @endif

    <div class="container">
      <?php $showSide = (!isset($hideSide) || $hideSide == false); ?>

      <div class="row"><!-- m-t-2 provides a margin-top -->
        <div id="contentwrapper" class="col-xs-12 {{ $showSide ? 'col-md-8' : 'col-md-12' }}">

          @if (Route::currentRouteName() != 'homepage' && isset($MainNav))
            <div class="menu-2nd-level">
              @include('layouts.kul_2016.partials.laravel-menu.main-menu-2nd-level', array('items' => $MainNav->roots()))
            </div>
          @endif

          @if (class_exists('Breadcrumbs'))
            {!! Breadcrumbs::render() !!}
          @endif

          @if (array_key_exists('page-title', app('view')->getSections()))
            <h1 id="parent-fieldname-title" class="documentFirstHeading">
              @yield('page-title')
            </h1>
          @endif

          @if (array_key_exists('page-subtitle', app('view')->getSections()))
            <h2 id="subtitle">
              @yield('page-subtitle')
            </h2>
          @endif

          @include('layouts.kul_2016.partials.app_flashmessages')

          @if (array_key_exists('content', app('view')->getSections()))
            <div id="content-core">
              @yield('content')
            </div>
          @endif
        </div><!-- end contentwrapper -->

        @if ($showSide)
          <div class="col-xs-12 col-md-4">
            @yield('content_right')
          </div>
        @endif

      </div>

      <!-- global doormat-->
      @include(LayoutHelper::getKULtemplatePathPrefix() .  '.footer_' . App::getLocale())
      <!-- end global doormat-->

    </div> <!-- end container -->
  </div>

  <!-- flyout-->
  @include(LayoutHelper::getKULtemplatePathPrefix() . '.flyout_' . App::getLocale())
  <!-- end flyout-->

  <script src="{{ asset('js/style2016/vendors.js') }}" nonce="{{ LayoutHelper::getCSPhash() }}"></script>
  <script src="{{ asset('js/style2016/app.js') }}" nonce="{{ LayoutHelper::getCSPhash() }}"></script>
</body>
</html>
