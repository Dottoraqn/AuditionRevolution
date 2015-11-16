<html>
    <head>
        <title>Audition Revolution - @yield('title')</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
        <link href="/css/jqueryui-editable.css" rel="stylesheet">
        @if (Helpers::setActive('messages'))
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <script src="/js/app.js"></script>
        <script src="/js/routes.js"></script>
        <script src="/js/angular.js"></script>
        <script src="/js/jquery-1.11.3.min.js"></script>
        @endif 
        @if (Helpers::setActive('/'))
        <link href="/css/projectTable.css" rel="stylesheet">
        @endif 
        @if (Helpers::setActive('auditions'))
        <link href="/css/projectTable.css" rel="stylesheet">
        @endif 
        @if (Helpers::setActive('projects'))
        <link href="/css/projectTable.css" rel="stylesheet">
        @endif 
    </head>
    
    @if (Auth::check())
      @include('layouts.navbar')
    @else
      <a href="/"><img src="/img/logo-large.png" class="cover"></a>
    @endif 
     
     
    <body>      
    @yield('content')

    @include('layouts.footer')

    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    </body>
    
</html>
