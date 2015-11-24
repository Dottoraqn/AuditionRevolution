@extends('layouts.master')
@section('title', 'Team');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
              <h2>{{ $teams->id }}</h2>
              <p>{{ $teams->user_id }}</p>
        </div>
    </div>
</div>
@endsection
