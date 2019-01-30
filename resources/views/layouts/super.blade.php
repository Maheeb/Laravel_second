<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SUPER SHOP</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('images/tab_title.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    {{--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">--}}
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script>
        // optional00
        $(function(){ $('.carousel').carousel({ interval: 3000 * 1 }); });
    </script>

</head>

<body>
@yield('content')
</body>

</html>
