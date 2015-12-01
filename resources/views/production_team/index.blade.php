@extends('layouts.master')
@section('title', 'Team');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Production Team</h3>
            @foreach ($teams as $team)
                <a href="{{ url('/production_team', $team->id) }}"><h2>{{ $team->user_id }}</h2></a>
            @endforeach
        </div>
    </div>
</div>


@endsection
