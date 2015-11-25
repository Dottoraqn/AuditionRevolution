@extends('layouts.master')
@section('title', 'Shows');

@section('content')
    <?php echo $shows; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
              <h2>{{ $shows->name }}</h2>
              <p>{{ $shows->description}}</p>
              <p>{{ $shows->website }}</p>
              <p>{{ $shows->start_date }}</p>
              <p>{{ $shows->end_date }}</p>
              <p>{{ $shows->address }}</p>
              <p>{{ $shows->city }}</p>
              <p>{{ $shows->state }}</p>
              <p>{{ $shows->zipcode }}</p>
        </div>
    </div>
</div>
@endsection
