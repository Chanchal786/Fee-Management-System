<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect');
$sql = "SELECT * FROM payments order by date_created desc";
$result = $connect->query($sql);
//echo $sql;exit;
//echo $result;exit;

?>
<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary"> View Payment List</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">View Payment List</li>
</ol>
</div>
</div>


<div class="container-fluid">




<div class="card">
<div class="card-body">

<a href="add_payment.php"><button class="btn btn-primary">Add Payment</button></a>

<div class="table-responsive m-t-40">
    <table id="myTable" class="table table-bordered table-striped">
        <thead bgcolor="powderblue">
            <tr>
              <th>#</th>
              <th>Date</th>
                <th>Student Id</th>
                <th>Student Name</th>
                
            <th>Paid Amount</th>
                
                
                <th>Action</th>
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
            <td bgcolor="black"><?php echo $row['date_created']; ?></td>
            <td bgcolor="black"><?php echo $row['stud_id']; ?></td>
            <td bgcolor="black"><?php echo $row['stud_name'];?></td>
            <td bgcolor="black"><?php echo $row['amount']; ?></td>
           
              
          
            <td bgcolor="black">
                <a href="receipt.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-eye"></i></button></a>

                <a href="edit_payment.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
              


                <a href="php_action/remove_payment.php?id=<?php echo $row['id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
           
                
                </td>
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


