@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<!--  <h1>FirstName LastName</h1>-->
<!--    <p>This is my body content.</p>-->

<div id="name">FirstName LastName
<?php 
    //TODO: Replace firstname lastname
    //echo firstName." ".lastName; 
    ?>
</div>
<img src="https://d38zhw9ti31loc.cloudfront.net/wp-content/uploads/2013/07/Crystal-headshot-new.jpg" alt="headshot">

@endsection
