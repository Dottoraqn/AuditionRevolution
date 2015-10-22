@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<img class="headshot" src="https://d38zhw9ti31loc.cloudfront.net/wp-content/uploads/2013/07/Crystal-headshot-new.jpg" alt="headshot">
<div class="personalInfo">
    <div id="name">FirstName LastName</div>
    <div id="streetAddress">1234 Drive St.,<br>Atlanta, GA 30000</div>
    <div id="emailAddress">last.first@gmail.com</div>
    <div id="phoneNumber">(123)-456-7890</div>

    <div class="attributes">
        <div class="attributeContent" id="eyeColor">
            <img class="descriptor" src="img/eye-template.png" alt="eye">
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
        <div class="experienceWraper">
            <div class="playName">The Musical That Never Ends</div>
            <div class="characterName">Popular Girl #1</div>
        </div>
        <div class="experienceWraper">
            <div class="playName">More here!</div>
            <div class="characterName">I'm an important character</div>
        </div>
        <div class="experienceWraper">
            <div class="playName">Play name goes here!</div>
            <div class="characterName">Main character name goes here</div>
        </div>
    </div>

    <div class="profileSectionHeader">Skills</div>
    <div class="skills">Singing, Dancing, Eating, British Accents</div>
</div>

@endsection
