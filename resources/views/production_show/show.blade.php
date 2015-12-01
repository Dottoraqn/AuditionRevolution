@extends('layouts.master')
@section('title', 'Shows');

@section('content')
    <?php //echo $shows; ?>
    <header class="business-header" style="background:url('{{$shows->show_banner_url}}')center center no-repeat scroll; -webkit-background-size:cover; -moz-background-size:cover; background-size:cover; -o-background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="business-tagline">{{$shows->name}}</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-12">
                  <h2>Description</h2>
                  <p>{{$shows->description}}</p>
                </div>
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-4">
                      <p><strong>Audition:</strong></p>
                      <p><strong>Audition Date:</strong></p>
                    </div>
                    <div class="col-sm-4">
                      <p><strong>Start Date:</strong></p>
                      <p>{{$shows->formatted_start_date}}</p>
                      <p><strong>End Date:</strong></p>
                      <p>{{$shows->formatted_end_date}}</p>
                    </div>
                    <div class="col-sm-4">
                      <p><strong>Payment:</strong> {{$shows->payment_type}}</p>
                      <p><strong>Union:</strong> {{$shows->union}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <h2>Company</h2>
                <address>
                    <strong>{{$shows->company->name}}</strong>
                    <br>{{$shows->company->address}}
                    <br>{{$shows->company->city}}, {{$shows->company->state}} {{$shows->company->zipcode}}
                    <br><a href="{{$shows->website}}" alt="{{$shows->name}}">{{$shows->website}}</a>
                    <br>
                </address>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
          @foreach( $shows->auditions as $audition )
            @foreach( $audition->audition_roles as $role )
              <div class="col-sm-6 role-panels">
                <div class="role-information">
                  <h2>{{$role->character_name}}</h2>
                  <p>{{$role->character_description}}</p>
                  <p>{{$role->character_sex}}</p>
                  <p>{{$role->character_age}}</p>
                  <p>{{$role->character_ethnicity}}</p>
                  <button type="button" class="btn btn-primary role-apply" data-toggle="modal" data-target="#showRole_{{$role->id}}">Apply</button>
                </div>
              </div>
              <div class="modal fade" id="showRole_{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="projectModal">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">{{ $role->character_name }}</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Apply</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @endforeach
        </div>
        <!-- /.row -->
@endsection
