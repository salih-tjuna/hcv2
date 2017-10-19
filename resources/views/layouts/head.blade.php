<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HCV</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">

    {{--voor de hamburger menu --}}
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="js/script.js"></script>

    {{--voor de youtube video plugun--}}
    <link type="text/css" href="/css/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.youtubepopup.js"></script>
    <script type="text/javascript">
        $(function () {
            $("a.youtube").YouTubePopup({ autoplay: 0 });
        });
    </script>

</head>
