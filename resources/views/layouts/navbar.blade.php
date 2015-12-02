<nav>
  <div class="container">
    <div>
      <a href="#top"><img src="/img/star-orange.png" alt="logo" class="logo"></a>
    </div>
    <div class="menu">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
        <ul class="nav navbar-nav navbar-right">
              
          <li class="{{ Helpers::setActive('messages') }} nav">
            <a href="/messages"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
          </li>
          <li class="{{ Helpers::setActive('profiles') }} nav">
            <a href="/user/{{Auth::user()->id}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
          </li>
          <li class="{{ Helpers::setActive('search') }} nav">
            <a href="/search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
          </li>
          <li class="{{ Helpers::setActive('home') }} {{ Helpers::setActive('/') }} nav">
            <a href="/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
          </li>
            
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </div>
</nav>
<header class="nav" id="top">
  <div class="container">
    <a href="/"><img src="/img/logo.png" alt="big logo" class="audrev"></a>
    <p class="navbar-text navbar-right"><a href="/auth/logout" class="navbar-link">Logout</a></p>
  </div>
</header>
