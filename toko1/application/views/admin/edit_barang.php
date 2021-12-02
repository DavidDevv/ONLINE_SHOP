<div class="container-fluid">
    <h3>EDIT BARANG</h3>
    <?php foreach($barang as $brg) : ?>
        <form action="<?php echo base_url().'admin/data_barang/update'; ?>" method="post">
        <div class="form-group">
        <label>NAMA BARANG</label>
        <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg ?>">
        </div>
        <div class="form-group">
        <label>KETERANGAN</label>
        <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg ?>">
        <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan ?>">
        </div>
        <div class="form-group">
        <label>KATEGORI</label>
        <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori ?>">
        </div>
        <div class="form-group">
        <label>HARGA</label>
        <input type="text" name="harga" class="form-control" value="<?= $brg->harga ?>">
        </div>
        <div class="form-group">
        <label>STOK</label>
        <input type="text" name="stok" class="form-control" value="<?= $brg->stok ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">SIMPAN</button>
      </form>
    <?php endforeach; ?>
</div>