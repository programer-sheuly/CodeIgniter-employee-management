<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>


<div><h3>Staff List</h3></div>
<div class="table-responsive">
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                         
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Address</th>
                        <th>Joining</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($sheuly) : ?>
                <?php foreach($sheuly as $row): ?>
                    <tr>
                     
                        <td><?=$row['id']?></td>
                        <td><?=$row['name']?></td>
                        <td><img src="<?= base_url('uploads/img/'.$row['image']) ?>" width="40"  alt=""></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['department']?></td>
                        <td><?=$row['address']?></td>
                        <td><?=$row['Joining']?></td>
                        <td>
                           <a href="<?= base_url('editstaff/'.$row['id']) ?>" class="badge badge-primary"><i class="fa fa-pencil"></i></a>
                            <a href="<?= base_url('delete_staff/'.$row['id']) ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif; ?>
                </tbody>
            </table>
</div>
							
<?= $this->endSection() ?>
