@foreach($items as $item)
  @if($item->isActive && $item->hasChildren())
    <ul>
      <?php
      $children = array_map(function ($child) {
        $child->link->attributes['class'] = 'btn btn-sm btn-ext btn-primary-outline';
        if ($child->isActive) {
          $child->link->attributes['class'] .= ' active';
          $child->link->attributes['aria-pressed'] = 'true';
        }
        return $child;
      }, $item->children()->toArray());
      ?>
      @include('layouts.partials.laravel-menu.main-menu',
        ['items' => $children]
      )
    </ul>
  @endif
  </li>
@endforeach