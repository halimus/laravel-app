<!DOCTYPE html>
<html>
    <head>
        <title>{{ @$title ? @$title : 'Laravel' }}</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('styles')
    </head>
    <body>
        <div id="wrapper">
            @yield('header')
            @yield('content')
            @yield('footer')
            @yield('javascript')
        </div>
    </body>
</html>
