<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>


<div><h3>Salary List</h3></div>
<div class="table-responsive">
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                         
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Department</th>
                        <th>basic_salary</th>
                        <th>allowance</th>
                        <th>total_salary</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($sheuly) : ?>
                <?php foreach($sheuly as $row): ?>
                    <tr>
                     
                        <td><?=$row['id']?></td>
                        <td><?=$row['employee_name']?></td>
                        <td><?=$row['department']?></td>
                        <td><?=$row['basic_salary']?></td>
                        <td><?=$row['allowance']?></td>
                        <td><?=$row['total_salary']?></td>
                        <td><img src="<?= base_url('uploads/img/'.$row['image']) ?>" width="40"  alt=""></td>
                        <td>
                           <a href="<?= base_url('editSalary/'.$row['id']) ?>" class="badge badge-primary"><i class="fa fa-pencil"></i></a>
                            <a href="<?= base_url('deleteSalary/'.$row['id']) ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                            <a href="<?= base_url('book-print/'.$row['id']) ?>" class="badge bg-warning text-dark"><i class="fa fa-paint-brush"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif; ?>
                </tbody>
            </table>
</div>
							
<?= $this->endSection() ?>
