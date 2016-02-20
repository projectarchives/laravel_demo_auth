@extends('index')

@section('content')
{{ Form::open(['url' => 'login']) }}
    UserName:
    {{ Form::text('username') }}
    Password:
    {{ Form::password('password') }}
    {{ Form::submit('Login') }}
{{ Form::close() }}
@stop