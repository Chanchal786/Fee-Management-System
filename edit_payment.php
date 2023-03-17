<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?> 
<?php include('./constant/connect.php');



$sql="SELECT * from payments where id='".$_GET['id']."'";
$result=$connect->query($sql)->fetch_assoc();



?> 

<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Edit Payment</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Payment</li>
</ol>
</div>
</div>


<div class="container-fluid">




<div class="row">
<div class="col-lg-8" style="    margin-left: 10%;">
<div class="card">
<div class="card-title">

</div>
<div id="add-brand-messages"></div>
<div class="card-body">
<div class="input-states">
<form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/editpayment.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control" value="<?php  echo $result['id'];?>">
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Student Name</label>
<div class="col-sm-9">
     <select class="form-control" name="name" id="name" readonly>
<option readonly  value="<?php echo $result['stud_name'];?>"><?php echo $result['stud_name'];?></option>
<?php 
                        $sql = "SELECT * FROM student,courses where student.course_id = courses.id";
                                $result1 = $connect->query($sql);

                                while($res = $result1->fetch_array()) {


                                   $paid = $connect->query("SELECT sum(amount) as paid FROM payments where stud_id=".$res['st_id'].(isset($id) ? " and id!=$id " : ''));
                                if($paid->num_rows > 0) {
                                $paid =  $paid->fetch_array();
                                $paid = $paid['paid']; 
                             } else {
                              $paid = $res['total_amount'];
                             } 
                              $balance = abs($res['total_amount'] - $paid);
                                        ?>
                                    
                                 <?php   
                                } // while
                                
                        ?>
</select>
</div>
</div>
</div>


<input type="hidden" class="form-control" id="stid"  name="stid" value="<?php echo $result['stud_id'];?>" autocomplete="off" readonly />
<input type="hidden" class="form-control" id="courseid"  name="courseid" autocomplete="off" readonly />




<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Payable Amount</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="payamt" name="payamount" autocomplete="off" value="<?php echo $balance;?>" readonly />
</div>
</div>
</div>
 <div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Paid Amount</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="paidamt"  name="paidamount" value="<?php echo $result['amount'];?>" autocomplete="off"  />
</div>
</div>
</div> 
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Outstanding Balance</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="balance"  name="balance" autocomplete="off" readonly  />
</div>
</div>
</div>






<button type="submit" name="create" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
</form>
</div>
</div>
</div>
</div>

</div>




<?php include('./constant/layout/footer.php');?>
<script type="text/javascript">
$(document).ready(function(){



$("#paidamt").keyup(function(){
var paidamt=$('#paidamt').val();
var payableamt=$('#payamt').val();
var balance =(payableamt - paidamt); 
$('#balance').val(balance); 

});

});



</script> 

