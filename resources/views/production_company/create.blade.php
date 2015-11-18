@extends('layouts.master')
@section('title', 'Production Companies');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Create a new Production Company</h3>
            <hr />
            @if ($errors->any())
              <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif

            {!! Form::open(['url' => 'production_companies']) !!}

              <div class="form-group">
                {!! Form::label('name', 'Name:' ) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('website', 'Website:' ) !!}
                {!! Form::text('website', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('address', 'Address:' ) !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('city', 'City:' ) !!}
                {!! Form::text('city', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('state', 'State:' ) !!}
                {!! Form::text('state', null, ['class' => 'form-control']) !!}
              </div>
              
              <div class="form-group">
                {!! Form::label('union', 'Union:' ) !!}
                {!! Form::text('union', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::submit('Add Production Company', ['class'=> 'btn btn-primary form-control']) !!}
              </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection