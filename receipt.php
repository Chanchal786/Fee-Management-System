
  <style>
  	
  	@media print {
  #printPageButton {
    display: none;
  }
}
  </style>
                  <?php
                 include('constant/connect.php');

                  $id=$_GET['id'];

                  $sql="SELECT * FROM payments where id=$id";
                  //echo $sql;exit;
                 $result = $connect->query($sql);
                 $row = $result -> fetch_assoc();
                      ?>
                      <table style="width:100%"  border="2" cellspacing="10" cellpadding="5" >
                        <tr>
                          <th colspan="5" style="text-align: center;color: red;font-size: 20px">Payment Receipt</th>
                        </tr>


                        <tr>
                          <th>Name of Student</th>
                          <td><?php  echo $row['stud_name'];?></td>
                          
                        </tr>
                        <tr>
                          
                          <th>Payment Date</th>
                          <td><?php  echo $row['date_created'];?></td>
                        </tr>
                      <tr>
                        <th colspan="1" style="text-align:center;color: blue">Total Fee</th>
                        <td colspan="1" style="text-align: center;"><?php  echo $row['total_fee'];?></td>
                      </tr>

                        <tr>
                          <th style="text-align: center;color: blue" colspan="1">Amount Paid</th>
                          <th style="text-align: center;" colspan="1"><?php  echo $row['amount'];?></th>
                        </tr>
                        
                        
                      <tr>
                        <th colspan="1" style="text-align:center;color: blue">Balance Fee</th>
                        <td colspan="1" style="text-align: center;"><?php  echo $row['total_fee']-$row['amount'];?></td>
                      </tr>
                     

                      

                  </table> 
                 <button id="printPageButton" onClick="window.print();" class="btn btn-xs btn-primary">Print</button>

                
        
      
     