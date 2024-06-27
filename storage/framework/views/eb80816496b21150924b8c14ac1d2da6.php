

<?php $__env->startSection('title'); ?> Website <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Dashboards <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Edit about <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<div class="row">
    <div class="col-m-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Update About section</h4>

                <form action="<?php echo e(route('editAbout')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-4">
                        <label for="title-input" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                          <input type="text" name="title" class="form-control" value="<?php echo e(!empty($about) ? $about->title : ''); ?>" id="title-input" placeholder="Enter a title ">
                        </div>
                    </div>
                   
                    <div class="row mb-4">
                        <label for="description-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea id="textarea" name="description" class="form-control" maxlength="225" rows="3"
                            placeholder="Enter a description."><?php echo e($about->description); ?></textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="photo-input" class="col-sm-3 col-form-label">Profile Photo</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" id="formFile" name="photo">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="cv-input" class="col-sm-3 col-form-label">CV</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" id="formFile" name="cv">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="skill1-input" class="col-sm-3 col-form-label">Skill 1</label>
                        <div class="col-sm-9">
                          <input type="text" name="skill1" value="<?php echo e($about->skill1); ?>" class="form-control" id="skill1-input" placeholder="Enter a skill ">
                          <input type="range" name="range1" value="<?php echo e($about->range1); ?>" class="form-range mt-4" id="customRange1">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="skill2-input" class="col-sm-3 col-form-label">Skill 2</label>
                        <div class="col-sm-9">
                          <input type="text" name="skill2" value="<?php echo e($about->skill2); ?>" class="form-control" id="skill2-input" placeholder="Enter a skill ">
                          <input type="range" name="range2" value="<?php echo e($about->range2); ?>" class="form-range mt-4" value="100" id="customRange1">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="skill3-input" class="col-sm-3 col-form-label">Skill 3</label>
                        <div class="col-sm-9">
                          <input type="text" name="skill3" value="<?php echo e($about->skill3); ?>" class="form-control" id="skill3-input" placeholder="Enter a skill ">
                          <input type="range" name="range3" value="<?php echo e($about->range3); ?>" class="form-range mt-4" value="20" id="customRange1">
                        </div>
                    </div>


                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  
<!-- dashboard init -->
<script src="<?php echo e(URL::asset('build/js/pages/dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\na\Documents\portfolio-website\laravel\resources\views/backend/about/edit.blade.php ENDPATH**/ ?>