<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect');
$sql = "SELECT *, sum(amount) as paid FROM payments GROUP BY stud_id";
$result = $connect->query($sql);
//echo $sql;exit;
//echo $result;exit;

?>
<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary"> View Student Fees</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">View Student Fees</li>
</ol>
</div>
</div>


<div class="container-fluid">




<div class="card">
<div class="card-body">

<!-- <a href="add_fees.php"><button class="btn btn-primary">Add Fees</button></a> -->

<div class="table-responsive m-t-40">
    <table id="myTable" class="table table-bordered table-striped">
        <thead bgcolor="powderblue">
            <tr>
              <th>#</th>
                <th>Student Id</th>
                <th>Student Name</th>
               
                <th>Payable Fee</th>
                <th>Paid Fee</th>
                <th>Total Balance</th>
                
               <!-- <th>Action</th> -->
            </tr>
       </thead>
       <tbody>
        <?php

foreach ($result as $row) {
$no+=1;


/*$sql1 = "SELECT * FROM courses where id='".$row['stud_course']."'";
$result1 = $connect->query($sql1);
$course = $result1['course'];*/
?>
        <tr>
            <td bgcolor="black"><?php echo$no; ?></td>
            <td bgcolor="black"><?php echo $row['stud_id']; ?></td>
            <td bgcolor="black"><?php echo $row['stud_name'];?></td>
            
            <td bgcolor="black"><?php echo $row['total_fee']; ?></td>
            <td bgcolor="black"><?php echo $row['paid']; ?></td>
            <td bgcolor="black"><?php $fee = $row['total_fee'] - $row['paid']; echo $fee;?></td>
              
          
            <!-- <td>
             <center>
                <a href="view_fees.php?id=<?php //echo $row['id'];?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-eye"></i></button></a>
            </center>
                </td>  -->
        </tr>
      
    </tbody>
   <?php    
}
?>
</table>
</div>
</div>
</div>

<?php include('./constant/layout/footer.php');?>


