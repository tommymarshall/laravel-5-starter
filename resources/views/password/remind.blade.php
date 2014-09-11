@extends('layouts.default')

@section('content')
  <h2>Password Reminder</h2>

  @include('shared.error')

  {!! Form::open() !!}
    <div class="form-group">
      {!! Form::label('email', 'Email:') !!}
      {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Send Password Reset', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  {!! Form::close() !!}
@stop