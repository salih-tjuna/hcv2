@include ('layouts.head')

<body>

@include ('layouts.nav')

{{--@include ('layouts.slider')--}}

@yield ('content')

<div class="gradient--bottom"></div>

@include ('layouts.footer')

<script src="js/main.js"></script> <!-- Resource jQuery -->

</body>
</html>