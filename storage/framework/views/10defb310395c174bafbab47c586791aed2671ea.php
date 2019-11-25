<?php $__env->startSection('judul'); ?>
Status Pembayaran
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sedang Dikirim</li>
  </ol>
</nav> 

<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('farm/img/bg-img/46.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>SEDANG DIKIRIM</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php if(session('sukses')): ?>
<div class="alert alert-success" >
<?php echo e(session('sukses')); ?>

</div>
<?php endif; ?>
<?php if(session('gagal')): ?>
<div class="alert alert-primary" >
<?php echo e(session('gagal')); ?>

</div>
<?php endif; ?>
<div class="card">
  <div class="card-body">
    <table class="table table-stripped table-hover text-center">
        <thead>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Jenis Komoditas</th>
            <th>Jumlah</th>
            <th>Total Pembayaran</th>
            <th>Status</th>
            <th>#</th>
        </thead>
        <tbody>
            <?php if($isEmpty=="yes"): ?>
            <tr>
                <td colspan="6" class="text-center">Tidak Ada Data</td>
            </tr>
            <?php else: ?>
            <?php
            $i = 1;
            ?>
            <?php $__currentLoopData = $sedangKirim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($p->nama_barang); ?></td>
                <td><?php echo e($p->jenis_komoditas); ?></td>
                <td><?php echo e($p->jumlah); ?></td>
                <td><?php echo e($p->harga_total); ?></td>
                <td>Sedang Dikirim</td>
                <td>
                    <form method="POST" action="/acc-barang-sudah-masuk">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="idPesanan" value="<?php echo e($p->id_pembelian); ?>">
                    <input type="submit" class="btn btn-sm btn-dark" value="Terima Barang">
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/kirim/kirimSaya.blade.php ENDPATH**/ ?>