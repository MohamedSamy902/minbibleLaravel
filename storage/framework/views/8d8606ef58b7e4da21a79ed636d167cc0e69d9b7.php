<?php $__env->startSection('content'); ?>
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs"
            style="background-image: url('<?php echo e(asset('site')); ?>/assets/img/blog-bg.jpg');color: #fff;padding: 0px;">
            <div style="padding: 10px 0 24px;
        background: rgba(0, 169, 155, 0.85);">
                <div class="container">

                    <div class="d-flex pt-2 justify-content-between align-items-center">
                        <ol style="font-size: 25px;color: #3c3c3c;font-weight: 500;">
                            <li><a href="index.html" style="color: #3c3c3c;">Home</a></li>
                            <li>Blog</li>
                        </ol>
                    </div>


                </div>
            </div>

        </section><!-- End Breadcrumbs Section -->

        <!-- ======= Post Grid Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    

                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <a href="<?php echo e(route('singelblog', $blog->slug)); ?>"><img src="<?php echo e(url('media/' . $blog->image->name)); ?>" class="card-img-top" alt="..."></a>

                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?php echo e(route('singelblog', $blog->slug)); ?>"><?php echo e($blog->title); ?></a></h5>
                                    <?php echo $blog->short_content; ?>


                                </div>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div> <!-- End .row -->


        </section> <!-- End Post Grid Section -->

    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/site/blog.blade.php ENDPATH**/ ?>