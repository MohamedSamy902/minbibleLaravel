<?php $__env->startSection('title'); ?>
    Edit Category
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Edit Category</h3>
        <?php $__env->endSlot(); ?>

        <li class="breadcrumb-item"><a href="<?php echo e(route('users.index')); ?>">Category</a></li>
        <li class="breadcrumb-item active"> Edit Category</li>
    <?php echo $__env->renderComponent(); ?>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        
        <form class="form theme-form" method="post" action="<?php echo e(route('category.update', $category->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="col-form-label">اسم القسم</label>
                                        <input class="form-control" type="text" placeholder="اسم القسم" name="name"
                                            value="<?php echo e($category->name); ?>">
                                        <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
                                    </div>


                                    <div class="row g-1">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationDefault09">Languages</label>
                                            <select class="form-select" data-live-search="true" id="validationDefault09"
                                                name="language_id">
                                                <option disabled="" value="">Languages
                                                </option>
                                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($category->language_id == $language->id ? 'selected' : ''); ?>

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

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/dashbord/category/edit.blade.php ENDPATH**/ ?>