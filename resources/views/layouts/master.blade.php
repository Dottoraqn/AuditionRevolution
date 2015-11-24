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
    </head>
    
    @if (Auth::check())
      @include('layouts.navbar')
    @else
      <a href="/"><img src="/img/logo-large.png" class="cover"></a>
    @endif 
     
     
    <body>      
        @yield('content')

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
