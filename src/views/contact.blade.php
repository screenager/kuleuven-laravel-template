@extends('layouts.kul_2016.layout_kul_2016')

@section('page-title')
  Contact
@endsection

@section('content')
  <p>
    <strong>Result:</strong> {{ $result }}
  </p>

  <div class="row">
    <div class="col-md-12">
      @if (class_exists('Form'))
        {!! Form::open(['route' => 'contact']) !!}
          <div class="form-group">
            {{ Form::label('message', 'Message') }}
            {{ Form::textarea('message', null, ['class' => 'wysiwyg']) }}
          </div>

          {{ Form::submit('Send') }}
        {!! Form::close() !!}
      @endif
    </div>
  </div>
@endsection