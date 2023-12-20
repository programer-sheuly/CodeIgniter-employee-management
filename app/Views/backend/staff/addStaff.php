
<!------------------------------ mastering start ------------------------------>

<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<!------------------------------ add staff start  ------------------------------>
<div class="container">
	<div class="row">
		<div class="col-12">
        <!-- enctype='multipart/form-data' show image  -->
			<form method ="POST" action="<?= base_url('/addStaff') ?>" enctype='multipart/form-data'> 
                <div class="modal-header">                        
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name ="name"  class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file"  name ="image"  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name ="email" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text"  name ="department" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name = "address" class="form-control" required >
                    </div> 
                    <div class="form-group">
                        <label>Date Of Joining</label>
                        <input type="text" name = "Joining" class="form-control" required >
                    </div>                                          
                </div>
                <div class="#">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
    		</form>
		</div>
	</div>
</div>

<!------------------------------ mastering end ------------------------------>
<?= $this->endSection() ?>

