@extends('index')

     @section('content')
     {{ Form::open(['url' => 'register']) }}
         UserName:
         {{ Form::text('username') }}
         Password:
         {{ Form::password('password') }}
         FirstName: {{ Form::text('first_name') }}
         LastName: {{ Form::text('last_name') }}
         {{ Form::submit('Register') }}
     {{ Form::close() }}
     @stop