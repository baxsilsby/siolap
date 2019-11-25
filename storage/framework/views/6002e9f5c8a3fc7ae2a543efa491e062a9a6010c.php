<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title>
<?php echo $__env->yieldContent('judul'); ?>
</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<?php echo $__env->yieldContent('styles'); ?>
<link rel="icon" href="<?php echo e(('farm/img/core-img/siolap.ico')); ?>">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="<?php echo e(asset('farm/style.css')); ?>">
</head>
<body>


<div id="app">

<div id="sticky-wrapper" class="sticky-wrapper" style="height: 80px;"><div class="famie-main-menu" style="auto">
      <div class="classy-nav-container breakpoint-off light left">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="home" class="nav-brand"><img src="<?php echo e(asset('farm/img/core-img/logo.png')); ?>" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                <?php if(auth()->guard()->guest()): ?>
                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('home')); ?></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('about')); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('ourproduct')); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('contact')); ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary btn-sm" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>

                <li class="nav-item">
                    <?php if(Route::has('register')): ?>
                    
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/outlets/create')); ?>"><?php echo e(__('Daftar Mitra')); ?></a>
                </li>
                <?php else: ?>

                <?php if(Auth::user()->role=="mitra"): ?>
                    <li ><a class="nav-link" href="/sedang-dikirim">Sedang Dikirim</a></li>  
                    <li ><a class="nav-link" href="/pembayaran">Pembayaran</a></li>
                    <li ><a class="nav-link" href="/barang">Barang</a></li>
                    <li ><a class="nav-link" href="/notifikasi">Notif</a></li>
                    <li ><a class="nav-link" href="/outlets">Info Saya</a></li>
                    <li ><a class="nav-link" href="/status-barang">Status</a></li>
                    
                <?php endif; ?>
                
                <?php if(Auth::user()->role=="petani"): ?>
                <li><a class="nav-link" href="/optimasi-lahan">Optimasi Lahan</a></li>  
                <li><a class="nav-link" href="/rekomendasi-tanam">Rekomendasi Tanam</a></li>  
                <li><a class="nav-link" href="/pasarkan-produk">Pasarkan Produk Saya</a></li>    
                <li><a class="nav-link" href="/notifikasi-pemasaran">Notifikasi</a></li> 
                <li>
                    <a class="nav-link" href="<?php echo e(Auth::user()->role=="petani" ? "/produk" : ""); ?>">Produk</a>
                </li>
                <?php endif; ?>
                
                <?php if(Auth::user()->role=="admin"): ?>
                <li ><a class="nav-link" href="/kirim-barang">Pengiriman</a></li>  
                <li ><a class="nav-link" href="/akun-petani">Akun Petani</a></li> 

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Transaksi <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?php echo e(url('/verif-transaksi')); ?>">
                            Verifikasi Transaksi
                        </a>
                    
                        <a class="dropdown-item" href="<?php echo e(url('/refresh-transaksi')); ?>">
                            Refresh Transaksi
                        </a>

                    </div>
                </li>
                
                
                <li>
                    <a class="nav-link" href="<?php echo e(Auth::user()->role=="admin" ? "/verif-harga" : ""); ?>">Verif Harga</a>
                </li>
                <?php endif; ?> 

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Akun <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item">
                            <?php echo e(Auth::user()->name); ?>

                        </a>
                        <a class="dropdown-item">
                            <?php echo e(Auth::user()->role); ?>

                        </a>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <?php echo e(__('Keluar')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
                  <?php endif; ?>
                </ul>
                <!-- Search Icon -->
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
        </div>
      </div>
    </div>
</div>
<!-- <nav class="navbar navbar-expand-md navbar-light navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
SIOLAP
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav ml-auto">

<?php if(auth()->guard()->guest()): ?>
<li class="nav-item">
    <a class="nav-link btn btn-outline-primary btn-sm" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
</li>

<li class="nav-item">
    <?php if(Route::has('register')): ?>
       
    <?php endif; ?>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('/outlets/create')); ?>"><?php echo e(__('Daftar Mitra')); ?></a>
</li>
<?php else: ?>

<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="petani" ? "block" : "none"); ?>"><a class="nav-link" href="/optimasi-lahan">Optimasi Lahan</a></li>  
<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="petani" ? "block" : "none"); ?>"><a class="nav-link" href="/rekomendasi-tanam">Rekomendasi Tanam</a></li>  
<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="mitra" ? "block" : "none"); ?>"><a class="nav-link" href="/sedang-dikirim">Sedang Dikirim</a></li>  
<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="admin" ? "block" : "none"); ?>"><a class="nav-link" href="/kirim-barang">Pengiriman</a></li>  
<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="admin" ? "block" : "none"); ?>"><a class="nav-link" href="/akun-petani">Akun Petani</a></li>  
<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="petani" ? "block" : "none"); ?>"><a class="nav-link" href="/pasarkan-produk">Pasarkan Produk Saya</a></li>    
<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="petani" ? "block" : "none"); ?>"><a class="nav-link" href="/notifikasi-pemasaran">Notifikasi</a></li>   
<li class="nav-item" style="display: <?php echo e(Auth::user()->role=="mitra" ? "block" : "none"); ?>"><a class="nav-link" href="/pembayaran">Pembayaran</a></li>
<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="mitra" ? "block" : "none"); ?>"><a class="nav-link" href="/barang">Barang</a></li>


<li class="nav-item dropdown" style="display:<?php echo e(Auth::user()->role=="admin" ? "block" : "none"); ?>">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        Transaksi <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="<?php echo e(url('/verif-transaksi')); ?>">
            Verifikasi Transaksi
        </a>
       
        <a class="dropdown-item" href="<?php echo e(url('/refresh-transaksi')); ?>">
            Refresh Transaksi
        </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
</li>


<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="mitra" ? "block" : "none"); ?>"><a class="nav-link" href="/notifikasi">Notif</a></li>
<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="mitra" ? "block" : "none"); ?>"><a class="nav-link" href="/outlets">Info Saya</a></li>
<li class="nav-item" style="display:<?php echo e(Auth::user()->role=="mitra" ? "block" : "none"); ?>"><a class="nav-link" href="/status-barang">Status</a></li>
<li class="nav-item" style="display: <?php echo e(Auth::user()->role=="admin" ? "block" : "none"); ?>">
    <a class="nav-link" href="<?php echo e(Auth::user()->role=="admin" ? "/verif-harga" : ""); ?>">Verif Harga</a>
</li>


<li class="nav-item" style="display: <?php echo e(Auth::user()->role=="petani" ? "block" : "none"); ?>">
    <a class="nav-link" href="<?php echo e(Auth::user()->role=="petani" ? "/produk" : ""); ?>">Produk</a>
</li>


<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        Akun <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item">
            <?php echo e(Auth::user()->name); ?>

        </a>
        <a class="dropdown-item">
            <?php echo e(Auth::user()->role); ?>

        </a>
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <?php echo e(__('Keluar')); ?>

        </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
</li>
<?php endif; ?>
</ul>
</div>
</div>
</nav> -->

<main class="py-4 container">
<?php echo $__env->yieldContent('content'); ?>

</main>
<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\Hadi\Downloads\Compressed\New folder (9)\PPLAgro-siolap-master\resources\views/layouts/app.blade.php ENDPATH**/ ?>