 
 <?php

include('includes/connection.php');
  
   
    $q = " SELECT * FROM `tbl_amount`";

      $query = mysqli_query($connection,$q);
      
?>



<div class="container">
    <div class="jumbotron">
        <h1>PAYMENT REPORT</h1>
      <a href="index.php?page=adimine"><button type="button" class="btn btn-primary btn-lg">BACK</button></a>
    </div>
    <br><br>
</div>
 
<div class="image3.jpg">
   <div class="container">
             
    <div class="row  d-flex justify-content-center"  >
    <div class="col-lg-12">
    
       <h1 class="text-warning text-center"> TABLE OF INFORMATION  </h1>
          <br>
       <table class=" table table-striped table-hover table-bordered">
        
        <tr class="bg-dark text-white text-center">
        <th>Id</th>
          <th>Date</th>
           <th>Code number</th>
               <th>Username</th>
           <th>Meter number</th>
               <th>Paid</th>
       <th>Amount Remaining</th>
        </tr>

<?php

     include('includes/connection.php');
    
          
          $q = "  SELECT * FROM `tbl_amount` ";

         $query = mysqli_query($connection,$q);

         while($res = mysqli_fetch_array( $query)){

?>

        <tr class="text-center">
        
          <td><?php echo $res['id'];  ?></td>
          <td><?php echo $res['date'];  ?></td>
          <td><?php echo $res['code'];  ?></td>
           <td><?php echo $res['username'];  ?></td>
          <td><?php echo $res['mnumber'];  ?></td>
           <td><?php echo $res['amopaid'];  ?></td>
              <td><?php echo ($amoreq-$res['amopaid']);  ?></td>
          
        
             
        <?php
          }
        ?>
       
       </table>
         
            

     </div>
   </div>

    </div>
    </div>
 


 

       
        </div>
    </div>
    
</div>
