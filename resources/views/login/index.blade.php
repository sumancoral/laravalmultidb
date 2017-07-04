@extends('layouts.default')
 
@section('content')

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>
<p>
    {{ Form::label('Nickname', 'nickname') }}
    {{ Form::text('nickname')}}
</p>
<p>
    {{ Form::label('Username', 'username') }}
    {{ Form::text('username') }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}

    

@endsection