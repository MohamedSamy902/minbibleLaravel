<?php $__env->startSection('title'); ?>
Add Languages
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3></h3>
        <?php $__env->endSlot(); ?>

        <li class="breadcrumb-item"><a href="<?php echo e(route('users.index')); ?>">Language</a></li>
        <li class="breadcrumb-item active">Add Language</li>
    <?php echo $__env->renderComponent(); ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5><?php echo e(__('master.data')); ?></h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post" action="<?php echo e(route('languages.store')); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                                <div class="row g-1">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationCustom01"><?php echo e(__('master.name')); ?></label>
                                        <input class="form-control" id="validationCustom01" type="text" required=""
                                            name="name" placeholder="English" value="<?php echo e(old('name')); ?>" />
                                        <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                        <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                    </div>
                                </div>

                                <div class="row g-1">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationCustom01">Short Name</label>
                                        <input class="form-control" id="validationCustom01" type="text" required=""
                                            name="short_name" placeholder="en" value="<?php echo e(old('short_name')); ?>" />
                                        <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                        <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                    </div>
                                </div>

                                <div class="row g-1">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationDefault08">Direction</label>
                                        <select class="form-select" id="validationDefault08" required="" name="direction">
                                            <option selected="" disabled="" value=""> Direction</option>
                                            <option value="rtl">Rtl</option>
                                            <option value="ltr" >ltr</option>
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
        <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/dashbord/languages/create.blade.php ENDPATH**/ ?>