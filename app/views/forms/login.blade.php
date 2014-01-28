@extends('layout')

@section('content')

<!-- Login form -->
    <div class="col-md-6 col-md-offset-3">
    {{ Form::open(array('url' => '#', 'method'=>'post', 'id'=>'loginForm')) }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"/>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"/>
        </div>

        <div class="form-group">
            <button id="login-btn" class="btn btn-primary btn-lg btn-block">Log in</button>
        </div>
        {{ Form::close() }}
    </div>
<!-- Login form end -->
@stop