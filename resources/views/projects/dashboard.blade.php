@extends('master')

@section('title', 'Search Auditions')

@section('content')
 <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Wicked</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>Open Roles</h2>
                <div class="row" id="audition-results">
                  <div class="audition-card col-md-12 col-lg-6">
                    <div class="row">
                      <div class="panel panel-default project-search">
                        <div class="panel-heading project-search-heading">
                          <h3 class="panel-title">Elphaba</h3>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Gender</strong> Female</p>
                                  <p><strong>Age Range</strong> Young Adult, Adult</p>
                                  <p><strong>Part Size</strong> Lead</p>
                                  <p><strong>Voice</strong> Mezzo-Soprano</p>
                                  <p><strong>High Note</strong> F5</p>
                                  <p><strong>Low Note</strong> F3</p>
                                  <p><strong>Vocal Technique</strong> Belting</p>
                                  <p><strong>Time Period</strong> The Land of Oz, Pre-Dorothy</p>
                                  <button type="button" class="btn btn-primary pull-right">Quick Apply</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="audition-card col-md-12 col-lg-6">
                    <div class="row">
                      <div class="panel panel-default project-search">
                        <div class="panel-heading project-search-heading">
                          <h3 class="panel-title">Galinda/Glinda</h3>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Female</strong></p>
                                  <p><strong>Lead</strong></p>
                                  <p><strong>Soprano</strong></p>
                                  <button type="button" class="btn btn-primary pull-right">Quick Apply</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="audition-card col-md-12 col-lg-6">
                    <div class="row">
                      <div class="panel panel-default project-search">
                        <div class="panel-heading project-search-heading">
                          <h3 class="panel-title">The Wizard of Oz</h3>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><strong>Male</strong></p>
                                  <p><strong>Supporting</strong></p>
                                  <p><strong>Baritone</strong></p>
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
            <div class="col-sm-4">
                <h2>Description</h2>
                <p>Stephen Schwartz’s Wicked: The Untold Story of the Witches of Oz takes place before L.Frank Baum’s classic Wizard of Oz story ever began. Before Dorothy was even alive, two young girls met in the Land of Oz, became rivals, and then friends. One was born with emerald green skin, with a brilliant mind and a fiery spirit. The other was classically beautiful, with great ambition and incredible drive. The green-skinned Elphaba was ostracized by her family and by everyone at school. The beautiful Galinda was destined to be forever popular. Over the course of Wicked, we discover how these two young women became rivals and then the closest of friends – and how they ended up as the Wicked Witch of the West and Glinda the Good. Originally starring Idina Menzel and Kristin Chenoweth, Wicked is an amazing vehicle for two powerhouse actresses, and also features a large, strong ensemble.</p>
                <hr>
                <h2>Information</h2>
                <p><strong>Company:</strong> Warner Brothers</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    </div>
@endsection
