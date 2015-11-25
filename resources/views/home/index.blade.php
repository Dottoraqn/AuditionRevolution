@extends('layouts.master')

@section('title', 'Page Title')

@section('head')

@endsection

@section('content')

@if (Auth::check())

<section class="text">
  <div class="container projects"> 
    <h3 style="text-align: center;">What Would You Like To Do?</h3>
    
    @unless(Auth::user()->isAble('talent'))
    <div class="row">
      <div class="col-md-4">
        <div class="mybutton" style="text-align: center;">
          <button class="btn btn-default btn-lg" type="button" onclick="window.location.href='/production_shows/create'">Create a Show</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mybutton" style="text-align: center;">
          <button class="btn btn-default btn-lg" type="button" onclick="window.location.href='/home/create'">Create an Audition</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mybutton" style="text-align: center;">
          <button class="btn btn-default btn-lg" id="save" type="submit">Save Changes</button>
        </div>  
      </div>
      @endunless
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
                    <a onclick="clickEnable({{$audition->id}})" href="javascript:;" value="true" id="{{$audition->id}}" style="float: right;">Edit</a>
                  </h4>
                </div>
                <div id="collapse{{$audition->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$audition->id}}">
                  <div class="panel-body">

                    Date: <a class="editable-click editable-disabled" href="javascript:;" data-type="text" data-placement="right" 
                      class="pUpdate" id="date{{$audition->date}}" data-pk="{{$audition->id}}">{{$audition->audition_date}}</a>
                    <br>
                    Time: <a class="editable-click editable-disabled" href="javascript:;" data-type="text" data-placement="right" 
                      class="pUpdate" id="date{{$audition->date}}" data-pk="{{$audition->id}}">{{$audition->audition_date}}</a>
                    <br>
                    Collaborators:  
                    
                    <br>
                    Roles Available: <br>

                  </div>
                </div>
              </div>
              @endforeach            
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>

</div>
</section>

@else
  <div class="section landing">
      <div class="container">
        <p>Audition Revolution is a small start up based in Atlanta, Georgia.</p>    
        <p> <a href="auth/register">Sign up</a> today or <a href="auth/login">login</a> now.</p>      
      </div>
  </div>
@endif
@endsection
