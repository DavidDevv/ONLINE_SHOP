<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $no=1;
        foreach ($this->cart->contents() as $items) : ?> 

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $items['name']?></td>
            <td><?php echo $items['qty']?></td>
            <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
            <td align="right">Rp. <?php echo number_format($items['subtotal'],0,',','.') ?></td>

            <td width="10%" onclick="return confirm('Yakin Ingin Menghapus Keranjang ?')">
            <?= anchor('dashboard/hapus_item_keranjang/'.$items['rowid'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
            </td>
        </tr>

        <?php endforeach ?>
         <tr>
             <td colspan="4"></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(),0,',','.' ) ?></td>
        </tr>
 
    </table>
    <div align="right">
         <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
         <a href="<?php echo base_url('welcome/index') ?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
         <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#checkout">Pembayaran</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="checkout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> YAKIN MAU BAYAR?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     KLIK LANJUTKAN UNTUK BAYAR<br>
     KELUAR UNTUK BATALKAN<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">KELUAR</button>
        <a type="button" href="<?= base_url('dashboard/pembayaran')?>"  class="btn btn-primary">LANJUTKAN</a>
      </div>
    </div>
  </div>
</div>