<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'ReportCrime')}}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body style="background-image:url({{url('images/bg23.jpg')}}); 
    background-repeat: no-repeat; margin:0; padding:0;
        background-attachment: fixed;
        background-size: cover;"> 
            @yield('content')
    </body>
</html>
