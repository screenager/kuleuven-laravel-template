@extends('layouts.kul_2016.layout_kul_2016')

@section('page-title')
  Contact
@endsection

@section('content')
  <p>
    <strong>Submission result:</strong> {{ $result }}
  </p>

  <h3>Form</h3>

  <div class="row">
    <div class="col-md-12">
      @if (class_exists('Form'))
        {!! Form::open(['route' => 'contact']) !!}

        <div class="form-group">
          {{ Form::label('receiver', 'Receiver') }}
          {{ Form::select('receiver', ['webmaster' => 'Webmaster', 'administration' => 'Administration'], null, ['class' => 'select2']) }}
        </div>

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