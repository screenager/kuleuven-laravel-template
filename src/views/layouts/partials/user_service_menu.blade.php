@if (Route::has('login'))
  @if (Auth::check())
    <li>
      <a ref="{{ URL::to('/') }}"
         class="dropdown-toggle"
         id="more-menu0"
         data-toggle="dropdown"
         role="button"
         aria-haspopup="true"
         aria-expanded="false">
        <i class="material-icons" aria-hidden="true">person_outline</i>
        {{ Auth::user() }}
      </a>
      <ul class="dropdown-menu" aria-labelledby="more-menu0" aria-expanded="false">
        <li>
          <a href=""><i class="material-icons">thumb_up</i> My settings</a>
        </li>
        <li>
          <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Afmelden
          </a>
        
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </li>
  @else
    <li>
      <a href="{{ url('/login') }}">Login</a>
    </li>
  @endif
@endif