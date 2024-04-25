<!DOCTYPE html>
<html lang="en">
{{-- <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>Login</title> --}}

<!-- ==== All Css Links ==== -->
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/plugins/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/plugins/owl.carousel.min.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/plugins/nice-select.min.css')}}"/>
    <link rel="stylesheet"type="text/css" href="{{asset('frontend/css/plugins/swiper-bundle.min.css')}}"/>

    <!-- customm font CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/font/oswald-font/stylesheet.css')}}"/>

    <!-- All custom CSS Links -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/helper.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" /> --}}

{{-- </head> --}}

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<!-- ==== Favicon ==== -->
<link rel="icon" type="image/png" href="{{ asset('frontend/images/logo-sm.svg') }}" />
<!-- ==== All Css Links ==== -->
<link href="https://api.fontshare.com/v2/css?f[]=satoshi@900,700,500,300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/icon/boxicons/css/boxicons.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/mdtimepicker.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/helper.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css')}}">

<body>
    <!-- Header Area Starts -->

    @yield('content')

    <!-- Footer Area Ends -->

    <!-- cart area wrapper -->

    <!-- cart area wrapper -->

    <!-- ==== All Js Links ==== -->

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('frontend/js/plugins.js')}}"></script>
    <script src="{{ asset('frontend/js/mdtimepicker.min.js')}}"></script>
    <!-- for calender  -->
    <script src="{{ asset('frontend/js/js-date-extensions.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.bs.calendar.min.js')}}"></script>
    <script src="{{ asset('frontend/js/calendar.js')}}"></script>
    <!-- main js  -->
    <script src="{{ asset('frontend/js/main.js')}}"></script>
</body>

</html>
