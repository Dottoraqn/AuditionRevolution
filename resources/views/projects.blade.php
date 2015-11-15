<?php 
  $talent = true;
  $producer = true;  
  $hasProjects = true;
  
  $user_id = 2;
  $id = 1;
  
  //die(json_encode($auditions));
?>

<section class="text">
  <div class="container projects"> 
    <div class="row">
              <h3> Your Active Auditions </h3>
      <div class="col-md-9"> 
        <div class="panel panel-default auditions">
          <div class="panel-body">
            <?php if ($hasProjects) { ?>
              <table data-navigable-spy class="table table-no-border" id="projects">
                <tbody>
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
              <button class="btn btn-default btn-lg" type="button" id="startProject" data-toggle="modal" data-target=".start-modal-lg">Start a Project</button>
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

@include('edit_modal');
@include('startProject');

<script type="text/javascript" src="/js/projects.js"> </script>
