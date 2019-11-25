<?php $__env->startSection('judul'); ?>
Produk Saya
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(session('sukses')): ?>
<div class="alert alert-success" >
<?php echo e(session('sukses')); ?>

</div>
<?php endif; ?>
<?php if(session('gagal')): ?>
<div class="alert alert-danger" >
<?php echo e(session('gagal')); ?>

</div>
<?php endif; ?>

<div class="col-md-6 offset-3">
    <div class="card">
        <div class="card-header">Cari Rekomendasi . . .</div>
        <form method="POST" action="/hitung-rekomendasi-penanaman" accept-charset="UTF-8" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <!-- DATA -->
            <input type="hidden" value="<?php echo e($response['suhuAVE']); ?>" name="suhuAVE">
            <input type="hidden" value="<?php echo e($response['kelembabanAVE']); ?>" name="kelembabanAVE">
            <input type="hidden" value="<?php echo e($response['cuacaAngkaTotal']); ?>" name="cuacaAngkaTotal">
            <input type="hidden" value="<?php echo e($response['paramCuaca']); ?>" name="paramCuaca">
            

            <!-- PADI -->
            <input type="hidden" value="<?php echo e($response['paramCuaca']); ?>" name="paramCuaca">
            <input type="hidden" value="<?php echo e($response['paramSuhu']); ?>" name="paramSuhu">
            <input type="hidden" value="<?php echo e($response['paramKelembaban']); ?>" name="paramKelembaban">
				
			<!-- JAGUNG -->
           	<input type="hidden" value="<?php echo e($response['paramCuaca2']); ?>" name="paramCuaca2">
            <input type="hidden" value="<?php echo e($response['paramSuhu2']); ?>" name="paramSuhu2">
            <input type="hidden" value="<?php echo e($response['paramKelembaban2']); ?>" name="paramKelembaban2">

			<!-- KEDELAI -->
           	<input type="hidden" value="<?php echo e($response['paramCuaca3']); ?>" name="paramCuaca3">
            <input type="hidden" value="<?php echo e($response['paramSuhu3']); ?>" name="paramSuhu3">
            <input type="hidden" value="<?php echo e($response['paramKelembaban3']); ?>" name="paramKelembaban3">

			<!-- TEMBAKAU -->
           	<input type="hidden" value="<?php echo e($response['paramCuaca4']); ?>" name="paramCuaca4">
            <input type="hidden" value="<?php echo e($response['paramSuhu4']); ?>" name="paramSuhu4">
            <input type="hidden" value="<?php echo e($response['paramKelembaban4']); ?>" name="paramKelembaban4">

			<!-- TEBU -->
           	<input type="hidden" value="<?php echo e($response['paramCuaca5']); ?>" name="paramCuaca5">
            <input type="hidden" value="<?php echo e($response['paramSuhu5']); ?>" name="paramSuhu5">
            <input type="hidden" value="<?php echo e($response['paramKelembaban5']); ?>" name="paramKelembaban5">


            <div class="card-body">
			<div class="form-group">
		    <label for="exampleFormControlSelect1">Pilih Komoditas</label>
		    <select class="form-control" name="komoditas" required>
		      <option disabled selected>Pilih Komoditas . . . </option>
		      <option value="padi">Padi</option>
		      <option value="jagung">Jagung</option>
		      <option value="kedelai">Kedelai</option>
		      <option value="tembakau">Tembakau</option>
		      <option value="tebu">Tebu</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Pilih Jenis Tanah</label>
		    <select class="form-control" name="tanah" required>
		      <option disabled selected>Pilih Jenis Tanah . . . </option>
		      <option value="andosol">Andosol</option>
		      <option value="aluvial">Aluvial</option>
		    </select>
		  </div>
  		</div>
  		<div class="card-footer">
  			
  		<input type="submit" class="btn btn-dark" style="width: 100px;" value="Hitung">
  		</div>

  	</form>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/rekomendasi/perhitungan.blade.php ENDPATH**/ ?>