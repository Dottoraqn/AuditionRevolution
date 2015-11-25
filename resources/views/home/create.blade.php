@extends('layouts.master')
@section('title', 'Shows')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <hr />
            @if ($errors->any())
              <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif

            <section class="text">
              <div class="container"> 
                <h1 style="text-align: center;">Create New Audition </h1>
                
            {!! Form::open(['url' => 'home']) !!}

            <div class="form-group"> 
            {!! Form::label('show_id', 'Select Show:') !!}
            {!! Form::select('show_id', $lists, Input::old('show_id')) !!}
            </div>

            <div class="form-group"> 
              {!! Form::label('name', 'Name:') !!}
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group"> 
              {!! Form::label('description', 'Description:') !!}
              {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group"> 
              {!! Form::label('union', 'Union:') !!}
              {!! Form::text('union', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group"> 
              {!! Form::label('email', 'Email:') !!}
              {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group"> 
              {!! Form::label('audition_date', 'Audition Date:') !!}
              {!! Form::text('audition_date', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group"> 
              {!! Form::label('audition_time', 'Audition Time:') !!}
              {!! Form::text('audition_time', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group"> 
              {!! Form::label('address', 'Address:') !!}
              {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group"> 
              {!! Form::label('city', 'City:') !!}
              {!! Form::text('city', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group"> 
              {!! Form::label('state', 'State:') !!}
              {!! Form::text('state', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group"> 
              {!! Form::label('zipcode', 'Zip Code:') !!}
              {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group"> 
              {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
            </div>  

            {!! Form::close() !!}

            </div>
            </section>
        </div>
    </div>
</div>
@endsection
