<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('Admin/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('Admin/images/favicon.png')}}" type="image/x-icon">
    <title>Fixedtkart - @yield("title")</title>

    <!-- Google font-->
    <link
        href="{{asset('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap')}}"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{asset('Admin/css/linearicon.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/vendors/font-awesome.css')}}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/vendors/themify.css')}}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/ratio.css')}}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/remixicon.css')}}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/vendors/feather-icon.css')}}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/vendors/animate.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/vendors/bootstrap.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/vector-map.css')}}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{asset('Admin/css/vendors/slick.css')}}">

    <!-- toaster  -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/style.css')}}">
</head>

<body>
    


    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

    <!-- for header  -->
    @include('Admin.Admin_layout.header')

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

    <!-- for sidebar  -->
    @include('Admin.Admin_layout.Sidebar')

    <!-- content area  -->
    @yield("content")

    <!-- for footer  -->
    @include("Admin.Admin_layout.footer")

    </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->
    
    @include("Admin.Admin_layout.ModalBox")


    <!-- latest js -->
    <script src="{{asset('Admin/js/jquery-3.6.0.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('Admin/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!-- feather icon js -->
    <script src="{{asset('Admin/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('Admin/js/icons/feather-icon/feather-icon.js')}}"></script>

    <!-- scrollbar simplebar js -->
    <script src="{{asset('Admin/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('Admin/js/scrollbar/custom.js')}}"></script>

    <!-- Sidebar jquery -->
    <script src="{{asset('Admin/js/config.js')}}"></script>

    <!-- tooltip init js -->
    <script src="{{asset('Admin/js/tooltip-init.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('Admin/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('Admin/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('Admin/js/notify/index.js')}}"></script>

    <!-- Apexchar js -->
    <script src="{{asset('Admin/js/chart/apex-chart/apex-chart1.js')}}"></script>
    <script src="{{asset('Admin/js/chart/apex-chart/moment.min.js')}}"></script>
    <script src="{{asset('Admin/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('Admin/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('Admin/js/chart/apex-chart/chart-custom1.js')}}"></script>

    <!-- toster js  -->
    <!-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> -->


    <!-- slick slider js -->
    <script src="{{asset('Admin/js/slick.min.js')}}"></script>
    <script src="{{asset('Admin/js/custom-slick.js')}}"></script>

    <!-- customizer js -->
    <script src="{{asset('Admin/js/customizer.js')}}"></script>

    <!-- ratio js -->
    <script src="{{asset('Admin/js/ratio.js')}}"></script>

    <!-- sidebar effect -->
    <script src="{{asset('Admin/js/sidebareffect.js')}}"></script>

    <!-- Theme js -->
    <script src="{{asset('Admin/js/script.js')}}"></script>

</body>


</html>