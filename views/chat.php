  <h1 class="text-warning text-center">   </h1><br>
<br><br><br>
            <table class=" table table-striped table-hover table-bordered">
        
        <tr class="bg-dark text-white text-center">
          
          
          <th>COMMENTS </th>
          <th>REPLYS</th>
         

        </tr>

<?php
     $count = 1;
      include('includes/connection.php');
    
          
          $q = "  SELECT * FROM `tbl_comments` ";

         $query = mysqli_query($connection,$q);

         while($res = mysqli_fetch_array( $query)){

?>

        <tr class="text-center">
          
         
         
          <td><?php echo $res['comment'];  ?></td>
          <td><?php echo $res['reply'];  ?></td>
           
         </tr>

            <?php
       break;
          }


        ?>

       </table>
