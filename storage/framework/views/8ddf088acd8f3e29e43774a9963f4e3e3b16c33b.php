<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title><?php echo $__env->yieldContent('title'); ?></title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="<?php echo e(asset('site')); ?>/assets/img/logo/logo.png" rel="icon">
<link href="<?php echo e(asset('site')); ?>/assets/img/logo/logo.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?php echo e(asset('site')); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
<link href="<?php echo e(asset('site')); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo e(asset('site')); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo e(asset('site')); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?php echo e(asset('site')); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?php echo e(asset('site')); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="<?php echo e(asset('site')); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="<?php echo e(asset('site')); ?>/assets/css/style.css" rel="stylesheet">

<?php if(session()->get('direction') == 'rtl'): ?>
    <link href="<?php echo e(asset('site')); ?>/assets/css/style_ar.css" rel="stylesheet">
<?php endif; ?>


<?php echo $__env->yieldContent('css'); ?>
<?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/site/layouts/css.blade.php ENDPATH**/ ?>