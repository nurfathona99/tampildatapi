<?php $__env->startSection('content'); ?>

<div class="container mt-3">

    <form action="<?php echo e(route('uts.update', $additional_costs->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="form-group">
            <label for="">Id</label>
            <input type="text" class="form-control" name="id" value="<?php echo e($additional_costs->id); ?>">
        </div>
        <div class="form-group">
            <label for="">Nama Pengeluaran</label>
            <input type="text" class="form-control" name="nama_pengeluaran" value="<?php echo e($additional_costs->nama_pengeluaran); ?>">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="<?php echo e($additional_costs->keterangan); ?>">
        </div>
        <div class="form-group">
            <label for="">Biaya</label>
            <input type="text" class="form-control" name="biaya" value="<?php echo e($additional_costs->biaya); ?>">
        </div>
        <div class="form-group">
            <label for="">Tanggal Transaksi</label>
            <input type="text" class="form-control" name="tanggal_transaksi" value="<?php echo e($additional_costs->tanggal_transaksi); ?>">
        </div>
        <div class="form-group">
            <label for="">Nama Konsumen</label>
            <input type="text" class="form-control" name="nama_konsumen" value="<?php echo e($additional_costs->nama_konsumen); ?>">
        </div>
        <div class="form-group">
            <label for="">Email Konsumen</label>
            <input type="text" class="form-control" name="email_konsumen" value="<?php echo e($additional_costs->email_konsumen); ?>">
        </div>
        <div class="card-harder">
            <input type="submit" value="Simpan" class="btn btn-primary float-right">
        </div>
    </form>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\webservice\resources\views/utsEdit.blade.php ENDPATH**/ ?>