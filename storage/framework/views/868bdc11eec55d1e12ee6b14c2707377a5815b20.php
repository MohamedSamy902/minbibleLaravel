<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="index.html"><img src="<?php echo e(asset('site')); ?>/assets/img/logo/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <?php if(Route::current()->getName() == 'index'): ?>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#aboutWriter">About The Writer</a></li>
                    <li><a class="nav-link scrollto" href="#product">Our Products</a></li>
                    <li><a class="nav-link scrollto " href="#testimonials">Non-Muslim Views </a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('blog')); ?>">Blog</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <?php else: ?>

                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#aboutWriter">About The Writer</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#product">Our Products</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#testimonials">Non-Muslim Views </a></li>
                    <li><a class="nav-link scrollto active" href="<?php echo e(route('blog')); ?>">Blog</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#contact">Contact</a></li>
                <?php endif; ?>

                <li class="dropdown">
                    <a href="#" style="    padding-left: 120px;"><i class="fi fi-us" style="height: 20px;"></i>
                        <span> &nbsp; <?php echo e(session()->get('locale')); ?></span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        
                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a style="justify-content: left;" class="changeLang"
                                    href="<?php echo e(route('changeLang', $language->name)); ?>"><i class="fi fi-us"
                                        style="height: 20px;"></i></i><?php echo e($language->name); ?></a>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                    </ul>
                </li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/site/layouts/header.blade.php ENDPATH**/ ?>