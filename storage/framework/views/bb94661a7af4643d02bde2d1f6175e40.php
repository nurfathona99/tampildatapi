<?php $__env->startSection('title', 'create course'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-6">
        <div class="card card-body">
            <form action="<?php echo e(route (course.crate)); ?>" method="post">
                 <?php echo csrf_field(); ?>
                 <div class="mb-3">
                    <label for="name" class="form-label"> Course Name</label>
                    <input type="email" class="form-control" id="name" name="name"
                    placeholder="Input Course Name">
                 </div>
                 <div class="mb-3">
                    <label for="desc" class="form-label"> Course Desciption</label>
                    <textarea class="form-control" id="desc" row="2" name="description"></textarea>
                 </div>
                 <div class="mb-3">
                    <label for="price" class="form-label"> Course Price</label>
                    <input type="number" class="form-control" id="price" name="price"
                    placeholder="Input Course Price">
                 </div>
                 <div class="mb-3">
                    <label class="form-label">Course Institution</label>
                    <select name="institution_id" class="form-select">
                        <option value="1">UBG</option>
                        <option value="2">UTM</option>
                        <option value="3">UNRAM</option>
                    </select>
                 </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\webservice\resources\views/course/create.blade.php ENDPATH**/ ?>