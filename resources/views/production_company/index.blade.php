@extends('layouts.master')
@section('title', 'Production Companies');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Production Companies</h3>

            @foreach ($production_companies as $production_company)
                <a href="{{ url('/production_companies', $production_company->id) }}"><h2>{{ $production_company->name }}</h2></a>
                <p>{{ $production_company->city }}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection