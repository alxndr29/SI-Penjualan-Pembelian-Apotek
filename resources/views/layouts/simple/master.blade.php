<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

    <title>Apotek Paramel - @yield('title')</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/95573eb4fa.js" crossorigin="anonymous"></script>

    @include('layouts.simple.css')
    @yield('style')

</head>
<body @if(Route::current()->getName() == 'index') onload="startTime()" @endif >
<div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
        </filter>
    </svg>
</div>
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('layouts.simple.header')
    <!-- Page Header Ends  -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('layouts.simple.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body" id="app">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-6">
                            @yield('breadcrumb-title')
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('/') }}"> <i data-feather="home"></i></a>
                                </li>
                                @yield('breadcrumb-items')
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            @yield('content')
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('layouts.simple.footer')

    </div>
</div>
<!-- latest jquery-->
@include('layouts.simple.script')
<!-- Plugin used-->

<script type="text/javascript">
    if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
        $(".according-menu.other").css("display", "none");
        $(".sidebar-submenu").css("display", "block");
    }

</script>
</body>
</html>
