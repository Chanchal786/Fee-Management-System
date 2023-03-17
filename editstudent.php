<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?> 
<?php include('./constant/connect.php');



$sql="SELECT * from student where st_id='".$_GET['id']."'";
$result=$connect->query($sql)->fetch_assoc();



?> 

<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Edit Student</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Edit Student</li>
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
<form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/editstudent.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control" value="<?php  echo $result['id'];?>">

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Student Name</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="name" placeholder=" Name" name="name" autocomplete="off" required="" value="<?php  echo $result['name'];?>" />
</div>
</div>
</div>


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Course</label>
<div class="col-sm-9">
     <select class="form-control" id="categoriesStatus" name="course">
<option value="">SELECT</option>
<?php 
                        $sql = "SELECT * FROM courses";
                                

                                $result1 = $connect->query($sql);

                                while($row = $result1->fetch_assoc()) {?>
                                    <option value="<?php echo $row['id'];?>"<?php if($row['id'] == $result['course_id']) {
                  echo "selected";
                } ?> ><?php echo $row['course'];?></option>
                               <?php } // while
                                
                        ?>
                                
                        
</select>
</div>
</div>
</div>

 <div class="form-group">
    <div class="row">
        <label class="col-sm-3 control-label">Pattern</label>
            <div class="col-sm-9">
               <select class="form-control" id="productStatus" name="pattern">
                
                 <option <?php if($result['pattern']=='Semester'){ ?> selected="selected" <?php }?> value='Semester' >
        Semester
        </option>
        <option <?php if($result['pattern']=='Yearly'){ ?> selected="selected" <?php }?> value='Yearly' >
        Yearly
        </option> 
              </select>
            </div>
    </div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label"> Username</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="idno" value="<?php echo $result['username']; ?>" name="username" autocomplete="off" required="" />
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label"> Password</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="idno" value="<?php echo $result['password']; ?>" name="password" autocomplete="off" required="" />
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label"> Contact</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="name" value="<?php echo $result['contact']; ?>" name="mob_no" autocomplete="off" required="" />
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Email</label>
<div class="col-sm-9">
<input type="email" class="form-control" id="" value="<?php echo $result['email']; ?>" name="email" autocomplete="off" required="" />

</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Address</label>
<div class="col-sm-9">
<textarea type="text" class="form-control" id="" placeholder="" name="address" autocomplete="off" required="" style="height: 150px;"><?php echo $result['address']; ?></textarea>

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


