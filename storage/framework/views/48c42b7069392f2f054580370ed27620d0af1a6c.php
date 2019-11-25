<?php $__env->startSection('judul'); ?>
Status Pembayaran
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
  </ol>
</nav>  

<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('farm/img/bg-img/47.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>PEMBAYARAN</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="card">
  <div class="card-body">
    <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Wajib Bayar(<?php echo e($response['pembayaranWajibC']); ?>)</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Telat Bayar(<?php echo e($response['pembayaranTelatC']); ?>)</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Semua(<?php echo e($response['pembayaranC']); ?>)</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contacts" role="tab" aria-controls="nav-contacts" aria-selected="false">Semua(<?php echo e($response['pembayaranInvalidC']); ?>)</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><br>
    <table class="table table-stripped table-hover text-center">
        <thead>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Jenis Komoditas</th>
            <th>Jumlah</th>
            <th>Total Pembayaran</th>
            <th>Terakhir Pembayaran</th>
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
            <?php $__currentLoopData = $pembayaranWajib; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($p->nama_barang); ?></td>
                <td><?php echo e($p->jenis_komoditas); ?></td>
                <td><?php echo e($p->jumlah); ?></td>
                <td><?php echo e($p->harga_total); ?></td>
                <td><?php echo e($p->terakhir); ?></td>
                <td><a href="/pembayaran/<?php echo e($p->id_pembelian); ?>/bukti" class="btn btn-sm btn-dark" style="display: <?php echo e((date($p->terakhir))>(date('Y-m-d H:i:s')) ? "block" : "none"); ?>"><?php echo e(empty($p->bukti_tf) ? "Upload Bukti" : "Edit Bukti"); ?></a>

                <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal" style="display: <?php echo e((date($p->terakhir))>(date('Y-m-d H:i:s')) ? "none" : "block"); ?>">
                  <?php echo e(empty($p->bukti_tf) ? "Upload Bukti" : "Edit Bukti"); ?>

                </button>    
                <div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pembelian Expired</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Batas Akhir Pembayaran adalah : <strong><?php echo e($p->terakhir); ?></strong></p>
                        Anda tidak dapat melakukan upload bukti pembayaran lagi karena Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique sequi alias impedit, nam obcaecati officiis, dicta harum sunt, neque veniam esse, culpa expedita eveniet. Itaque eos nihil natus earum magni.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>


  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <br>
    <table class="table table-stripped table-hover text-center">
        <thead>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Jenis Komoditas</th>
            <th>Jumlah</th>
            <th>Total Pembayaran</th>
            <th>Terakhir Pembayaran</th>
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
            <?php $__currentLoopData = $pembayaranTelat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($p->nama_barang); ?></td>
                <td><?php echo e($p->jenis_komoditas); ?></td>
                <td><?php echo e($p->jumlah); ?></td>
                <td><?php echo e($p->harga_total); ?></td>
                <td><?php echo e($p->terakhir); ?></td>
                <td><a href="/pembayaran/<?php echo e($p->id_pembelian); ?>/bukti" class="btn btn-sm btn-dark" style="display: <?php echo e((date($p->terakhir))>(date('Y-m-d H:i:s')) ? "block" : "none"); ?>"><?php echo e(empty($p->bukti_tf) ? "Upload Bukti" : "Edit Bukti"); ?></a>

                <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo e($p->id_pembelian); ?>" style="display: <?php echo e((date($p->terakhir))>(date('Y-m-d H:i:s')) ? "none" : "block"); ?>">
                  <?php echo e(empty($p->bukti_tf) ? "Upload Bukti" : "Edit Bukti"); ?>

                </button>    
                <div class="modal fade" id="exampleModal<?php echo e($p->id_pembelian); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pembelian Expired</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-left">
                        <p>Pembelian produk bernama : <strong><?php echo e($p->nama_barang); ?></strong>, telah expired karena batas pengiriman bukti transfer adalah 1 hari atau 24 Jam</p>
                        <p>Batas Akhir Pembayaran adalah : <strong><?php echo e($p->terakhir); ?></strong></p>
                        Anda tidak dapat melakukan upload bukti pembayaran lagi karena Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique sequi alias impedit, nam obcaecati officiis, dicta harum sunt, neque veniam esse, culpa expedita eveniet. Itaque eos nihil natus earum magni.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>




  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <br>
    <table class="table table-stripped table-hover text-center">
        <thead>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Jenis Komoditas</th>
            <th>Jumlah</th>
            <th>Total Pembayaran</th>
            <th>Terakhir Pembayaran</th>
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
            <?php $__currentLoopData = $pembayaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($p->nama_barang); ?></td>
                <td><?php echo e($p->jenis_komoditas); ?></td>
                <td><?php echo e($p->jumlah); ?></td>
                <td><?php echo e($p->harga_total); ?></td>
                <td><?php echo e($p->terakhir); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table></div>


  <div class="tab-pane fade" id="nav-contacts" role="tabpanel" aria-labelledby="nav-contacts-tab">
    <br>
    <table class="table table-stripped table-hover text-center">
        <thead>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Jenis Komoditas</th>
            <th>Jumlah</th>
            <th>Total Pembayaran</th>
            <th>Terakhir Pembayaran</th>
            <td>Keterangan</td>
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
            <?php $__currentLoopData = $pembayaranInvalid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($p->nama_barang); ?></td>
                <td><?php echo e($p->jenis_komoditas); ?></td>
                <td><?php echo e($p->jumlah); ?></td>
                <td><?php echo e($p->harga_total); ?></td>
                <td><?php echo e($p->terakhir); ?></td>
                <td><?php echo e($p->keterangan); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table></div>
</div>


    
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/pembayaran/statusbayar.blade.php ENDPATH**/ ?>