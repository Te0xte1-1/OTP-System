<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Default App Title'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
</head>
<style>
    main {
        margin-left: 250px !important;
        border: 1px solid !important;
        width: 1257px !important;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    
    <div class="wrapper">
<?php /**PATH C:\laragon\www\OTP-System\resources\views/layout/header.blade.php ENDPATH**/ ?>