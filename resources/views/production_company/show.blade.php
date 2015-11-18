@extends('layouts.master')
@section('title', 'Production Companies');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
              <h2>{{ $production_company->name }}</h2>
              <p>{{ $production_company->city }}</p>
        </div>
    </div>
</div>
@endsection