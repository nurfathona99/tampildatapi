<?php $__env->startSection('title', 'Course'); ?>

<?php $__env->startSection('content'); ?>
    <div class="alert alert-info">Course</div>

    <a href="<?php echo e(route('course.create')); ?>" class="btn btn-success float-end mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Institution</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($row->name); ?></td>
                <td><?php echo e($row->description); ?></td>
                <td>Rp. <?php echo e(number_format($row->price)); ?></td>
                <td><?php echo e($row->institution_id); ?></td>
                <td>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\webservice\resources\views/course/index.blade.php ENDPATH**/ ?>