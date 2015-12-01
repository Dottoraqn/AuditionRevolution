@extends('layouts.master')

@section('title', 'Search Auditions')

@section('content')
  <?php //echo $shows; ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <form>
        <div class="row search-filters">
          <div class="col-sm-12 col-md-6 search-input">
            <input type="text" class="form-control" placeholder="Keyword">
          </div>
          <div class="col-sm-12 col-md-6 search-input">
            <input type="text" class="form-control" placeholder="Location">
          </div>
          <div class="col-sm-4 search-input">
            <select class="form-control">
              <option>Gender</option>
              <option>Male</option>
              <option>Female</option>
              <option>Chose not to specify</option>
            </select> 
          </div>
          <div class="col-sm-4 search-input">
            <select class="form-control">
              <option>Age</option>
              <option>Child</option>
              <option>Teen</option>
              <option>18-24</option>
              <option>25-39</option>
              <option>39-55</option>
              <option>55-74</option>
              <option>74+</option>
            </select> 
          </div>
         <div class="col-sm-4 search-input">
            <button type="button" class="btn btn-primary btn-block">Search Auditions</button>
          </div>
          <div class="col-sm-12">
            <button class="btn" type="button" data-toggle="collapse" data-target="#additionalFilters" aria-expanded="false" aria-controls="additionalFilters">
              Additional Filters
            </button>
            <div class="collapse" id="additionalFilters">
              <div class="well">
                <div class="row">
                   <div class="col-sm-4 search-input">
                    <select class="form-control">
                      <option>Production Type</option>
                      <option>Musical</option>
                      <option>Theater</option>
                      <option>Television</option>
                      <option>Movie</option>
                    </select>
                  </div>
                   <div class="col-sm-4 search-input">
                    <select class="form-control">
                      <option>Actor Type</option>
                      <option>Singing</option>
                      <option>Dancing</option>
                      <option>Acting</option>
                      <option>Acrobatics</option>
                    </select>
                  </div>
                   <div class="col-sm-4 search-input">
                    <select class="form-control">
                      <option>Union</option>
                      <option>Yes</option>
                      <option>No</option>
                    </select>
                  </div>
                   <div class="col-sm-4 search-input">
                    <select class="form-control">
                      <option>Ethnicity</option>
                      <option>Caucasian</option>
                      <option>African American</option>
                      <option>Insert More Here</option>
                    </select>
                  </div>
                   <div class="col-sm-4 search-input">
                    <select class="form-control">
                      <option>Payment Type</option>
                      <option>Contract</option>
                      <option>Hourly</option>
                      <option>Salaried</option>
                    </select>
                  </div>
                   <div class="col-sm-4 search-input">
                    <select class="form-control">
                      <option>Type</option>
                      <option>Musical</option>
                      <option>Theater</option>
                      <option>Television</option>
                      <option>Movie</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row" id="audition-results">
    @foreach($shows as $show )
    <div class="audition-card col-lg-12">
      <div class="row">
        <div class="panel panel-default project-search">
          <div class="panel-heading project-search-heading">
            <h3 class="panel-title">{{ $show->name }}</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <h4><strong>Roles:</strong></h4>
                    @foreach( $show->auditions as $audition )
                      @foreach( $audition->audition_roles as $role )
                        <p><strong>{{ $role->character_name }}</strong> {{ $role->character_sex }}, {{ $role->character_ethnicity }}, {{ $role->character_age }}</p>
                      @endforeach
                    @endforeach
                    {{--<p><strong>Wicked Witch:</strong> Female</p>--}}
                    {{--<p><strong>Good Witch:</strong> Female</p>--}}
                    {{--<p><strong>Lead Male:</strong> Male</p>--}}
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <h4><strong>Information:</strong></h4>
                    <p><strong>Description: </strong>{{$show->description}}</p>
                    <p><strong>Company: </strong>{{ $show->show_company->name }}</p>
                    <p><strong>Location: </strong>{{ $show->show_company->city }}, {{ $show->show_company->state }}</p>
                    <p><strong>Union: </strong>{{ $show->union }}</p>
                    <p><strong>Payment: </strong>{{ $show->payment_type }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-footer audition-panel-footer">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#projectModal_{{$show->id}}">Quick Apply</button>
            <a href="/production_shows/{{$show->id}}" type="button" class="btn btn-primary">More Information</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="projectModal_{{$show->id}}" tabindex="-1" role="dialog" aria-labelledby="projectModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">{{ $show->name }}</h4>
          </div>
          <div class="modal-body">
            <h4>Apply for Role:</h4>
            <select class="form-control">
              <option>Select Role</option>
              @foreach( $show->auditions as $audition )
                @foreach( $audition->audition_roles as $role )
                  <option value="{{$role->id}}">{{$role->character_name}}</option>
                @endforeach
              @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Apply</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
              
@endsection
