<?php $__env->startSection('judul'); ?>
Notifikasi 
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Notifikasi</li>
  </ol>
</nav>  

<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('farm/img/bg-img/48.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>NOTIFIKASI</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>



<div class="col-md-12">
<div class="row">
	<div class="col-md-3">
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Semua ( <?php echo e($lol->count()); ?> )
<!-- <span class="badge badge-pill badge-danger ml-1">
    
</span> -->
  </a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Telat Bayar ( <?php echo e($telatBayar->count()); ?> )</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Teridentifikasi Edit ( <?php echo e($editan->count()); ?> )</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Sedang Dikirim ( <?php echo e($sedangKirim->count()); ?> )</a>
</div>
</div>
<div class="col-md-9">
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
	<table class="table table-stripped table-hover">
    	<thead>
    		<th>No.</th>
    		<th>Nama Barang</th>
    		<th>Jenis</th>
    		<th>Jumlah</th>
    		<th>Total Pembayaran</th>
            <th>Lokasi</th>
    	</thead>
    	<tbody>
    		<?php
			$i = 1;
    		?>
			<?php $__currentLoopData = $lol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		<tr>
    			<td><?php echo e($i++); ?></td>
    			<td><?php echo e($p->nama_barang); ?></td>
    			<td><?php echo e($p->jenis_komoditas); ?></td>
    			<td><?php echo e($p->jumlah); ?></td>
    			<td><?php echo e($p->harga_total); ?></td>
                <td>
                    <a href="/outlets/<?php echo e($p->mitra_id); ?>" class="btn btn-sm btn-dark">Lihat</a>
                </td>
    		</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	</tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
 <table class="table table-stripped table-hover">
    	<thead>
    		<th>No.</th>
    		<th>Nama Barang</th>
    		<th>Jenis</th>
    		<th>Jumlah</th>
    		<th>Total Pembayaran</th>
            <th>Lokasi</th>
    	</thead>
    	<tbody>
    		<?php
			$i = 1;
    		?>
			<?php $__currentLoopData = $telatBayar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		<tr>
    			<td><?php echo e($i++); ?></td>
    			<td><?php echo e($p->nama_barang); ?></td>
    			<td><?php echo e($p->jenis_komoditas); ?></td>
    			<td><?php echo e($p->jumlah); ?></td>
    			<td><?php echo e($p->harga_total); ?></td>
    			
                <td>
                    <a href="/outlets/<?php echo e($p->mitra_id); ?>" class="btn btn-sm btn-dark">Lihat</a>
                </td>
    		</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	</tbody>
    </table> 	
  </div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
  
   <table class="table table-stripped table-hover">
    	<thead>
    		<th>No.</th>
    		<th>Nama Barang</th>
    		<th>Jenis</th>
    		<th>Jumlah</th>
    		<th>Total Pembayaran</th>
            <th>Lokasi</th>
    	</thead>
    	<tbody>
    		<?php
			$i = 1;
    		?>
			<?php $__currentLoopData = $editan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		<tr>
    			<td><?php echo e($i++); ?></td>
    			<td><?php echo e($p->nama_barang); ?></td>
    			<td><?php echo e($p->jenis_komoditas); ?></td>
    			<td><?php echo e($p->jumlah); ?></td>
    			<td><?php echo e($p->harga_total); ?></td>
    			
                <td>
                    <a href="/outlets/<?php echo e($p->mitra_id); ?>" class="btn btn-sm btn-dark">Lihat</a>
                </td>
    		</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	</tbody>
    </table> 	


  </div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
<table class="table table-stripped table-hover">
        <thead>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Total Pembayaran</th>
            <th>Lokasi</th>
        </thead>
        <tbody>
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
                
                <td>
                    <a href="/outlets/<?php echo e($p->mitra_id); ?>" class="btn btn-sm btn-dark">Lihat</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>    
  </div>
</div>





</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/notifikasi/index.blade.php ENDPATH**/ ?>