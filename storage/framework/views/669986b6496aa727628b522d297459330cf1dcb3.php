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
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">

    <title>Apotek Paramel - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/95573eb4fa.js" crossorigin="anonymous"></script>

    <?php echo $__env->make('layouts.simple.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('style'); ?>

</head>
<body <?php if(Route::current()->getName() == 'index'): ?> onload="startTime()" <?php endif; ?> >
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
    <?php echo $__env->make('layouts.simple.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Page Header Ends  -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php echo $__env->make('layouts.simple.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body" id="app">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-6">
                            <?php echo $__env->yieldContent('breadcrumb-title'); ?>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('/')); ?>"> <i data-feather="home"></i></a>
                                </li>
                                <?php echo $__env->yieldContent('breadcrumb-items'); ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?php echo $__env->make('layouts.simple.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<!-- latest jquery-->
<?php echo $__env->make('layouts.simple.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Plugin used-->

<script type="text/javascript">
    if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
        $(".according-menu.other").css("display", "none");
        $(".sidebar-submenu").css("display", "block");
    }

</script>
</body>
</html>
<?php /**PATH C:\Users\Alx\Documents\apotek-paramel\resources\views/layouts/simple/master.blade.php ENDPATH**/ ?>