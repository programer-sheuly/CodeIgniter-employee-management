
<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method ="POST" action="<?= base_url('/addDepartment') ?>">
                <div>
                    <h3>Add Departments</h3>
                </div><br>
                <div>
                    <label for="exampleDataList" class="form-label">Departments Name</label>
                    <input type="text" class="form-control" name="dep_name" id="exampleDataList" placeholder="Type to search..." required>
                </div>
                <div class="col-12 p-3">
                    <button class="btn btn-danger" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection() ?>