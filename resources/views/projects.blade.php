<?php 
  $talent = true;
  $producer = true;  
  $hasProjects = true;
?>

<section class="text">
  <div class="container projects"> 
    <div class="row">
      <div class="col-md-9"> 
        <h3> Your Active Auditions </h3>
        <div class="panel panel-default auditions">
          <div class="panel-body">
            <?php if ($hasProjects) { ?>
              <div class="panel panel-default proj">
                <div class="panel-body">
                  The Lion King
                </div>
              </div>
              <div class="panel panel-default proj">
                <div class="panel-body">
                  In the Heights
                </div>
              </div>
            <?php } else { ?>
                <h1>You currently have no active auditions</h1>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="mybutton">
          <button class="btn btn-default btn-lg" type="submit">Start a Project</button>
        </div>
        <div class="panel panel-default auditions">
          <div class="panel-body">
            <?php if ($hasProjects) { ?>
              <div class="mybutton">
                <button class="btn btn-default btn-lg" type="submit">Start Audition Assistant</button>
              </div>
              <div class="mybutton">
                <button class="btn btn-default btn-lg" type="submit">Start Audition Assistant</button>
              </div>
            <?php } else { ?>
                <h2>Need some tips?</p>
                <p>Search existing projects </p>
                <p>Work on your profile </p>
                <p>Send some messages </p>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
