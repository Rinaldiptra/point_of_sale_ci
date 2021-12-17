<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <?php 
        foreach($barang as $brg):
    ?>
    <form method="POST" action="<?php echo base_url().'admin/barang/update'?>">
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang?> ">
            <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang?> ">
        </div>
        <div class="form-group">
            <label for="id_merek">Merek</label>
            <input type="text" name="id_merek" class="form-control" value="<?php echo $brg->id_merek?> ">
        </div>
        <div class="form-group">
            <label for="id_distributor">Ketegori</label>
            <input type="text" name="id_distributor" class="form-control" value="<?php echo $brg->kategori?> ">
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="text" name="tanggal_masuk" class="form-control" value="<?php echo $brg->tanggal_masuk?> ">
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Beli</label>
            <input type="text" name="harga_jual" class="form-control" value="<?php echo $brg->harga_jual?> ">
        </div>
        <div class="form-group">
            <label for="harga_beli">Harga Jual</label>
            <input type="text" name="harga_beli" class="form-control" value="<?php echo $brg->harga_beli?> ">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok?> ">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan?> ">
        </div>
        <button type="submit" class="btn btn-primary btn-sm"> Update</button>
    </form>
    <?php 
      endforeach;
    ?>
</div>