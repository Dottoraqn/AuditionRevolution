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
@endsection
