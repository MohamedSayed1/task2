<!DOCTYPE html>

<html class="loading" lang="en">
<!-- BEGIN : Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content=" Basma Web">
    <meta name="keywords" content=" ">
    <meta name="author" content="minecores by khaled">
    <title>Basma Web  @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assest/app-assets/img/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('assest/app-assets/img/ico/favicon-32.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet"> -->
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->


    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/vendors/css/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/vendors/css/chartist.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/css/themes/layout-dark.css')}}">
    <link rel="stylesheet" href="{{asset('assest/app-assets/css-rtl/plugins/switchery.css')}}">
   
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assest/app-assets/css/pages/dashboard2.css')}}">
    <link rel="stylesheet" href="{{asset('assest/app-assets/fonts/weathericons/css/weather-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assest/app-assets/fonts/weathericons/css/weather-icons-wind.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assest/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assest/assets/css/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">

    <!-- END: Custom CSS-->

</head>
<!-- END : Head-->

<!-- BEGIN : Body-->

<body class="vertical-layout vertical-menu 2-columns  navbar-sticky" data-menu="vertical-menu" data-col="2-columns">

<!-- Navbar (Header) Starts-->
@yield('nav')
<!-- Navbar (Header) Ends-->

<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    @yield('sidebar')
    <!-- / main menu-->

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-overlay"></div>

         @yield('content')
        </div>
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        <footer class="footer undefined undefined">
            <p class="clearfix text-muted m-0"><span>Copyright &copy; 2023 &nbsp;</span>Minecores<span class="d-none d-sm-inline-block">, All rights reserved.</span></p>
        </footer>
        <!-- End : Footer-->
        <!-- Scroll to top button -->
        <button class="btn btn-primary scroll-top" type="button"><i class="ft-arrow-up"></i></button>

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('assest/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('assest/app-assets/vendors/js/switchery.min.js')}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('assest/app-assets/vendors/js/chartist.min.js')}}"></script>
<script src="{{asset('assest/app-assets/vendors/js/apexcharts.min.js')}}"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="{{asset('assest/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('assest/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('assest/app-assets/js/notification-sidebar.js')}}"></script>
<script src="{{asset('assest/app-assets/js/customizer.js')}}"></script>
<script src="{{asset('assest/app-assets/js/scroll-top.js')}}"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('assest/app-assets/js/dashboard2.js')}}"></script>
<!-- END PAGE LEVEL JS-->
<!-- BEGIN: Custom CSS-->
<script src="{{asset('assest/assets/js/scripts.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@flasher/flasher-toastr@1.2.4/dist/flasher-toastr.min.js"></script>
<!-- END: Custom CSS-->
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

@yield('js')


</body>
<!-- END : Body-->

</html>
