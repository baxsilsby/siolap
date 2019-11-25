<?php $__env->startSection('judul'); ?>
Produk Saya
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="card-body">
		<p>Tanaman : <strong><?php echo e($hasilCariK); ?></strong></p>
		<p>Tanah : <strong><?php echo e($hasilCariT); ?></strong></p>
		<p>Tanggal : <?php echo e(date('d M Y', strtotime($now))); ?></p>
		<p>Suhu : <strong><?php echo e($hasilsuhuAVE); ?></strong></p>	
		<p>Cuaca : <strong><?php echo e($cuaca); ?></strong></p>	
		<p>Kelembahan : <strong><?php echo e($hasilCariT); ?></strong></p>		
		<p>Hasil Akhir Perhitungan : <strong><?php echo e($hasilAkhir); ?></strong></p>
		<p>Outpul : <strong><?php echo e($output); ?></strong></p>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/rekomendasi/hasilcari.blade.php ENDPATH**/ ?>