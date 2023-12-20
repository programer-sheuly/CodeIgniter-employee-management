<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>


<div><h3>Leave List</h3></div>
<div class="table-responsive">
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                         
                        <th>ID</th>
                        <th>Staff Name</th>
                        <th>Photo</th>
                        <th>Department</th>
                        <th>Reason</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Status</th>
                        <th>Description</th>
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
                        <td><?=$row['department']?></td>
                        <td><?=$row['reason']?></td>
                        <td><?=$row['leave_from']?></td>
                        <td><?=$row['leave_to']?></td>
                        <td><?=$row['status']?></td>
                        <td><?=$row['description']?></td>
                        <td>
                           <a href="<?= base_url('editLeave/'.$row['id']) ?>" class="badge badge-primary"><i class="fa fa-pencil"></i></a>
                            <a href="<?= base_url('deleteLeave/'.$row['id']) ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif; ?>
                </tbody>
            </table>
</div>
							
<?= $this->endSection() ?>
