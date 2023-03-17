<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Add Payment</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Add Payment</li>
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
<form class="form-horizontal" method="POST"  id="submitProductForm" action="php_action/create_payment.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="currnt_date" class="form-control">

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Student Name</label>
<div class="col-sm-9">
     <select class="form-control" name="name" id="name">
<option value="">~~SELECT~~</option>
<?php 
                        $sql = "SELECT * FROM student,courses where student.course_id = courses.id";
                                $result = $connect->query($sql);

                                while($res = $result->fetch_array()) {


                                   $paid = $connect->query("SELECT sum(amount) as paid FROM payments where stud_id=".$res['st_id'].(isset($id) ? " and id!=$id " : ''));
                                if($paid->num_rows > 0) {
                                $paid =  $paid->fetch_array();
                                $paid = $paid['paid']; 
                             } else {
                              $paid = $res['total_amount'];
                             } 
                              $balance = abs($res['total_amount'] - $paid);
                                        ?>
                                    <option value="<?php echo $res['name'];?>" data-id="<?php echo $res['st_id']?>" 
                              data-courseid="<?php echo $res['course_id']?>"
                              data-course="<?php echo $res['course']?>"
                              data-coursefee="<?php echo $res['total_amount']?>"
                              data-fees="<?php echo$balance;?>" >
                            <?php echo $res['name']; ?>
                            </option>
                                 <?php   
                                } // while
                                
                        ?>
</select>
</div>
</div>
</div>


<input type="hidden" class="form-control" id="stid"  name="stid" autocomplete="off" readonly />
<input type="hidden" class="form-control" id="courseid"  name="courseid" autocomplete="off" readonly />


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Course Name</label>
<div class="col-sm-9">


<input type="text" class="form-control" id="coursename"  name="coursename" autocomplete="off" readonly />


</div>
</div>
</div>
<input type="hidden" class="form-control" id="coursefee"  name="coursefee" value="<?php echo $res['total_amount'];?>" readonly />

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Payable Amount</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="payamt" name="payamount" autocomplete="off" readonly />
</div>
</div>
</div>
 <div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Paid Amount</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="paidamt"  name="paidamount" autocomplete="off"  />
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







<button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
</div>
</div>
</div>
</div>

</div>




<?php include('./constant/layout/footer.php');?>

<script type="text/javascript">
$(document).ready(function(){
$("#name").change(function(){
var sid=$('#name').find(":selected").attr('data-id');
//alert(parking);
$('#stid').val(sid);
});

$("#name").change(function(){
var courseid=$('#name').find(":selected").attr('data-courseid');
$('#courseid').val(courseid);
});
$("#name").change(function(){
var course=$('#name').find(":selected").attr('data-course');
$('#coursename').val(course);
});
$("#name").change(function(){
var coursefee=$('#name').find(":selected").attr('data-coursefee');
$('#coursefee').val(coursefee);
});

$("#name").change(function(){
var payamt=$('#name').find(":selected").attr('data-fees');
$('#payamt').val(payamt);
});


$("#paidamt").keyup(function(){
var paidamt=$('#paidamt').val();
var payableamt=$('#payamt').val();
var balance =(payableamt - paidamt); 
$('#balance').val(balance); 

});

});



</script> 
