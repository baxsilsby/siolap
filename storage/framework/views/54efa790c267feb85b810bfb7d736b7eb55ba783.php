<?php $__env->startSection('judul'); ?>
Status Pembayaran
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Status Pembyaaran</li>
  </ol>
</nav> 



<div class="card">
  <div class="card-body">
    <table class="table table-stripped table-hover">
    	<thead>
    		<th>No.</th>
    		<th>Nama Barang</th>
    		<th>Jenis Komoditas</th>
    		<th>Jumlah</th>
    		<th>Total Pembayaran</th>
            <th>Pembayaran</th>
    		<th>Pengiriman</th>
    		<th>Penerimaan</th>

    	</thead>
    	<tbody>
    		<?php
			$i = 1;
    		?>
			<?php $__currentLoopData = $pembayaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		<tr>
    			<td><?php echo e($i++); ?></td>
    			<td><?php echo e($p->nama_barang); ?></td>
    			<td><?php echo e($p->jenis_komoditas); ?></td>
    			<td><?php echo e($p->jumlah); ?></td>
    			<td><?php echo e($p->harga_total); ?></td>
                <td><?php echo e($p->status_bayar); ?></td>
    			<td><?php echo e($p->status_terkirim); ?></td>
    			<td><?php echo e($p->status_terima); ?></td>
    		</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	</tbody>
    </table>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/pembayaran/index.blade.php ENDPATH**/ ?>