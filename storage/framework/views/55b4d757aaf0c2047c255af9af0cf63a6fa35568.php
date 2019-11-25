<?php $__env->startSection('judul'); ?>
Data Petani
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="card">
        <div class="card-title">
            <h3 class="text-center">Pendaftaran Akun Petani</h3>
        </div>

        <div class="card-body">
            <form method="POST" action="/postregister">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <label for="name" class="control-label"><?php echo e(__('Name')); ?></label>
                        <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                        <?php if($errors->has('name')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                        <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="email" class="control-label"><?php echo e(__('E-Mail Address')); ?></label>
                        <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="password" class="control-label"><?php echo e(__('Password')); ?></label>
                        <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                        <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
               

                <div class="form-group ">
                    <label for="password-confirm" class="control-label"><?php echo e(__('Confirm Password')); ?></label>
                        <input id="password-confirm" type="password" class="form-control" name="password2" required>
                    </div>
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Buat Akun">
      
</form>
        </div>


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
    <div class="alert alert-danger" >
      <?php echo e(session('gagal')); ?>

    </div>
    <?php endif; ?>
<div class="card">
  <div class="card-body">
	Data Petani 

	<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
  Buat Akun Petani
</button>


  </div>
</div>
<div class="card">
  <div class="card-body">
    <table class="table table-stripped table-hover">
    	<thead>
    		<th>No.</th>
    		<th>Nama Barang</th>
    		<th>Jenis Email</th>
    	</thead>
    	<tbody>
    		<?php
			$i = 1;
    		?>
			<?php $__currentLoopData = $petani; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		<tr>
    			<td><?php echo e($i++); ?></td>
    			<td><?php echo e($p->name); ?></td>
    			<td><?php echo e($p->email); ?></td>
    		</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	</tbody>
    </table>
            <div class="justify-center"><?php echo e($petani->links()); ?></div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/petani/index.blade.php ENDPATH**/ ?>