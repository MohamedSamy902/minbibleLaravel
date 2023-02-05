<?php $__env->startSection('content'); ?>
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs" style="background-image: url('<?php echo e(asset('site')); ?>/assets/img/blog-bg.jpg');color: #fff;padding: 0px;">
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
                <div class="row g-5">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-8">

                            <div class="post-entry-1 lg">
                                <a href="<?php echo e(route('singelblog', $blog->slug)); ?>"><img
                                        src="<?php echo e(url('media/' . $blog->image->name)); ?>"
                                        alt="" class="img-fluid pb-4"></a>
                                <div class="post-meta">
                                    <span><?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d/M/Y')); ?></span>

                                </div>
                                <h2><a href="<?php echo e(route('singelblog', $blog->slug)); ?>"><?php echo e($blog->title); ?></a></h2>
                                <?php echo $blog->short_content; ?>


                                <div class="d-flex align-items-center author">
                                    <!-- <div class="photo"><img src="assets/img/ar-b.png" alt="" class="img-fluid"></div> -->
                                    <div class="name">
                                        <a class="m-0 p-0 btn btn-2 read-more" href="<?php echo e(route('singelblog', $blog->slug)); ?>">
                                            Read more...
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Category List</h3>
                            <ul>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li style="color: #00b3a4;font-size: 20px;"><a style="color: #00b3a4;"
                                            href="jacasc"><?php echo e($category->name); ?></a> <span
                                            style="float: right;">(<?php echo e(COUNT($category->blog)); ?>)</span></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                    </div>


                </div> <!-- End .row -->
            </div>
            </div>

        </section> <!-- End Post Grid Section -->

    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/site/blog.blade.php ENDPATH**/ ?>