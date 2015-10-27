<html>
    <head>
        <title>Audition Revolution - @yield('title')</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    
    @if (Auth::check())
      @include('navbar')
    @else
      <a href="/"><img src="/img/logo-large.png" class="cover"></a>
    @endif 
     
     
    <body>      
{{--    @section('sidebar')
            This is the master sidebar.
        @show
 --}}
    @yield('content')

    @include('footer')

    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    </body>
    
</html>
