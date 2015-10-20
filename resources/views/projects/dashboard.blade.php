@extends('master')

@section('title', 'Search Auditions')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <form>
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <input type="text" class="form-control" placeholder="Text input">
          </div>
          <div class="col-sm-6 col-md-2">
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select> 
          </div>
          <div class="col-sm-6 col-md-2">
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select> 
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-lg btn-block">Search Auditions</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row" id="audition-results">
    <div class="audition-card">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </div>
    </div>
    <div class="audition-card">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </div>
    </div>
    <div class="audition-card">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </div>
    </div>
    <div class="audition-card">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
          <button type="button" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Start New Project
          </button>
          <div class="row">
            <div class="col-md-12"> 
              
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Casting Project #1</h3>
                </div>
                <div class="panel-body">
                  Organizer: Jarrad
                  Users: Erin, Emma, Kevin
                  Roles: Role #1, Role #2, Role #3
                  Type: Open Casting
                </div>
              </div>
              
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Casting Project #1</h3>
                </div>
                <div class="panel-body">
                  Organizer: Jarrad
                  Users: Erin, Emma, Kevin
                  Roles: Role #1, Role #2, Role #3
                  Type: Open Casting
                </div>
              </div>
              
            </div>
            <div class="col-md-4"> 
                Start up
            </div>
          </div>
          <div class="row">
            Search through closed projects
          </div>
        </div>
      </div>
@endsection
