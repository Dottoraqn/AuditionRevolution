<!-- resources/views/auth/register.blade.php -->
@extends('master')

@section('title', 'Page Title')

@section('content')

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="inputName3" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputName3" value="{{ old('name') }}">
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail3" value="{{ old('email') }}">
        </div>
    </div>

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" id="inputPassword3" class="form-control" name="password">
        </div>
    </div>

    <div class="form-group">
        <label for="inputConfirmPassword3" class="col-sm-2 control-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" id="inputConfirmPassword3" class="form-control" name="password_confirmation">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </div>
</form>

@endsection
