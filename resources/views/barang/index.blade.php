@extends('layouts.app')

@section('judul')
Produk Saya
@stop

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Barang</li>
  </ol>
</nav> 
 <!-- ##### Breadcrumb Area Start ##### -->
 <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('farm/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Barang</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</nav> 
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Shop Area Start ##### -->
  <section class="shop-area section-padding-0-100">
    <div class="container">

      <div class="row">
        <!-- Shop Filters -->
        <div class="col-12">
          <div class="shop-filters mb-30 d-flex align-items-center justify-content-between">

            <!-- Product View Mode -->
            <div class="produtc-view-mode">
              
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Shop Sidebar Area -->
        <div class="col-12 col-md-4 col-lg-3">

          <!-- Shopping Cart -->
          
          <!-- Single Widget Area -->
          <div class="single-widget-area">
          
            <!-- Title -->
            <h5 class="widget-title">Catagories</h5>
            <!-- Cata List -->
            <ul class="cata-list shop-page">
              <li><a href="#nav-home">Semua</a></li>
              <li><a href="#nav-profile">Padi</a></li>
              <li><a href="#nav-contact">Tebu</a></li>
              <li><a href="#nav-bakau">Tembakau</a></li>
              <li><a href="#nav-delai">Kedelai</a></li>
            </ul>
          </div>
          <!-- Single Widget Area -->
          <!-- Single Widget Area -->
          <!-- Single Widget Area -->
        </div>

        <!-- Shop Products Area -->
        <div class="col-12 col-md-8 col-lg-9">
          <div class="row">

            <!-- Single Product Area -->
            @foreach($semua as $mp)
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="single-product-area mb-50">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                  <img style="object-fit: cover;height: 250px;width: 100%;" src="{{$mp->getAvatar()}}" alt="">
                  <!-- Product Meta Data -->
                  <div class="product-meta-data"></div></div>
                <!-- Product Description -->
                <div class="product-desc text-center pt-4">
                  <a href="/barang/{{$mp->id}}/beli" class="product-title">{{$mp->nama_barang}}</a>
                  <a class="breadcrumb-item active" aria-current="page">Status : {{$mp->getStatus()}}</a>
                  <div><a class="breadcrumb-item" aria-current="page">Jenis Komoditas : {{$mp->jenis_komoditas}}</a></div>
                  <div><a class="breadcrumb-item" aria-current="page">Stok Komoditas : {{$mp->stock}}</a></div>
                  <h6 class="price">Rp. {{$mp->harga_barang}}</h6>
                  <a href="/barang/{{$mp->id}}/beli" data-toggle="tooltip" data-placement="top" title="Beli"><i class="icon_cart_alt"></i> Beli</a>
                </div>
              </div>
            </div>
            @endforeach
      

            
            
            
            <!-- Single Product Area -->
            <!-- Single Product Area -->
            <!-- Single Product Area -->
          </div>
          <!-- Pagination -->
          <nav>
            <ul class="pagination mb-0 mt-50">
              <!-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li> -->
            </ul>
          </nav>
        </div>
      </div>

    </div>
<!-- <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Barang</li>
  </ol>
</nav> 
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Semua</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Padi</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tebu</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-bakau" role="tab" aria-controls="nav-contact" aria-selected="false">Tembakau</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-delai" role="tab" aria-controls="nav-contact" aria-selected="false">Kedelai</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<div class="row mt-2">
@foreach($semua as $mp)
<div class="card border-dark mb-4 mr-4" style="max-width: 22rem;">
  <img class="card-img-top" src="{{$mp->getAvatar()}}" alt="Card image cap" height="200px" style="border-bottom: 1px solid black;object-fit: cover;">
  <div class="card-body text-dark">
    <h5 class="card-title float-left">{{$mp->nama_barang}}</h5>
    <p class="float-right">Rp. {{$mp->harga_barang}}</p>
    <br>
    <p class="text-center"></p>
    <p class=""><strong>Status : {{$mp->getStatus()}}</strong></p>
    <p class=""><strong>Jenis Komoditas : {{$mp->jenis_komoditas}}</strong></p>
    <p class=""><strong>Stok Komoditas : {{$mp->stock}} </strong>Kg</p>
    <a href="/barang/{{$mp->id}}/beli" class="btn btn-primary float-left">Beli Sekarang</a>
    
    <br>
  </div>
</div>
@endforeach
</div>	

  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  	
<div class="row mt-2">
@foreach($padi as $ma)
<div class="card border-dark mb-4 mr-4" style="max-width: 22rem;">
  <img class="card-img-top" src="{{$ma->getAvatar()}}" alt="Card image cap" height="200px" style="border-bottom: 1px solid black;object-fit: cover">
  <div class="card-body text-dark">
    <h5 class="card-title float-left">{{$ma->nama_barang}}</h5>
    <p class="float-right">Rp. {{$ma->harga_barang}}</p>
    <br>
    <p class="text-center"></p>
    <p class=""><strong>Status : {{$ma->getStatus()}}</strong></p>
    <p class=""><strong>Jenis Komoditas : {{$ma->jenis_komoditas}}</strong></p>
    <p class=""><strong>Stok Komoditas : {{$ma->stock}} </strong>Kg</p>
    <a href="/barang/{{$ma->id}}/beli" class="btn btn-primary float-left">Beli Sekarang</a>
  
    <br>
  </div>
</div>
@endforeach
</div>	

  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  	
<div class="row mt-2">
@foreach($tebu as $mb)
<div class="card border-dark mb-4 mr-4" style="max-width: 22rem;">
  <img class="card-img-top" src="{{$mb->getAvatar()}}" alt="Card image cap" height="200px" style="border-bottom: 1px solid black;object-fit: cover">
  <div class="card-body text-dark">
    <h5 class="card-title float-left">{{$mb->nama_barang}}</h5>
    <p class="float-right">Rp. {{$mb->harga_barang}}</p>
    <br>
    <p class="text-center"></p>
    <p class=""><strong>Status : {{$mb->getStatus()}}</strong></p>
    <p class=""><strong>Jenis Komoditas : {{$mb->jenis_komoditas}}</strong></p>
    <p class=""><strong>Stok Komoditas : {{$mb->stock}} </strong>Kg</p>
   <a href="/barang/{{$mb->id}}/beli" class="btn btn-primary float-left">Beli Sekarang</a>
  
    <br>
  </div>
</div>
@endforeach
</div>	

  </div>
  <div class="tab-pane fade" id="nav-bakau" role="tabpanel" aria-labelledby="nav-profile-tab">
  	
<div class="row mt-2">
@foreach($tembakau as $mc)
<div class="card border-dark mb-4 mr-4" style="max-width: 22rem;">
  <img class="card-img-top" src="{{$mc->getAvatar()}}" alt="Card image cap" height="200px" style="border-bottom: 1px solid black;object-fit: cover">
  <div class="card-body text-dark">
    <h5 class="card-title float-left">{{$mc->nama_barang}}</h5>
    <p class="float-right">Rp. {{$mc->harga_barang}}</p>
    <br>
    <p class="text-center"></p>
    <p class=""><strong>Status : {{$mc->getStatus()}}</strong></p>
    <p class=""><strong>Jenis Komoditas : {{$mc->jenis_komoditas}}</strong></p>
    <p class=""><strong>Stok Komoditas : {{$mc->stock}} </strong>Kg</p>
    <a href="/barang/{{$mc->id}}/beli" class="btn btn-primary float-left">Beli Sekarang</a>
   
    <br>
  </div>
</div>
@endforeach
</div>	

  </div>
  <div class="tab-pane fade" id="nav-delai" role="tabpanel" aria-labelledby="nav-contact-tab">
  	
<div class="row mt-2">
@foreach($kedelai as $md)
<div class="card border-dark mb-4 mr-4" style="max-width: 22rem;">
  <img class="card-img-top" src="{{$md->getAvatar()}}" alt="Card image cap" height="200px" style="border-bottom: 1px solid black;object-fit: cover">
  <div class="card-body text-dark">
    <h5 class="card-title float-left">{{$md->nama_barang}}</h5>
    <p class="float-right">Rp. {{$md->harga_barang}}</p>
    <br>
    <p class="text-center"></p>
    <p class=""><strong>Status : {{$md->getStatus()}}</strong></p>
    <p class=""><strong>Jenis Komoditas : {{$md->jenis_komoditas}}</strong></p>
    <p class=""><strong>Stok Komoditas : {{$md->stock}} </strong>Kg</p>
    <a href="/barang/{{$md->id}}/beli" class="btn btn-primary float-left">Beli Sekarang</a>

    <br>
  </div>
</div>
@endforeach
</div>	

  </div>
</div> -->
@stop