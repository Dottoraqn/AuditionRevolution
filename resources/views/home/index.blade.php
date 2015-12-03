@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

@if (Auth::check())

<section class="text">
  <div class="container">
    <h3 style="text-align: center;">What Would You Like To Do?</h3>

  <div class="row placeholders">
    <div class="col-xs-6 col-sm-2 col-md-3 placeholder">
      <a href="/production_shows/create"><img src="/img/company.png" class="img-responsive" alt="Generic placeholder thumbnail"></a>
      <h4 href="/production_shows/create">Create Shows</h4>
      <span class="text-muted">Create a New Show</span>
    </div>
    <div class="col-xs-6 col-sm-2 col-md-3 placeholder">
      <a href="/home/create"><img src="/img/audition.png" class="img-responsive" alt="Generic placeholder thumbnail"></a>
      <h4 href="/auditions/create">Create Auditions</h4>
      <span class="text-muted">Create a New Audition</span>
    </div>
    <div class="col-xs-6 col-sm-2 col-md-3 placeholder">
      <a href="/auditions"><img src="/img/active_list.png" class="img-responsive" alt="Generic placeholder thumbnail"></a>
      <h4 href="/auditions">Your Auditions</h4>
      <span class="text-muted">See All Active Auditions</span>
    </div>
    <div class="col-xs-6 col-sm-2 col-md-3 placeholder">
      <img src="/img/start_aa.png" class="img-responsive" alt="Generic placeholder thumbnail">
      <h4>Audition Assistant</h4>
      <span class="text-muted">Start Audition Assistant</span>
    </div>
  </div>
  </div>
</section>

@else
  <div class="section landing">
      <div class="container">
        <p>Audition Revolution is a small start up based in Atlanta, Georgia.</p>    
        <p> <a href="auth/register">Sign up</a> today or <a href="auth/login">login</a> now.</p>      
      </div>
  </div>
@endif
@endsection
