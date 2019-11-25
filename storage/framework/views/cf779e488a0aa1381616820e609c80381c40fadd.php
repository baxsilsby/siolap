<?php $__env->startSection('title', __('outlet.list')); ?>

<?php $__env->startSection('content'); ?>


<div style="display: <?php echo e(Auth::user()->role=="mitra" ? "block" : "none"); ?>">
<div class="card">
  <div class="card-body">
    <table class="table table-stripped table-hover">
        <tbody>
            <tr>
                <td width="10%">NAMA</td>
                <td>: &nbsp&nbsp&nbsp<strong><?php echo e($mine_User->name); ?></strong></td>
            </tr>
            <tr>
                <td width="10%">Alamat</td>
                <td>: &nbsp&nbsp&nbsp<strong><?php echo e($mine_User->address); ?></strong></td>
            </tr>
            <tr>
                <td width="10%">Email</td>
                <td>: &nbsp&nbsp&nbsp<strong><?php echo e($User_onUser->email); ?></strong></td>
            </tr>
            <tr>
                <td width="10%">Role</td>
                <td>: &nbsp&nbsp&nbsp<strong><?php echo e($User_onUser->role); ?></strong></td>
            </tr>
            <tr>
                <td width="10%">Latitude</td>
                <td>: &nbsp&nbsp&nbsp<strong><?php echo e($mine_User->latitude); ?></strong></td>
            </tr>
            <tr>
                <td width="10%">Longitude</td>
                <td>: &nbsp&nbsp&nbsp<strong><?php echo e($mine_User->longitude); ?></strong></td>
            </tr>
            <tr>
                <td><a href="/outlets/<?php echo e($mine_User->id); ?>/edit" class="btn btn-primary float-right" style="width: 200px;">Edit Info</a>
                </td>                    
            </tr>
        </tbody>
    </table>
  </div>
</div>
</div>    

<div style="display: <?php echo e(Auth::user()->role=="mitra" ? "none" : "block"); ?>">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <form method="GET" action="" accept-charset="UTF-8" class="form-inline">
                    <div class="form-group">
                        <label for="q" class="control-label"><?php echo e(__('outlet.search')); ?></label>
                        <input placeholder="<?php echo e(__('outlet.search_text')); ?>" name="q" type="text" id="q" class="form-control mx-sm-2" value="<?php echo e(request('q')); ?>">
                    </div>
                    <input type="submit" value="<?php echo e(__('outlet.search')); ?>" class="btn btn-secondary">
                    <a href="<?php echo e(route('outlets.index')); ?>" class="btn btn-link"><?php echo e(__('app.reset')); ?></a>
                </form>
            </div>
            <table class="table table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th class="text-center"><?php echo e(__('app.table_no')); ?></th>
                        <th><?php echo e(__('outlet.name')); ?></th>
                        <th><?php echo e(__('outlet.address')); ?></th>
                        <th><?php echo e(__('outlet.latitude')); ?></th>
                        <th><?php echo e(__('outlet.longitude')); ?></th>
                        <th class="text-center"><?php echo e(__('app.action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $outlets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $outlet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($outlets->firstItem() + $key); ?></td>
                        <td><?php echo $outlet->name_link; ?></td>
                        <td><?php echo e($outlet->address); ?></td>
                        <td><?php echo e($outlet->latitude); ?></td>
                        <td><?php echo e($outlet->longitude); ?></td>
                        <td class="text-center">
                            <a href="<?php echo e(route('outlets.show', $outlet)); ?>" id="show-outlet-<?php echo e($outlet->id); ?>"><?php echo e(__('app.show')); ?></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="card-body"><?php echo e($outlets->appends(Request::except('page'))->render()); ?></div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 400px; }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([<?php echo e($outlet->latitude); ?>, <?php echo e($outlet->longitude); ?>], <?php echo e(config('leaflet.detail_zoom_level')); ?>);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([<?php echo e($outlet->latitude); ?>, <?php echo e($outlet->longitude); ?>]).addTo(map)
        .bindPopup('<?php echo $outlet->map_popup_content; ?>');
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/outlets/index.blade.php ENDPATH**/ ?>