<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect');
$sql = "SELECT * FROM student,courses where student.course_id = courses.id";
$result = $connect->query($sql);
//echo $sql;exit;

?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Students</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Students</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add_student.php"><button class="btn btn-primary">Add Students</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead bgcolor="powderblue">
                                            <tr>
                                              <th>#</th>
                                                <th> Name</th>
                                                <th> Course</th>
                                                <th>Pattern</th>
                                                <th>Mobile NO</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
foreach ($result as $row) {
    $no+=1;
    ?>
                                        <tr>
                                            <td bgcolor="black"><?php echo$no; ?></td>
                                            <td bgcolor="black"><?php echo $row['name']; ?></td>
                                            <td bgcolor="black"><?php echo $row['course'] ?></td>
                                            <td bgcolor="black"><?php echo $row['pattern'] ?></td>
                                              <td bgcolor="black"><?php echo $row['contact'] ?></td>
                                            
                                            <td bgcolor="black"><?php echo $row['address'] ?></td>
                                          
                                            <td bgcolor="black">
            
                                                <a href="editstudent.php?id=<?php echo $row['st_id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                              

             
                                                <a href="php_action/removestudent.php?id=<?php echo $row['st_id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
                                           
                                                
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


