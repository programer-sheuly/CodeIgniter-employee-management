
<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      <?php if ($sheuly) : ?>
        <?php foreach($sheuly as $row):?>
          <tr>
            <td><?=$row['dep_id'] ?></td>
            <td><?=$row['dep_name'] ?></td>
            <td>
              <a href="<?= base_url('edituser/').$row['dep_id']?>" class="badge badge-primary">Edit</a>
              <a href="<?= base_url('deleteuser/').$row['dep_id']?>" class="badge badge-danger">Delete</a>
            </td> 
          </tr>
        <?php endforeach ?>
        <?php endif; ?>
    
  </tbody>
</table>
<?= $this->endSection() ?>