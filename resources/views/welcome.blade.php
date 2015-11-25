<html>
    <head>
        <title>Audition Revolution - @yield('title')</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
        <link href="/css/jqueryui-editable.css" rel="stylesheet">
        @yield('head')
        @if (Helpers::setActive('messages'))
            <link href="/css/app.css" rel="stylesheet" type="text/css">
            <script src="/js/app.js"></script>
            <script src="/js/routes.js"></script>
            <script src="/js/angular.js"></script>
        @endif 
        <style>
            .item {
                height:500px;
            }
        </style>
    </head>

    <a href="/"><img src="/img/logo-large.png" class="cover"></a>
     
     
    <body>      
    <div class="container">
              <div class="row">
                <dl>
                  <dt>Eye Color</dt>
                  <dd>
                      <ul>
                        <li>Test</li>
                        <li>Test</li>
                        <li>Test</li>
                        <li>Test</li>
                      </ul>
                  </dd>
                </dl>
              </div>
          </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                <img id="bg-image" src="https://source.unsplash.com/category/nature/1600x900" alt="">
                  <div class="carousel-caption">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-caption">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
                  </div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>


    </body>
    @include('layouts.footer')

    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jqueryui-editable.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popover.js"></script>
    <script src="/js/tooltip.js"></script>
    <script src="/js/main.js"></script>
</html>
