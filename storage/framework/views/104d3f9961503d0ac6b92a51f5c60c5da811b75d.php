<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $__env->make('site.layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php echo $__env->make('site.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Header -->
    <?php echo $__env->yieldContent('content'); ?>


    
    <?php echo $__env->make('site.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php echo $__env->make('site.layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\Users\Administrator\Desktop\minbibleLaravel\resources\views/site/layouts/master.blade.php ENDPATH**/ ?>