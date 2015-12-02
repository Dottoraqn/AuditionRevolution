@extends('layouts.master')
@section('title', 'audition');

@section('content')
    <?php echo $audition; ?>
    <?php //echo $audition; ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-12">
                  <h2>{{$audition->name}}</h2>
                  <p><strong>Description:</strong> {{$audition->description}}</p>
                </div>
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-4">
                      <p><strong>Audition:</strong> {{$audition->formatted_audition_date}}</p>
                      <p><strong>Audition Date:</strong> {{$audition->audition_time}}</p>
                    </div>
                    <div class="col-sm-4">
{{--                       <p><strong>Start Date:</strong></p>
                      <p>{{$audition->formatted_start_date}}</p>
                      <p><strong>End Date:</strong></p>
                      <p>{{$audition->formatted_end_date}}</p>
                    </div>
                    <div class="col-sm-4">
                      <p><strong>Payment:</strong> {{$audition->payment_type}}</p>
                      <p><strong>Union:</strong> {{$audition->union}}</p>
                    </div>
 --}}                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <h2>Company</h2>
                <address>
{{--                     <strong>{{$audition->company->name}}</strong>
                    <br>{{$audition->company->address}}
                    <br>{{$audition->company->city}}, {{$audition->company->state}} {{$audition->company->zipcode}}
                    <br><a href="{{$audition->website}}" alt="{{$audition->name}}">{{$audition->website}}</a>
                    <br>
 --}}                </address>
            </div>
        </div>
        <!-- /.row -->
@endsection
