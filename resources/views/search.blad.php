@extends('master')

@section('title', 'Search Auditions')

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <form>
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <input type="text" class="form-control" placeholder="Text input">
          </div>
          <div class="col-sm-6 col-md-4">
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select> 
          </div>
          <div class="col-sm-6 col-md-4">
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select> 
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
