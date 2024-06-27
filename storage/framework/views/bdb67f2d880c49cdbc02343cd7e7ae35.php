

<?php $__env->startSection('title'); ?> Website <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Dashboards <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Edit opening <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<div class="row">
    <div class="col-m-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Update Opening section</h4>

                <form action="<?php echo e(route('editOpening')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-4">
                        <label for="full_name-input" class="col-sm-3 col-form-label">Full Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="full_name" class="form-control" value="<?php echo e(!empty($opening) ? $opening->full_name : ''); ?>" id="full_name-input" placeholder="Enter your full name ">
                        </div>
                    </div>
                   
                    <div class="row mb-4">
                        <label for="first_role-input" class="col-sm-3 col-form-label">First role</label>
                        <div class="col-sm-9">
                          <input type="text" name="first_role" class="form-control" value="<?php echo e(!empty($opening) ? $opening->first_role : ''); ?>" id="first_role-input" placeholder="Enter your first role ">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="second_role-input" class="col-sm-3 col-form-label">Second role</label>
                        <div class="col-sm-9">
                          <input type="text" name="second_role" class="form-control" value="<?php echo e(!empty($opening) ? $opening->second_role : ''); ?>" id="second_role-input" placeholder="Enter your second role ">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="third_role-input" class="col-sm-3 col-form-label">Third role</label>
                        <div class="col-sm-9">
                          <input type="text" name="third_role" class="form-control" value="<?php echo e(!empty($opening) ? $opening->third_role : ''); ?>" id="third_role-input" placeholder="Enter your third role ">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="github-input" class="col-sm-3 col-form-label">Github</label>
                        <div class="col-sm-9">
                          <input type="text" name="github" class="form-control" value="<?php echo e(!empty($opening) ? $opening->github : ''); ?>" id="github-input" placeholder="Enter your github ">
                        </div>
                    </div>     
                    
                    <div class="row mb-4">
                        <label for="linkedin-input" class="col-sm-3 col-form-label">Linkedin</label>
                        <div class="col-sm-9">
                          <input type="text" name="linkedin" class="form-control" value="<?php echo e(!empty($opening) ? $opening->linkedin : ''); ?>" id="linked-input" placeholder="Enter your LinkedIn ">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="youtube-input" class="col-sm-3 col-form-label">Youtube</label>
                        <div class="col-sm-9">
                          <input type="text" name="youtube" class="form-control" value="<?php echo e(!empty($opening) ? $opening->youtube : ''); ?>" id="youtube-input" placeholder="Enter your youtube channel ">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="instagram-input" class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-9">
                          <input type="text" name="instagram" class="form-control" value="<?php echo e(!empty($opening) ? $opening->instagram : ''); ?>" id="instagram-input" placeholder="Enter your Instagram account ">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\na\Documents\portfolio-website\laravel\resources\views/backend/opening/edit.blade.php ENDPATH**/ ?>