<nav class="navbar nav-tabs nav-more" id="local-header">
  <ul class="nav navbar-nav">
    @if (isset($MainNav))
      @include('layouts.partials.laravel-menu.main-menu', array('items' => $MainNav->roots()))
    @endif
  </ul>
</nav>

