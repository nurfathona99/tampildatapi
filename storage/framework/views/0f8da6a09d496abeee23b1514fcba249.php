<?php $__env->startSection('content'); ?>
    <table>

        <a href="<?php echo e(route('uts.create')); ?>" class=" btn btn-info float-end mt-2">Tambah Data</a>
        <table class="table table-bordered mt-5" style="margin-top: -100px;">
            <thead>
                <th>No</th>
                <th>Nama Pengeluaran</th>
                <th>Keterangan</th>
                <th>Biaya</th>
                <th>Tanggal Transaksi</th>
                <th>Nama Konsumen</th>
                <th>Email Konsumen</th>
                <th>Action</th>
            </thead>


            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($d->nama_pengeluaran); ?></td>
                        <td><?php echo e($d->keterangan); ?></td>
                        <td><?php echo e($d->biaya); ?></td>
                        <td><?php echo e($d->tanggal_transaksi); ?></td>
                        <td><?php echo e($d->nama_konsumen); ?></td>
                        <td><?php echo e($d->email_konsumen); ?></td>
                        <td><a href="<?php echo e(route('uts.edit', $d->id)); ?>" class="btn btn-warning"> Edit </a>
                            <form action="<?php echo e(route('uts.delete', $d->id)); ?>">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('delete')); ?>

                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\webservice\resources\views/uts.blade.php ENDPATH**/ ?>