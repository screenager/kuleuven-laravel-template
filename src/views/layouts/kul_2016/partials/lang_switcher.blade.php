@if (class_exists('LaravelLocalization'))
  @foreach (config('laravellocalization.supportedLocales') as $langCode => $langProps)
    @if ($langCode == app()->getLocale())
      @continue
    @endif
    <li>
      <a href="{{ LaravelLocalization::getLocalizedURL($langCode) }}">
        {{ strtoupper($langCode) }}
      </a>
    </li>
  @endforeach
@endif