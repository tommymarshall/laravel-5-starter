@extends('layouts.default')

@section('content')
  <h2>Password Reminder</h2>

  @include('shared.error')

  {!! Form::open() !!}
    {!! Form::hidden('token', $token) !!}

    <div class="form-group">
      {!! Form::label('email', 'Email:') !!}
      {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Password:') !!}
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password_confirmation', 'Confirm Password:') !!}
      {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Confirm Change', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  {!! Form::close() !!}
@stop