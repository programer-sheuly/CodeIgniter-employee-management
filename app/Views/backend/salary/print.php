<!------------------------------ mastering start ------------------------------>

<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>


<!-------------------------------- print table start ---------------------------------->

<div class="d-flex">
   <div class="col-md-2 mt-4 p-5"></div>
   <div class="col-md-10 mt-4 p-5">
            <div id="data">
                <h1 class="text-center p-3 mb-2 bg-primary text-white">Salary Table</h1>
                <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                    }
                ?>
                <div class="">
                    <table class="table " style="border-color:white;" >
                        <tr>
                            <td style="width:25%" >Id:</td>
                            <td style="width:75%" ><?php echo $book['id']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Employee Name:</td>
                            <td style="width:75%" ><?php echo $book['employee_name']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Department:</td>
                            <td style="width:75%" ><?php echo $book['department']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Basic_salary:</td>
                            <td style="width:75%" ><?php echo $book['basic_salary']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Allowance:</td>
                            <td style="width:75%" ><?php echo $book['allowance']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Total_salary:</td>
                            <td style="width:75%" ><?php echo $book['total_salary']; ?></td>
                        </tr>
                        
                    </table>
                </div>

                <div>
                    <table class="table table-bordered" id="book-list">
                        <tr class="border">
                            <th>Id:</th>
                            <th>Employee Name:</th>
                            <th>Email:</th>
                            <th>Department Name:</th>
                            <th>Total_salary:</th>
                            <th>Payment Status:</th>
                        </tr>
                    
                        <tr class="border">
                            <td><?php echo $book['id']; ?></td>
                            <td><?php echo $book['employee_name']; ?></td>
                            <td><?php echo $book['department']; ?></td>
                            <td><?php echo $book['basic_salary']; ?></td>
                            <td><?php echo $book['total_salary']; ?></td>
                           
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-end ">  
                <div>
                    <a href="" class=" btn btn-success mx-2" onclick="printpage()">Pament Successful</a> 
                    <!-- <a href="<?= base_url()?>dashboard/all_student"class=" btn btn-primary mx-2 "> All Student</a> 
                    <a href="<?= base_url()?>dashboard/all_payment"class=" btn btn-primary mx-2">All Payment</a> -->
                </div>
            </div>
        </div>
    </div> 
    
    


<script>
     function printpage(){
            var body = document.getElementById('body').innerHTML;
            var data = document.getElementById('data').innerHTML;
            document.getElementById('body').innerHTML=data;
            window.print();
            document.getElementById('body').innerHTML=body;
        }
</script>







<!------------------------------ mastering end ------------------------------>
<?= $this->endSection() ?>
