@extends('layouts.master')

@section('title', 'User Profile')

@section('content')
<?php //echo $user; ?>
<div class="container-fluid">
<!--PERSONALINFO-->
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Personal Information</div>
                <div class="panel-body">
                    <img class="img-rounded col-md-4" alt="Responsive image" src="{{$user->user_avatar->original_url}}" data-toggle="modal" data-target="#headshot" alt="{{$user->first_name}}">
                    
                    <!--MODAL-->
                    <div class="modal fade" id="headshot" tabindex="-1" role="dialog" aria-labelledby="HeadshotLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="HeadshotLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <img id="lghs" src="{{$user->user_avatar->original_url}}" alt="headshot" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <h1>{{$user->first_name}} {{$user->last_name}}</h1>
                        <h4>{{$user->email}}</h4>
                        <h4>{{$user->phone_number}}</h4>
                        <h4>{{$user->address}}, <br>{{$user->city}}, {{$user->state}} {{$user->zipcode}}</h4>
                    </div>
                    <br>
                    <div class="col-sm-4">
                       <b>Eye Color:</b> {{$user->user_description->eye_color}}</br>
                       <b>Hair Color:</b> {{$user->user_description->hair_color}}</br>
                       <b>Ethnicity:</b> {{$user->user_description->ethnicity}}</br>
                       <b>Weight:</b> {{$user->user_description->weight}}</br>
                       <b>Vocal Range:</b> {{$user->user_description->vocal_range}}</br>
                       <b>Union:</b> {{$user->user_description->union}}
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--RESUME-->
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Resume</div>
                <div class="panel-body">
                    @foreach($user->user_experience as $user_ex)
                    <div id="expwrap">
                        <div class="row">
                            <div class="col-sm-4"><h2>{{$user_ex->show_name}}<br><small>{{$user_ex->production_company}}</small></h2></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">{{$user_ex->role}}</div><div class="col-lg-8">{{$user_ex->description}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<!--SKILLS-->
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Skills</div>
                <div class="panel-body">
                    <div class="col-md-6">{{$user->user_resume->skills}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
