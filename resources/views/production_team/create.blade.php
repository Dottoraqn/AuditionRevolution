@extends('layouts.master')
@section('title', 'Shows');

@section('content')
    @if(Auth::user()->isAble('admin'))
        <h3>Hello</h3>
    @endif
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

            {!! Form::open(['url' => 'production_team']) !!}

              <div class="form-group">
                {!! Form::label('role', 'Role:' ) !!}
                {!! Form::text('role', null, ['class' => 'form-control']) !!}
              </div>

              <div class="form-group">
                {!! Form::submit('Add User', ['class'=> 'btn btn-primary form-control']) !!}
              </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
