<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Brands</h3>
    <?php 
        foreach($merek as $merek):
    ?>
    <form method="POST" action="<?php echo base_url().'admin/merek/update'?>">
        <div class="form-group">
            <label for="merek">Merek</label>
            <input type="text" name="merek" class="form-control" value="<?php echo $merek->merek?> ">
            <input type="hidden" name="id" class="form-control" value="<?php echo $merek->id?> ">
        </div>
        <button type="submit" class="btn btn-primary btn-sm"> Update</button>
    </form>
    <?php 
      endforeach;
    ?>
</div>