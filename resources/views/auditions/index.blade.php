@extends('layouts.master')

@section('title', 'Audition')

@section('content')

<section class="text">
  <div class="container projects"> 
    <h3 style="text-align: center;">Your Active Auditions</h3>
    
      @if(isset($auditions) && $auditions != '' )
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body" id="auditions">      
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

              @foreach($auditions as $audition)
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{$audition->id}}">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="heading{{$audition->id}}" href="#collapse{{$audition->id}}" aria-expanded="true" aria-controls="collapse{{$audition->id}}">
                      Open {{$audition->name}} Details
                    </a>
                    {{-- <a onclick="clickEnable({{$audition->id}})" href="javascript:;" value="true" id="{{$audition->id}}" style="float: right;"> Edit</a> --}}
                    <a href="/auditions/{{$audition->id}}" style="float:right;"> Edit</a> 
                    <a href="production_shows/{{$audition->show_id}}" value="true" id="show_{{$audition->id}}" style="float: right;">View Show | </a>
                  </h4>
                </div>
                <div id="collapse{{$audition->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$audition->id}}">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <h4>Show</h4> <h5>{{$audition->show}} </h5>
                        <h4>Date</h4> <h5> <a class="editable-click editable-disabled" href="javascript:;" data-type="text" data-placement="right" 
                                           class="pUpdate" id="date{{$audition->formatted_audition_date}}" data-pk="{{$audition->id}}">{{$audition->formatted_audition_date}}</a> </h5>
                        <h4>Time</h4> <h5> <a class="editable-click editable-disabled" href="javascript:;" data-type="text" data-placement="right" 
                          class="pUpdate" id="date{{$audition->date}}" data-pk="{{$audition->id}}">{{$audition->audition_time}}</a> </h5>
                      </div>
                      <div class="col-sm-6">
                        <h4>Owner</h4> <h5>{{$audition->owner_name}} </h5>
                        <h4>Collaborators</h4> <h5> @foreach($audition->collaborators as $collab)
                                                    {{$collab}}, 
                                                    @endforeach  </h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach            
            </div>
          </div>
        </div>
      </div>
        @else
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body" id="auditions">
              <p>No current auditions.</p>
            </div>
          </div>
        </div>
      @endif
    </div>

</div>
</section>

@endsection
