<?php 
  $loggedIn = true;
?>
 

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><span><img src="img/logo.png"></span></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text navbar-right"><a href="/auth/logout" class="navbar-link">Logout</a></p>
      <ul class="nav navbar-nav navbar-right">

        <?php /*if (Auth::check()) {*/
          if ($loggedIn==true) { ?>
            <li class="{{ Helpers::setActive('/') }}">
              <a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
            </li>
            <li class="{{ Helpers::setActive('search') }}">
              <a href="/search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
            </li>
            <li class="{{ Helpers::setActive('profiles') }}">
              <a href="/profiles"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            </li>
            <li class="{{ Helpers::setActive('about') }}">
              <a href="/about"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
            </li>
        <?php } 
        else { ?>
          <li><a href="/about">About</a></li>
          <li><a href="/search">Search</a></li>
          <li><a href="/auth/register">Sign Up</a></li>
          <li><a href="/auth/login">Sign In</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
