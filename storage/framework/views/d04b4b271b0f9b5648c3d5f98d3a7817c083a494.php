<?php $__env->startSection('title'); ?>
    Edit translation
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Edit translation</h3>
        <?php $__env->endSlot(); ?>

        <li class="breadcrumb-item"><a href="<?php echo e(route('translations.index')); ?>">translation</a></li>
        <li class="breadcrumb-item active"> Edit translation</li>
    <?php echo $__env->renderComponent(); ?>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        
        <form class="form theme-form" method="post" action="<?php echo e(route('translations.update', $translation->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                
                                <div class="card-body">

                                    <div class="row g-1">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationDefault09">Word</label>
                                            <select class="form-select" data-live-search="true" id="validationDefault09"
                                                name="name">
                                                <option <?php echo e($translation->name == 'home' ? 'selected' : ''); ?> value="home">Home
                                                </option>
                                                <option <?php echo e($translation->name == 'aboutTheWriter' ? 'selected' : ''); ?>

                                                    value="aboutTheWriter">About The Writer</option>
                                                <option <?php echo e($translation->name == 'products' ? 'selected' : ''); ?> value="products">
                                                    Products</option>
                                                <option <?php echo e($translation->name == 'nonMuslimViews' ? 'selected' : ''); ?>

                                                    value="nonMuslimViews">NonMuslimViews</option>
                                                <option <?php echo e($translation->name == 'blog' ? 'selected' : ''); ?> value="blog">Blog
                                                </option>
                                                <option <?php echo e($translation->name == 'contact' ? 'selected' : ''); ?> value="contact">
                                                    Contact</option>

                                            </select>
                                            <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                            <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                        </div>
                                    </div>

                                    <div class="row g-1">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationCustom01">Transelation</label>
                                            <input class="form-control" id="validationCustom01" type="text"
                                                name="translation" required="" value="<?php echo e($translation->translation); ?>"/>
                                            <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                            <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                        </div>
                                    </div>

                                    <div class="row g-1">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationDefault09">Languages</label>
                                            <select class="form-select" data-live-search="true" id="validationDefault09"
                                                name="language_id">
                                                <option disabled="" value="">Languages
                                                </option>
                                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e($translation->language_id == $language->id ? 'selected' : ''); ?>

                                                        value="<?php echo e($language->id); ?>"><?php echo e($language->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                            <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">حفظ</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/dashbord/translations/edit.blade.php ENDPATH**/ ?>