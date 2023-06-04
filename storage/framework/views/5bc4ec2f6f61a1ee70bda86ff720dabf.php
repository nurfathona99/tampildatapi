<?php $__env->startSection('content'); ?>


    <div class="card-harder">
        <h2> Tambah Data</h2>
        <a href="<?php echo e(route('uts')); ?>" class=" btn btn-warning float-end mt-2">Kembali</a>
    </div>


        <!-- /resources/views/post/create.blade.php -->

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="card-body">

        <!-- Create Post Form -->

        <form action="<?php echo e(route('uts.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="">Nama Pengeluaran</label>
                <input type="text" class="form-control" name="nama_pengeluaran">
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan">
            </div>
            <div class="form-group">
                <label for="">Biaya</label>
                <input type="text" class="form-control" name="biaya">
            </div>
              <div class="form-group">
              <label for="">Tanggal Transaksi</label>
              <input type="text" class="form-control" name="tanggal_transaksi">
            </div>
            <div class="form-group">
                <label for="">Nama Konsumen</label>
                <input type="text" class="form-control" name="nama_konsumen">
            </div>
            <div class="form-group">
                <label for="">Email Konsumen</label>
                <input type="text" class="form-control" name="email_konsumen">
            </div>
            <div class="card-harder">
                <input type="submit" value="Simpan" class="btn btn-primary float-right">
            </div>
            <div class="card-harder">
                <input type="submit" value="Ubah" class="btn btn-warning float-right">
            </div>
        </form>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\webservice\resources\views/formuts.blade.php ENDPATH**/ ?>