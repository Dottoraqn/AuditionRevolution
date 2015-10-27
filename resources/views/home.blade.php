@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

@if (Auth::check())
  @include('projects')
@else
<div class="section landing">
    <div class="container">
      <p>Audition Revolution is a small start up based in Atlanta, Georgia.</p>    
      <p> <a href="auth/register">Sign up</a> today or <a href="auth/login">login</a> now.</p>      
    </div>
</div>
@endif 
      
@endsection
