<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <!-- <div class="btn btn-sm btn-success">
               <?php 
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach($keranjang as $items)
                    {
                        $grand_total = $items['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0,',','.');
                
               ?>
           </div><br><br> -->
           <h3>Input Alamat Pengiriman Dan Pembayaran</h3>

           <form action="<?php echo base_url('dashboard/proses_pesanan') ?>" method="POST">
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_pemesan" class="form-control" placeholder="Nama Lengkap Anda">
                    <label for="Alamat Lengkap">Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda">
                    <label for="no_telpon">No. Telpon</label>
                    <input type="text" name="no_telpon" class="form-control" placeholder="No Telpon Lengkap Anda">
                    <label for="jasa_pengiriman">Jasa Pengiriman</label>
                   <select name="jasa_pengiriman" class="form-control">
                       <option value="jne">JNE</option>
                       <option value="jnt">JNT</option>
                       <option value="sicepat">Sicepat</option>
                       <option value="gojek">Gojek</option>
                       <option value="pos_indonesia">POS Indonesia</option>
                   </select>
                   <label for="nama_lengkap">Bank</label>
                   <select name="bank" class="form-control">
                       <option value="jne">BCA</option>
                       <option value="jnt">BNI</option>
                       <option value="sicepat">BRI</option>
                       <option value="gojek">Mandiri</option>
                   </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Pesan</button>
           </form>
           <?php 
            }else{
                echo "<h5>Keranjang Belanja Anda Kosong, Mari Belanja!</h5>";
            }
        
           ?>
        </div>
        
        <div class="col-md2"></div>
    </div>
</div>