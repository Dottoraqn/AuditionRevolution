@extends('layouts.master')
@section('title', 'Show');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Production Shows</h3>
            @foreach ($production_shows as $show)
                <a href="{{ url('/production_shows', $show->id) }}"><h2>{{ $show->name }}</h2></a>
            @endforeach
        </div>
    </div>
</div>


@endsection
