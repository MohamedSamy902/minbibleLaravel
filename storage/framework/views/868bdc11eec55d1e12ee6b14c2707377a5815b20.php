<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="index.html"><img src="<?php echo e(asset('site')); ?>/assets/img/logo/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <?php if(Route::current()->getName() == 'index'): ?>
                    <li><a class="nav-link scrollto active" href="#hero"><?php echo e($homeTranslations->translation); ?></a></li>
                    <li><a class="nav-link scrollto" href="#aboutWriter"><?php echo e($aboutTheWriterTranslations->translation); ?></a></li>
                    <li><a class="nav-link scrollto" href="#product"><?php echo e($productsTranslations->translation); ?></a></li>
                    <li><a class="nav-link scrollto " href="#testimonials"><?php echo e($nonMuslimViewsTranslations->translation); ?> </a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('blog')); ?>"><?php echo e($blogTranslations->translation); ?></a></li>
                    <li><a class="nav-link scrollto" href="#contact"><?php echo e($contactTranslations->translation); ?></a></li>
                <?php else: ?>

                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#aboutWriter"><?php echo e($aboutTheWriterTranslations->translation); ?></a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#product"><?php echo e($productsTranslations->translation); ?></a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#testimonials"><?php echo e($nonMuslimViewsTranslations->translation); ?> </a></li>
                    <li><a class="nav-link scrollto active" href="<?php echo e(route('blog')); ?>"><?php echo e($blogTranslations->translation); ?></a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('index')); ?>#contact"><?php echo e($contactTranslations->translation); ?></a></li>
                <?php endif; ?>

                <li class="dropdown">
                    <a href="#" style="    padding-left: 120px;"><i class="<?php echo e(session()->get('locale') ? session()->get('locale') : 'fi fi-us'); ?>" style="height: 20px;"></i>
                        <span> &nbsp; <?php echo e(session()->get('locale') ? session()->get('locale') : $languages[0]->name); ?></span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a style="justify-content: left;" class="changeLang"
                                    href="<?php echo e(route('changeLang', $language->name)); ?>"><i class="<?php echo e($language->flag); ?>"
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