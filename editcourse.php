<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?> 
<?php include('./constant/connect.php');



$sql="SELECT * from courses where id='".$_GET['id']."'";
$result=$connect->query($sql)->fetch_assoc();



?> 

<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Edit Course</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Course</li>
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
<form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/editcourse.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control" value="<?php  echo $result['id'];?>">

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Course Name</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="name" placeholder=" Name" name="coursename" autocomplete="off" required="" value="<?php  echo $result['course'];?>" />
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Total Fee</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="name" placeholder=" Name" name="totalfee" autocomplete="off" required="" value="<?php  echo $result['total_amount'];?>" />
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


