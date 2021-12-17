<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Product
        </div>
            <div class="card-body">
                <?php foreach($barang as $brg): ?>
                    <div class="row">
                        <div class="col-md-4">
                           
                                <img src="<?php echo base_url().'/item/'.$brg->gambar ?>" class="card-img-top">
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td>Nama Product</td>
                                    <td><strong><?php echo $brg->nama_barang ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Ketrangan</td>
                                    <td><strong><?php echo $brg->keterangan?></strong></td>
                                </tr>
                                <tr>
                                    <td>Merek</td>
                                    <td><strong><?php echo $brg->id_merek?></strong></td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td><strong><?php echo $brg->stok?></strong></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format( $brg->harga_jual,0,',','.')?></div></strong></td>
                                </tr>
                            </table>
                            <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_barang,
                            '<div class="btn btn-primary">Keranjangin Yu</div>')?>
                            <a href="<?php echo base_url('dashboard/index')?>">
                            <div class= "btn btn-danger">Back</div>
                            </a>
                        </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
</div>