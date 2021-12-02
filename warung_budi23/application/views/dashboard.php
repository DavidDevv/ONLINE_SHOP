<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider.jpg')?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="row">
        <?php foreach($barang as $brg):?>
          <div class="card ml-2 mt-2" style="width: 16rem;">
        <img src="<?php echo base_url().'/uploads/'. $brg->gambar?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $brg->nama_brg?></h5>
            <p class="card-text"><?php echo $brg->keterangan?></p>
            <span class="badge badge-pill badge-success">Rp.<?php echo $brg->harga ?></span>
            <span class="badge badge-pill badge-danger"><?php echo $brg->stok ?></span>
            <small><a href="#" class="btn btn-sm btn-primary">Tambah ke keranjang</a></small>
            <small><a href="#" class="btn btn-sm btn-success">Detail</a></small>
        </div>
        </div>
        <?php endforeach;?>
    </div>
</div>