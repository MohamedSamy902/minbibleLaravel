<?php $__env->startSection('title'); ?>
    Add Category
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3></h3>
        <?php $__env->endSlot(); ?>

        
        
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5><?php echo e(__('master.data')); ?></h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post" action="<?php echo e(route('translations.store')); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationDefault09">Word</label>
                                    <select class="form-select" data-live-search="true"
                                        id="validationDefault09"  name="name">
                                        <option <?php echo e(old('name') == 'home' ? 'selected' : ''); ?> value="home">Home</option>
                                        <option <?php echo e(old('name') == 'aboutTheWriter' ? 'selected' : ''); ?> value="aboutTheWriter">About The Writer</option>
                                        <option <?php echo e(old('name') == 'products' ? 'selected' : ''); ?> value="products">Products</option>
                                        <option <?php echo e(old('name') == 'nonMuslimViews' ? 'selected' : ''); ?> value="nonMuslimViews">NonMuslimViews</option>
                                        <option <?php echo e(old('name') == 'blog' ? 'selected' : ''); ?> value="blog">Blog</option>
                                        <option <?php echo e(old('name') == 'contact' ? 'selected' : ''); ?> value="contact">Contact</option>

                                    </select>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom01">Transelation</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="translation"
                                        required="" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationDefault09">Languages</label>
                                    <select class="form-select" data-live-search="true"
                                        id="validationDefault09"  name="language_id">
                                        <option disabled="" value="">Languages
                                        </option>
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e(old('languages_id') == $language->id ? 'selected' : ''); ?>

                                                value="<?php echo e($language->id); ?>"><?php echo e($language->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>




                            <button class="btn btn-primary" type="submit"><?php echo e(__('master.save')); ?></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/editor/ckeditor/ckeditor.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/editor/ckeditor/adapters/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/editor/ckeditor/styles.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/editor/ckeditor/ckeditor.custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/dashbord/translations/create.blade.php ENDPATH**/ ?>