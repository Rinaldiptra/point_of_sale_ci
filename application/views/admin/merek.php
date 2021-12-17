<div class="container-fluid">
    <button class =" btn btn-sm btn-primary mb-3"  data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm"></i> Add Brands</button>

    
    <table class = "table table-bordered">
        <tr >
            <th>No</th>
            <th>Merek</th>
            <th >Aksi</th>
        </tr>
       
        <?php
         $no=1;
         foreach($merek as $merek) : 
         ?>
           
          <tr>
              <td><?php echo $no++?></td>
              <td><?php echo $merek->merek?></td>
              <td >
                  <?php echo anchor('admin/merek/edit/'.$merek->id,
                   '<div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>')?>
                    <?php echo anchor('admin/merek/hapus/'.$merek->id,
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
       <form action="<?php echo base_url().'admin/merek/tambah' ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Merek</label>
                <input type="text" name="merek" class="form-control">
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
