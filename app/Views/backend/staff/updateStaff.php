
<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div class="container">
	<div class="row">
		<div class="col-12">
		<form method ="POST" action="<?= base_url('update_staff/').$sheuly['id'] ?>" enctype='multipart/form-data'> <!-- updateStaff come from routes page -->
                <div class="modal-header">                        
                    <h4 class="modal-title">Update Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name ="name" id = "name" class="form-control" required value ="<?= $sheuly['name']?>">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file"  name ="image" class="form-control" value ="<?= $sheuly['image']?>">
                        <img class="mt-3" src="<?= base_url('uploads/img/'.$sheuly['image']) ?>" width="250"  alt="">
                    </div> 
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name ="email" id ="email" class="form-control" required value ="<?= $sheuly['email']?>">
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text"  name ="department" id = "department" class="form-control" required value ="<?= $sheuly['department']?>">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name = "address" class="form-control" required value ="<?= $sheuly['address']?>">
                    </div>
                    <div class="form-group">
                        <label>Date Of Joining</label>
                        <input type="text" name = "Joining" class="form-control" required value ="<?= $sheuly['Joining']?>">
                    </div>                                           
                </div>
                <div class="">
                   <button type="submit" class="btn btn-primary">Update</button>
                </div>
    		</form>
		</div>
	</div>
</div>
<?= $this->endSection() ?>

