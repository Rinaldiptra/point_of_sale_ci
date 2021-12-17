<div class="container-fluid">
    
    <div class="row text-center">

        <?php foreach($pakaian_anak as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/item/'.$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $brg->nama_barang ?></h5>
                    <small><?php echo $brg->keterangan ?></small>
                    <br>
                    <span class="badge rounded-pill bg-success text-white mb-3">Rp. <?php echo number_format($brg->harga_jual,0,',','.')?></span>
                    <br>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_barang,
                    '<div class="btn btn-primary">Keranjangin Yu</div>')?>

                    <?php echo anchor('dashboard/detail/'.$brg->id_barang,
                    '<div class="btn btn-success">Detail</div>')?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
