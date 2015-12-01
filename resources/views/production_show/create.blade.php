@extends('layouts.master')
@section('title', 'Shows');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Create a new show</h3>
            <hr />
            @if ($errors->any())
              <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif

            {!! Form::open(['url' => 'production_shows']) !!}

              <div class="form-group">
                {!! Form::label('name', 'Name:' ) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('description', 'Description:' ) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('website', 'Website:' ) !!}
                {!! Form::text('website', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('union', 'Union:' ) !!}
                {!! Form::textarea('union', null, ['class' => 'form-control']) !!}
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group"> 
                    {!! Form::label('audition_date', 'Audition Date:') !!}
                    {!! Form::text('audition_date', null, ['class' => 'form-control datepicker', 'id' => 'datepicker']) !!}
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group"> 
                    {!! Form::label('audition_time', 'Audition Time:') !!}
                    {!! Form::text('audition_time', null, ['class' => 'form-control datepicker']) !!}
                  </div>
                </div>
              </div>
              <div class="form-group"> 
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group"> 
                    {!! Form::label('city', 'City:') !!}
                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group"> 
                    {!! Form::label('state', 'State:') !!}
                    {!! Form::text('state', null, ['class' => 'form-control']) !!}
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group"> 
                    {!! Form::label('zipcode', 'Zip Code:') !!}
                    {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
                  </div>
                </div>
              </div>
              <div class="form-group">
                {!! Form::submit('Add Production Show', ['class'=> 'btn btn-primary form-control']) !!}
              </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
  $(function() {
    $( ".datepicker" ).datepicker();
  });
</script>
@endsection
