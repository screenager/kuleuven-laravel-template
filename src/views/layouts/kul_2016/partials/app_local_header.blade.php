<nav class="local-header">
  <div class="container container-relative">
    <h2>
      <a href="{{ URL::to('/') }}"><i class="material-icons">home</i> {{ env('APP_NAME') }}</a>
    </h2>

    <a href="#" class="btn-toggle hidden-lg-up" role="button"
       aria-expanded="false" data-toggle="collapse" data-target="#local-header"
       aria-controls="local-header">Menu
      <span class="lines"></span>
    </a>
    
    <nav class="nav-user pull-xs-right">
      <ul>
        @include('layouts.kul_2016.partials.user_service_menu')
        @include('layouts.kul_2016.partials.lang_switcher')
      </ul>
    </nav>
      
    @include('layouts.kul_2016.partials.app_main_menu')
  </div>
</nav>