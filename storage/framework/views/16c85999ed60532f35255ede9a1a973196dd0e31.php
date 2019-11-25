<?php $__env->startSection('judul'); ?>
Produk Saya
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="card">
	<div class="card-body">
		<div class="row">
		<div class="col-md-6">			
		<p>
		<?php echo e($response["kota"]); ?>

		,
		<?php echo e($response["waktu"]); ?>

		</p>
		<p>PARAMETER SUHU MIN : <?php echo e($response['AngkasuhuMIN']); ?></p>
		<p>KELEMBABAN : <?php echo e($response['kelembaban']); ?></p>
		<p>CUACA : <?php echo e($response['cuaca']); ?></p>
		<p>SUHU : <?php echo e($response['suhuAVE']); ?></p>
		</div>
		<div class="col-md-6">			
		<p>
			<strong>
				<?php if($response['cuaca']>=40): ?>
					Silahkan Lakukan penyiraman pada tanaman Padi Anda
				<?php else: ?>
					Jangan Lakukan penyiraman pada tanaman Padi Anda	
				<?php endif; ?>
			</strong>
		</p>
		<p>
			<strong>
				<?php if($response['cuaca']>=40): ?>
					Silahkan Lakukan penyiraman pada tanaman Tembakau Anda
				<?php else: ?>
					Jangan Lakukan penyiraman pada tanaman Tembakau Anda	
				<?php endif; ?>
			</strong>
		</p>
		<p>
			<strong>
				<?php if($response['cuaca']>=40): ?>
					Silahkan Lakukan penyiraman pada tanaman Tebu Anda
				<?php else: ?>
					Jangan Lakukan penyiraman pada tanaman Tebu Anda	
				<?php endif; ?>
			</strong>
		</p>
		<p>
			<strong>
				<?php if($response['cuaca']>=40): ?>
					Silahkan Lakukan penyiraman pada tanaman Kedelai Anda
				<?php else: ?>
					Jangan Lakukan penyiraman pada tanaman Kedelai Anda	
				<?php endif; ?>
			</strong>
		</p>
		<p>
			<strong>
				<?php if($response['cuaca']>=40): ?>
					Silahkan Lakukan penyiraman pada tanaman Jagung Anda
				<?php else: ?>
					Jangan Lakukan penyiraman pada tanaman Jagung Anda	
				<?php endif; ?>
			</strong>
		</p>
		
		</div>
		</div>

	</div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/optimasi/index.blade.php ENDPATH**/ ?>