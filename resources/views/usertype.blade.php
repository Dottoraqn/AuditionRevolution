<!-- taken from resources/views/auth/register.blade.php -->
@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

<form method="POST" action="/auth/register" class="form-horizontal">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tell us about yourself</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="/auth/register">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <!--DESC-->
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Description</label>
                                <div class="col-sm-4"><textarea class="form-control" maxlength="200"></textarea></div>
                            </div>
                        <!--GEND-->
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Gender</label>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Male</label><br>
                                        <label><input type="radio" name="optradio">Female</label><br>
                                        <label><input type="radio" name="optradio">Prefer not to specify</label><br>
                                    </div>
                                </div>
                            </div>
                        <!--ETHN-->
                            <div class="form-group">
                               <label class="col-sm-4 control-label">Ethnicity</label>
                               <div class="col-sm-4">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">African American</label><br>
                                        <label><input type="radio" name="optradio">Hispanic</label><br>
                                        <label><input type="radio" name="optradio">East Asian</label><br>
                                        <label><input type="radio" name="optradio">Indian</label><br>
                                        <label><input type="radio" name="optradio">Middle Eastern</label>
                                    </div>
                               </div> 
                            </div>
                        <!--EYEC-->
                            <div class="form-group">
                                <label class="col-sm-4 control-label bul">Eye Color</label>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Blue</label><br>
                                        <label><input type="radio" name="optradio">Green</label><br>
                                        <label><input type="radio" name="optradio">Brown</label><br>
                                        <label><input type="radio" name="optradio">Hazel</label>
                                    </div>
                               </div> 
                            </div>
                        <!--HAIR-->
                            <div class="form-group">
                                <label class="col-sm-4 control-label bul">Hair Color</label>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Brown</label><br>
                                        <label><input type="radio" name="optradio">Blonde</label><br>
                                        <label><input type="radio" name="optradio">Red</label><br>
                                        <label><input type="radio" name="optradio">Black</label><br>
                                        <label><input type="radio" name="optradio">Other</label>
                                    </div>
                               </div> 
                            </div>
                        <!--WEIG-->
                            <div class="form-group">
                                <label class="col-sm-4 control-label bul">Weight</label>
                                <div class="col-md-4">
                                <input type="text" class="form-control" name="weight" value="{{ old('weight') }}">
                                </div>
                            </div>
                        <!--HEIG-->
                            <div class="form-group">
                                <label class="col-sm-4 control-label bul">Height</label>
                                <div class="col-md-4">
                                <input type="text" class="form-control" name="weight" value="{{ old('weight') }}">
                                </div>
                            </div>
                        <!--VOCA-->
                            <div class="form-group">
                                <label class="col-sm-4 control-label bul">Vocal Range</label>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Soprano</label><br>
                                        <label><input type="radio" name="optradio">Mezzo-Soprano</label><br>
                                        <label><input type="radio" name="optradio">Contralto</label><br>
                                        <label><input type="radio" name="optradio">Countertenor</label><br>
                                        <label><input type="radio" name="optradio">Tenor</label><br>
                                        <label><input type="radio" name="optradio">Baritone</label><br>
                                        <label><input type="radio" name="optradio">Bass</label>
                                    </div>
                               </div> 
                            </div>
                        <!--UNIO-->
                            <div class="form-group">
                                <label class="col-sm-4 control-label bul">Union</label>
                                <div class="col-sm-4">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="optcheckbox">None</label><br>
                                        <label><input type="checkbox" name="optcheckbox">SAG-AFTRA</label><br>
                                        <label><input type="checkbox" name="optcheckbox">AEA</label><br>
                                        <label><input type="checkbox" name="optcheckbox">ACTRA</label><br>
                                        <label><input type="checkbox" name="optcheckbox">AFM</label><br>
                                        <label><input type="checkbox" name="optcheckbox">AGMA</label><br>
                                        <label><input type="checkbox" name="optcheckbox">AGVA</label>
                                    </div>
                               </div> 
                            </div>

                           
                            
                            
                            
<!--
                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
-->
                        </form>

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection