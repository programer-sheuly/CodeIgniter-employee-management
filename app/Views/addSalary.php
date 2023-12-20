<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div><h3>Salary</h3></div><br>
<label for="exampleDataList" class="form-label">Add Salary</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
    <datalist id="datalistOptions">
    <option value="Manager">
    <option value="Senior Manager">
    <option value="Backend Developer">
    <option value="Fontend Developer">
    <option value="Php Developer">
    <option value="Wordpress Developer">
    </datalist>


    <div class="col-12 p-3">
        <button class="btn btn-danger" type="submit">Submit form</button>
    </div>

</div>
</div>




<?= $this->endSection() ?>