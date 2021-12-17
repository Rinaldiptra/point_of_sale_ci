<div class="container-fluid">
    <button class =" btn btn-sm btn-primary mb-3"  data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm"></i> Add Item</button>

    
    <table class = "table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Merek</th>
            <th>Kategori</th>
            <th>Tanggal Masuk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th colspan="2">Aksi</th>
        </tr>
       
        <?php
         $no=1;
         foreach($barang as $brg) : 
         ?>
           
          <tr>
              <td><?php echo $no++?></td>
              <td><?php echo $brg->nama_barang?></td>
              <td><?php echo $brg->id_merek?></td>
              <td><?php echo $brg->kategori?></td>
              <td><?php echo $brg->tanggal_masuk?></td>
              <td><?php echo $brg->harga_beli?></td>
              <td><?php echo $brg->harga_jual?></td>
              <td><?php echo $brg->stok?></td>
              <td><?php echo $brg->keterangan?></td>
              <td><?php echo $brg->gambar?></td>
              <td>
                  <?php echo anchor('admin/barang/edit/'.$brg->id_barang,
                   '<div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>')?>
              </td>
              <td>
                    <?php echo anchor('admin/barang/hapus/'.$brg->id_barang,
                   ' <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> 
              </td>
          </tr>


        <?php endforeach; ?>
        
    </table>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url().'admin/barang/tambah' ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control">
            </div>
         
                <div class="form-group">
                    <strong>Kode Merek:</strong>
                    <select class="form-control select2" name="id_merek">
                     <option selected disable value="">Pilih merek</option>
                        <?php foreach($merek->result() as $i){
                            echo "<option value=".$i->merek.">".$i->merek."</option>";
                        }
                      ?>
                    
                    </select>
                
            </div>
            <div class="form-group">
            <label>Kategori</label>
               <select name="kategori" class="form-control">
                   <option value="elektronik">Elektronik</option>
                   <option value="pakaian pria">Pakaian Pria</option>
                   <option value="pakaian wanita">Pakaian Wanita</option>
                   <option value="pakaian anak">Pakaian Anak</option>
                   <option value="peralatan olahraga">Peralatan Olahraga</option>
               </select>
            </div>
            <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga Beli</label>
                <input type="text" name="harga_beli" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
