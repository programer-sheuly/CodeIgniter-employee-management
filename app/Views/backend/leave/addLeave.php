
<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>


<div class="container">
	<div class="row">
		<div class="col-12">
			<form method ="POST" action="<?= base_url('/addLeave') ?>" enctype="multipart/form-data">
                <div class="modal-header">                        
                    <h4 class="modal-title">Add Salary</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label>Staff Name</label>
                        <input type="text" name ="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file"  name ="image"  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name ="department"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Reason</label>
                        <input type="text" name ="reason"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" name ="from"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>To</label>
                        <input type="text" name = "to" class="form-control" required>
                    </div>
                    <select name="status" id="">
                        <option value="">Select Status</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name = "description" class="form-control" required>
                    </div>                                               
                    </div>
                <div class="#">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
    		</form>
		</div>
	</div>
</div>



<?= $this->endSection() ?>

