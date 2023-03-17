<?php error_reporting(1); ?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php 

$sql = "SELECT * FROM student";
$query = $connect->query($sql);
$countProduct = $query->num_rows;

$orderSql = "SELECT * FROM  courses";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;





//$connect->close();

?>
  
<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
        
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                   </div>
                
            </div>
            
            
            <div class="container-fluid">
                
                
        

                      <div class="row">
                        
                    <div class="col-md-6 dashboard">
                        <div class="card" style="background: #2BC155">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-user f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                 
                            
                                    <h2 class="color-white"><?php echo $countProduct; ?></h2>
                                    <a href="student.php"><p class="m-b-0">Total students</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-6 dashboard">
                        <div class="card" style="background:#A02CFA ">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-book f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        


                            
                                    <h2 class="color-white"><?php echo $countOrder; ?></h2>
                                     <a href="courses.php"><p class="m-b-0">Total Courses</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }?>
                   
                </div>  
             
        


    <?php include('./constant/connect');
    
$sql = "SELECT * FROM payments order by date_created desc";
$result = $connect->query($sql);
//echo $sql;exit;
//echo $result;exit;


//echo $sql;exit;
//echo $result;exit;

?>

        <?php

foreach ($result as $row) {
$no+=1;


/*$sql1 = "SELECT * FROM courses where id='".$row['stud_course']."'";
$result1 = $connect->query($sql1);
$course = $result1['course'];*/
?>
        <tr>
            <!-- <td><?php echo$no; ?></td>
            <td><?php echo $row['date_created']; ?></td>
            <td><?php echo $row['stud_id']; ?></td>
            <td><?php echo $row['stud_name'];?></td>
            
            
            <td><?php echo $row['amount']; ?></td>
             -->
              
          
            <!-- <td>

                <a href=""><button type="button" class="btn btn-xs btn-primary" >Print</button></a>
            
                </td> -->
        </tr>
      
    </tbody>
   <?php    
}
?>
</table>
</div>
</div>
    </div>
    </div>



            
            <?php include ('./constant/layout/footer.php');?>
        <script>
        $(function(){
            $(".preloader").fadeOut();
        })
        </script>