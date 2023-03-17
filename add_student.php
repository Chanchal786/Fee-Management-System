<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>  


<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Add Student</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Add Student</li>
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
<form class="form-horizontal" method="POST"  id="submitProductForm" action="php_action/createclient.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="currnt_date" class="form-control">


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label"> Name</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="name" placeholder=" Name" name="name" autocomplete="off" required="" />
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
                                $result = $connect->query($sql);

                                while($row = $result->fetch_array()) {
                                    echo "<option value='".$row['id']."'>".$row['course']."</option>";
                                } // while
                                
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
                <option value="">SELECT</option>
                <option value="Semester">Semester</option>
                <option value="Yearly">Yearly</option>
              </select>
            </div>
    </div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label"> Username</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="idno" placeholder=" Username" name="username" autocomplete="off" required="" />
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label"> Password</label>
<div class="col-sm-9">
<input type="password" class="form-control" id="idno" placeholder=" Password" name="password"  autocomplete="off" required="" />
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label"> Contact</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="name" placeholder=" Contact" name="mob_no" maxlength="10" autocomplete="off" required="" />
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Email</label>
<div class="col-sm-9">
<input type="email" class="form-control" id="" placeholder="Email" name="email" autocomplete="off" required="" />

</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Address</label>
<div class="col-sm-9">
<textarea type="text" class="form-control" id="" placeholder="" name="address" autocomplete="off" required="" style="height: 150px;"></textarea>

</div>
</div>
</div>


<button type="submit" name="create" id="" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
</div>
</div>
</div>
</div>

</div>




<?php include('./constant/layout/footer.php');?>


