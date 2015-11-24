@extends('layouts.master')
@section('title', 'Shows');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
              <h2>{{ $shows->name }}</h2>
              <p>{{ $shows->city }}</p>
        </div>
    </div>
</div>
@endsection
