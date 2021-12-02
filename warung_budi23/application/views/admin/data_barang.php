<div class="container-fluid">
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus"></i> TAMBAH BARANG</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php $no=1;
        foreach($barang as $brg):?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $brg->nama_brg?></td>
                <td><?php echo $brg->keterangan?></td>
                <td><?php echo $brg->kategori?></td>
                <td><?php echo $brg->harga?></td>
                <td><?php echo $brg->stok?></td>
                <td><div class="btn btn-sm btn-primary"><i class="fas fa-search-plus"></i></div></td>
                <td><?php echo anchor('admin/data_barang/edit/'.$brg->id_brg,'<div class="btn btn-sm btn-success"><i class="fas fa-edit"></i></div>') ?></td>
                <td><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'?>" method="POST" enctype="multipart/form-data">
        <div class="for-group">
            <label for="">NAMA BARANG</label>
                <input type="text" name="nama_brg" class="form-control">
        </div>
        <div class="for-group">
            <label for="">KETERANGAN</label>
                <input type="text" name="keterangan" class="form-control">
        </div>
        <div class="for-group">
            <label for="">KATEGORI</label>
            <select class="form-control" name="kategori">
             <option>Elektronik</option>
             <option>Pakaian Pria</option>
             <option>Pakaian Wanita</option>
             <option>Pakaian Anak</option>
             <option>Peralatan Olahraga</option>
        </select>
        </div>
        <div class="for-group">
            <label for="">HARGA</label>
                <input type="text" name="harga" class="form-control">
        </div>
        <div class="for-group">
            <label for="">STOK</label>
                <input type="text" name="stok" class="form-control">
        </div>
        <div class="for-group">
            <label for="">GAMBAR</label>
                <input type="file" name="gambar" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>