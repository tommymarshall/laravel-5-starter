@extends('layouts.default')

@section('content')
  <h2>Login</h2>

  @include('shared.errors')

  {!! Form::open() !!}
    <div class="form-group">
      {!! Form::label('email', 'Email:') !!}
      {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Password:') !!}
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Register', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  {!! Form::close() !!}
@stop