@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>Audition Revolution is a small start up based in Atlanta, Georgia.</p>
    
@endsection
