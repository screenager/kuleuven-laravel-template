@extends('layouts.kul_2016.layout_kul_2016')

@section('page-title')
  {{ trans('interface.welcome_phrase', ['app_name' => env('APP_NAME')]) }}
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{ trans('interface.welcome_phrase', ['app_name' => env('APP_NAME')]) }}
    </div>
  </div>
@endsection