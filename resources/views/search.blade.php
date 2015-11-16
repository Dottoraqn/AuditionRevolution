@extends('layouts.master')

@section('title', 'Search Auditions')

@section('content')
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
    <div class="audition-card col-lg-12">
      <div class="row">
        <div class="panel panel-default project-search">
          <div class="panel-heading project-search-heading">
            <h3 class="panel-title">Wicked</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Roles:</strong></p>
                    <p><strong>Wicked Witch:</strong> Female</p>
                    <p><strong>Good Witch:</strong> Female</p>
                    <p><strong>Lead Male:</strong> Male</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Company:</strong> Warner Brothers</p>
                    <p><strong>Location:</strong> Atlanta, GA</p>
                    <p><strong>Union:</strong> None</p>
                    <p><strong>Payment:</strong> Contract</p>
                    <button type="button" class="btn btn-primary pull-right">Quick Apply</button>
                    <a href="/projects/dashboard" type="button" class="btn btn-primary pull-right">More Information</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="audition-card col-lg-12">
      <div class="row">
        <div class="panel panel-default project-search">
          <div class="panel-heading project-search-heading">
            <h3 class="panel-title">West Side Story</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Roles:</strong></p>
                    <p><strong>Little John:</strong> Male</p>
                    <p><strong>Maria:</strong> Female</p>
                    <p><strong>The Jets:</strong> Male</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Company:</strong> Dreamworks</p>
                    <p><strong>Location:</strong> Orlanda, FL</p>
                    <p><strong>Union:</strong> None</p>
                    <p><strong>Payment:</strong> Salaried</p>
                    <button type="button" class="btn btn-primary pull-right">Quick Apply</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="audition-card col-lg-12">
      <div class="row">
        <div class="panel panel-default project-search">
          <div class="panel-heading project-search-heading">
            <h3 class="panel-title">Hamlet</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Roles:</strong></p>
                    <p><strong>Hamlet:</strong> Male</p>
                    <p><strong>Ghost:</strong> Any</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <p><strong>Company:</strong> Warner Brothers</p>
                    <p><strong>Location:</strong> Atlanta, GA</p>
                    <p><strong>Union:</strong> None</p>
                    <p><strong>Payment:</strong> Contract</p>
                    <button type="button" class="btn btn-primary pull-right">Quick Apply</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
              
@endsection
