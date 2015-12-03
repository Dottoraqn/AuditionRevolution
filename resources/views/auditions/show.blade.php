@extends('layouts.master')
@section('title', 'audition');

@section('content')
    <?php //echo $audition; ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-8">
                <h2>{{$audition->name}}</h2>
                <p><strong>Description:</strong> {{$audition->description}}</p>
              </div>
              <div class="col-sm-4">
                <h2>Audition Details</h2>
                <p><strong>Audition:</strong> {{$audition->formatted_audition_date}}</p>
                <p><strong>Audition Date:</strong> {{$audition->audition_time}}</p>
                <p><strong>Email:</strong> {{$audition->email}}</p>
                <p><strong>Union:</strong> {{$audition->union}}</p>
                <a href="" class="btn btn-primary">Edit Audition</a>
                <a href="" class="btn btn-primary">Add Roles</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
@endsection
