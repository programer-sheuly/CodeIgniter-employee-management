
<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<form method ="POST" action="<?= base_url('updateSalary/').$sheuly['id']?>" enctype="multipart/form-data">
                <div class="modal-header">                        
                    <h4 class="modal-title">Add Salary</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" name ="name" id = "name" class="form-control" required value ="<?= $sheuly['employee_name']?>">
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name ="department" id ="email" class="form-control" required value ="<?= $sheuly['department']?>">
                    </div>
                    <div class="form-group">
                        <label>Basic Salary</label>
                        <input type="text" name = "bsalary" class="form-control" required value ="<?= $sheuly['basic_salary']?>">
                    </div>
                    <div class="form-group">
                        <label>Allowance</label>
                        <input type="text" name = "allowance" class="form-control" required value ="<?= $sheuly['allowance']?>">
                    </div> 
                    
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file"  name ="image" id = "department" class="form-control" value ="<?= $sheuly['image']?>">
                        <img class="mt-3" src="<?= base_url('uploads/img/'.$sheuly['image']) ?>" width="250"  alt="">
                    </div>                                         
                </div>
                <div class="#">
                   <button type="submit" class="btn btn-primary">Update</button>
                </div>
    		</form>
		</div>
	</div>
</div>
<?= $this->endSection() ?>

