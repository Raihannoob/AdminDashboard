<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>Login</title>

    <!-- ==== All Css Links ==== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/plugins/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/plugins/owl.carousel.min.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/plugins/nice-select.min.css')}}"/>
    <link rel="stylesheet"type="text/css" href="{{asset('frontend/css/plugins/swiper-bundle.min.css')}}"/>

    <!-- customm font CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/font/oswald-font/stylesheet.css')}}"/>

    <!-- All custom CSS Links -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/helper.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" />
  </head>
  <body>
    <!-- Header Area Starts -->

            @yield('content')

    <!-- Footer Area Ends -->

    <!-- cart area wrapper -->

    <!-- cart area wrapper -->

    <!-- ==== All Js Links ==== -->
    <script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
  </body>
</html>

