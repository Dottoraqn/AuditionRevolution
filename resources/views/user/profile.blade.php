@extends('layouts.master')

@section('title', 'User Profile')

@section('content')
<?php echo $user; ?>
<img class="headshot" src="{{$user->user_avatar->original_url}}" alt="headshot">
<div class="personalInfo">
    <div id="name">{{$user->first_name}} {{$user->last_name}}</div>
    <div id="streetAddress">{{$user->address}}, <br>{{$user->city}}, {{$user->state}} {{$user->zipcode}}</div>
    <div id="emailAddress">{{$user->email}}</div>
    <div id="phoneNumber">{{$user->phone_number}}</div>

    <div class="attributes">
        <div class="attributeContent" id="eyeColor">
            <img class="descriptor" src="../img/eye-template.png" alt="eye">
        </div>
        <!-- vocal range: two selectors, high->low -->

        <div class="attributeContent" id="vocalRange"><p>C#-D#</p></div> 
        <!-- needs to be changed for all clothing articles-->

        <div class="attributeContent" id="dressSize"><p>02</p></div>
        <!-- needs to be specified american or european-->

        <div class="attributeContent" id="shoeSize"><p>05</p></div>
        <!-- specified in ft or meters-->

        <div class="attributeContent" id="height"><p>5'6</p></div>
        <!-- lb/kg-->

        <div class="attributeContent" id="weight"><p>130</p></div>

        <div class="attributeContent" id="skinTone">
            <img class="descriptor" src="img/skintone.png" alt="skin">
        </div>
    </div>
</div>

<div class="workInfo">
    <div class="profileSectionHeader">Experience</div>
    <div class="experience">
      @foreach($user->user_experience as $user_ex)
        <div class="experienceWraper">
            <div class="playName">{{$user_ex->show_name}}</div>
            <div class="characterName">{{$user_ex->role}}</div>
            <div class="characterName">{{$user_ex->description}}</div>
            <div class="characterName">{{$user_ex->production_company}}</div>
        </div>
      @endforeach
    </div>

    <div class="profileSectionHeader">Skills</div>
    <div class="skills">{{$user->user_resume->skills}}</div>
</div>

@endsection
