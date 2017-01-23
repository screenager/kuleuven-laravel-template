<nav class="navbar nav-tabs nav-more collapse" id="local-header">
  <ul>
    @if (isset($MainNav))
      @include('layouts.kul_2016.partials.laravel-menu.main-menu', array('items' => $MainNav->roots()))
    @endif
  </ul>
</nav>

