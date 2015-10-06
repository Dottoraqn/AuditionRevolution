<html>
    <head>
        <title>Audition Revolution - @yield('title')</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    
     @include('navbar')
     
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
