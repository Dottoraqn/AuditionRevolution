@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <h1>User Profiles</h1>
    <p>This is my body content.</p>
@endsection
