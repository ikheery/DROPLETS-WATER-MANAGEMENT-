<?php

include('includes/connection.php');
   
    $q = " SELECT * FROM `tbl_account`";

      $query = mysqli_query($connection,$q);

?>




<div class="container">
    <div class="jumbotron">
        <h1>ADMIN INFORMATION</h1>
        <a type="button" class="btn btn-primary" href="index.php?page=pay">PAYMENT REPORT</a>
    </div>
    <br><br>
</div>
 
<div class="container">
  <div class="row  d-flex justify-content-center"  >
    <div class="col-lg-12">
    
       <h1 class="text-warning text-center">  Table Admin</h1>
        
          <br>
       <table class=" table table-striped table-hover table-bordered">
        
        <tr class="bg-dark text-white text-center">
        <th>Id</th>
          <th>Firstname</th>
          <th>Middle name</th>
          <th>Lastnane</th>
          <th>email</th>
           <th>street</th>
            <th>house number</th>
          <th>phonenumber</th>
            <th>Delete</th>
         

        </tr>

<?php

    include('includes/connection.php');
    
          
          $q = "  SELECT * FROM `tbl_account` ";

         $query = mysqli_query($connection,$q);

         while($res = mysqli_fetch_array( $query)){

?>

        <tr class="text-center">
        
          <td><?php echo $res['id'];  ?></td>
          <td><?php echo $res['firstname'];  ?></td>
          <td><?php echo $res['middlename'];  ?></td>
          <td><?php echo $res['lastname'];  ?></td>
          <td><?php echo $res['email'];  ?></td>
          <td><?php echo $res['street'];  ?></td>
          <td><?php echo $res['hnumber'];  ?></td>
          <td><?php echo $res['phonenumber'];  ?></td>
  
            <td>   <a href="index.php?page=delete" class="btn btn-danger" role="button">Delete</a> </td>
             
        <?php
          }


        ?>
       
       </table>
        <br><br><br>
           <h1 class="text-warning text-center">   customer comment </h1><br>
            <table class=" table table-striped table-hover table-bordered">
        
        <tr class="bg-dark text-white text-center">
          
          <th>Id</th>
          <th>first name</th>
          <th>last name</th>
          <th>phonenumber</th>
          <th>your are comment</th>
          <th>Respond</th>
         

        </tr>

<?php

      include('includes/connection.php');
    
          
          $q = "  SELECT * FROM `tbl_comments` ";

         $query = mysqli_query($connection,$q);

         while($res = mysqli_fetch_array( $query)){

?>

        <tr class="text-center">
          
          <td><?php echo $res['id'];  ?></td>
          <td><?php echo $res['username'];  ?></td>
          <td><?php echo $res['email'];  ?></td>
          <td><?php echo $res['phonenumber'];  ?></td>
          <td><?php echo $res['comment'];  ?></td>
           <td>   <a href="index.php?page=talka" class="btn btn-danger" role="button">chat</a>  </td>
         </tr>

            <?php
          }


        ?>

       </table>
            

     </div>
   </div>

    </div>
    </div>
<?php
 if (isset($_POST['send'])) {
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $comment=$_POST['comment'];
    
        $q = "INSERT INTO `tbl_Acomments`(`username`, `phonenumber`,`comment` ) VALUES ( '$username','$phonenumber','$comment')"; 

      $query = mysqli_query($connection,$q);
         if($query){
        ?>  
    <script type="text/javascript">
     alert("Comment Received");
    </script>
    <?php
    }
    else{
        ?>  
        <script type="text/javascript">
         alert("Comment Fail");
        </script>
        <?php
    }

    }

?>
 




       
        </div>
    </div>
    
</div>
<br><br><br><br><br><br><br><br> 




