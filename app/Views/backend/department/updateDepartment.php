<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

  <div class="container">
    <div class="row">
        <div class="content col-12">
           <h1>Update Department:</h1>
            <form method="POST" action="<?= base_url('updateUser/').$department['dep_id'] ?>">
                <div class="form-group">
                    <label for="text">Name:</label>
                    <input type="text" name="dep_name" id="text" required value="<?= $department['dep_name'] ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

           </form>
        </div>
    </div>
  </div>
  <?= $this->endSection() ?>

