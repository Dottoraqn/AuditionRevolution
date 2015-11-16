@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

@if (Auth::check())

<section class="text">
  <div class="container projects"> 
    <div class="row">
              <h3> Your Active Auditions </h3>
      <div class="col-md-9"> 
        <div class="panel panel-default auditions">
          <div class="panel-body">
            <?php if (true) { ?>
              <table data-navigable-spy class="table table-no-border" id="projects">
                <tbody>
                @foreach($auditions as $audition)
                <tr>
                  <td>{{$audition->name}}</td>
                  <td>{{$audition->location}}</td>
                  <td><a href="auditions/{{$audition->id}}" onclick="">Edit</a></td>
                <tr>
                @endforeach
                </tbody>
              </table>
            <?php } else { ?>
                <h1>You currently have no active auditions</h1>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-default auditions">
          <div class="panel-body">
            <div class="mybutton">
              <button class="btn btn-default btn-lg" type="button" id="create" data-toggle="modal" data-target=".start-modal-lg">Start a Project</button>
            </div>
            <div class="mybutton">
              <button class="btn btn-default btn-lg" id="startAA" type="submit">Start Audition Assistant</button>
            </div>  
            <br>
            <br>
            <br>
                <h2>Need some tips?</p>
                <p>Search existing projects </p>
                <p>Work on your profile </p>
                <p>Send some messages </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@else
  <div class="section landing">
      <div class="container">
        <p>Audition Revolution is a small start up based in Atlanta, Georgia.</p>    
        <p> <a href="auth/register">Sign up</a> today or <a href="auth/login">login</a> now.</p>      
      </div>
  </div>
@endif
@endsection

@include('auditions.create')
@include('auditions.show')

<script type="text/javascript" src="/js/projects.js"> </script>
<script> 
var Name = document.getElementById("utente").value;

document.write(Name);
</script>
