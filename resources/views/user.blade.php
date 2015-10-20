@extends('master')

<?php if ($route->input('id') == 1)
{
  echo "Yes";
} ?>
@section('title', 'Page Title')

@section('content')
  <h1>User Profiles</h1>
    <p>This is my body content.</p>
@endsection
