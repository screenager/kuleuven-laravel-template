<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>@section('title') Stages Orthopedagogie @show</title>
  <meta name="viewport" content="width=device-width">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/kul-vendors.css') }}" rel="stylesheet">
  <link href="{{ asset('css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('css/kul-improvements-by-ppw.css') }}" rel="stylesheet">

  <link rel="shortcut icon" type="image/x-icon" href="https://stijl.kuleuven.be/favicon.ico" />
  <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="{{ asset('css/kul-ie.css') }}" media="all" /><![endif]-->
  <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="{{ asset('css/my-ie.css') }}" media="all" /><![endif]-->
  <meta name="csrf-token" content='<?php echo csrf_token(); ?>'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  @if (getenv('APP_ENV') ?: 'production')
    @include('google-analytics')
  @endif
</head>
<body>

<div id="wrapper">
  <header id="header" class="noindex">
    <nav id="taskbar">
      <ul id="service-menu">
        <li><a href="#">Service item 1</a></li>
        <li><a href="#">Service item 2</a></li>
      </ul>
    </nav>

    <a href="http://www.kuleuven.be/kuleuven/" id="logo-link">
      {{ HTML::image('img/kuleuven_bootstrap/logo_kuleuven.png', 'KUL logo', ['id' => 'logo', 'width' => 160, 'height' => 53, 'title' => 'KU Leuven']) }}
    </a>

    <div id="mainnav-placeholder">
      <nav id="mainnav" class="noindex">
        <h2 class="access">Navigatie</h2>
        {{--
        {!! $MainNav->asUl(['id' => 'nav']) !!}
        --}}
      </nav>
    </div>
  </header>

  <div id="portal-columns" class="clearfix lc">
  <aside id="subnav">
    <div class="portlet noindex portletStaticText portlet-static-image hidden-xs">
      <div id="subnav-icon">&nbsp;</div>
      <p>{{ HTML::image('img/kuleuven_bootstrap/ppw_pionnetjeslogo.png', 'PPW logo', ['width' => 160, 'height' => 120, 'title' => 'PPW Logo']) }}</p>
    </div>

    <nav class="portlet portletNavigationTree">
      <h2><a href="#"><span>Stageplatform OGOP</span></a></h2>
      {{--
      {!! $SideNav->asUl(['class' => 'navTree navTreeLevel0']) !!}
      --}}
</nav>
</aside>


<section id="contentwrapper">
<div id="portal-breadcrumbs">
<span id="breadcrumbs-you-are-here">U bent hier:</span>
<span id="breadcrumbs-home">
<a href="{{ config('app.faculty_url', 'http://www.kuleuven.be') }}">
  <span>{{ config('app.faculty_name', 'My faculty') }}</span>
</a>
<span class="breadcrumbSeparator">›</span>
</span>

<span id="breadcrumbs-home">
<a href="{{ config('app.faculty_oe_url', 'http://www.kuleuven.be') }}">
  <span>{{ config('app.faculty_oe_short_name', 'My department') }}</span>
</a>
<span class="breadcrumbSeparator">›</span>
</span>

@if (config('app.faculty_section_short_name') != '')
<span id="breadcrumbs-home">
<a href="{{ config('app.faculty_section_url', 'http://www.kuleuven.be') }}">
  <span>{{ config('app.faculty_section_short_name', 'My section') }}</span>
</a>
<span class="breadcrumbSeparator">›</span>
</span>
@endif

<span id="breadcrumbs-1" dir="ltr">
<span id="breadcrumbs-current">
  <a href="{{URL::to('/')}}">
    {{ config('app.app_short_name', 'My application') }}
  </a>
</span>
<span class="breadcrumbSeparator">›</span>
</span>

<span id="breadcrumbs-1" dir="ltr">
<span id="breadcrumbs-current">
  @if (Request::path() == '/')
    Homepage
  @else
    @yield('page-title')
  @endif
</span>
</span>
</div>

<div id="page-title" class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h1>
  <span>@yield('page-title')</span>
</h1>
</div>
</div>

<div id="content">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  @if (Session::has('message'))
    <div class="alert alert-success">
      {!! Session::get('message') !!}
    </div>
  @endif
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  @yield('content')
</div>
</div>
</div>
</section> <!-- section contentwrapper -->
</div> <!-- portal-columns -->

<footer id="footer" class="noindex row">
<div class="col-md-4 col-sm-4 col-xs-12">
</div>
<div class="col-md-8 col-sm-8 col-xs-12" style="text-align: right">
Copyright {{ date('Y') }} © KU Leuven
@if (config('app.webmaster_email') != '')
| Feedback: {{ config('app.webmaster_email') }}
@endif
<br />
@if (config('app.realisatie_name') != '')
Realisatie:
@if (config('app.realisatie_url') != '')
<a href="{{ config('app.realisatie_url') }}">
  @endif
  {{ config('app.realisatie_name') }}
  @if (config('app.realisatie_url') != '')
</a>
@endif
@endif
| <a href="{{ config('app.disclaimer_url', 'http://www.kuleuven.be/kuleuven/disclaimer.html') }}">Disclaimer</a>
</div>
</footer>
</div> <!-- wrapper -->

<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/kul2014.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')

</body>
</html>