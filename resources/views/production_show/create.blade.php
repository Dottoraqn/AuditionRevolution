@extends('layouts.master')
@section('title', 'Shows');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Create a new Show</h3>
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
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::submit('Add Production Show', ['class'=> 'btn btn-primary form-control']) !!}
              </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
