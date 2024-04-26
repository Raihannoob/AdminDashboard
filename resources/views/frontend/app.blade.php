<!DOCTYPE html>
<html lang="en">

{{-- heade start --}}
@include('frontend.partials.head')
{{-- head end  --}}
<body>

    <!-- start header  -->
    @include('frontend.partials.header')
    <!-- end header  -->
    
    <!-- main area :: start  -->
    @yield('content')
    <!-- main area :: ends  -->
   
    <!-- start footer  -->
    @include('frontend.partials.footer')

    <!-- end footer  -->
    <!-- ==== All Js Links ==== -->
  
   @include('frontend.partials.script')
</body>

</html>