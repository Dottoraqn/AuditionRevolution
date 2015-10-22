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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/about">About</a></li>
        <li><a href="/search">Search</a></li>
        <?php if (Auth::check()) {
          ?>
        <li><a href="/auth/logout">Logout</a></li>
        <?php } 
        else { ?>
          <li><a href="/auth/register">Sign Up</a></li>
          <li><a href="/auth/login">Sign In</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="messageSelect">
   <ul>
       <li><div class="message">
        Lorem ipsum dolor sit amet!
    </div></li>
       <li><div class="message">
        Lorem ipsum dolor sit amet!
    </div></li>
       <li><div class="message">
        Lorem ipsum dolor sit amet!
    </div></li>
   </ul>
</div>
<div class="messageContent">
<!-- new message modal to be written in later-->
    <div class="well well-lg">
        <div class="subject">
            Lorem ipsum dolor sit amet!
        </div>
        <div class="content">
            Dear Actor,
            
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ad enim itaque saepe nesciunt a odit alias esse quia possimus eaque, quos quas expedita assumenda cum laudantium ea, amet maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quo dicta facilis cupiditate id cumque placeat doloremque? Rem illo quia labore cum numquam ratione, ipsum consectetur, architecto maiores iusto vitae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur commodi, laborum fugiat, eius modi est doloremque magni corrupti, ipsam asperiores, quam quaerat veritatis. Laudantium, laboriosam, nulla ut autem impedit deserunt?
            
            Have a nice day,
            
            Director
        </div>
    </div>
</div>