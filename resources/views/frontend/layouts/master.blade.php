
<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="">
    <title>@yield('page') - FashionBazaar</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" />
    <!-- font awesome style -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" />
    {{-- Links for toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- my custom style -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <!-- for additional styles -->
    @yield('styles')
</head>
<body>

@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')


<!-- jQery -->
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
<!-- custom js -->
<script src="{{asset('frontend/js/custom.js')}}"></script>

@yield('script')
<!--    script for toastr   -->
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
</body>
</html>