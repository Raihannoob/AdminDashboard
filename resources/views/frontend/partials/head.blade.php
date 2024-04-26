<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('tittle')
    </title>
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
@stack('css')
</head>
