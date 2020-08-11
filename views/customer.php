 
<?php

include('includes/connection.php');
    
   
    $q = " SELECT * FROM `tbl_account`";

      $query = mysqli_query($connection,$q);

?>
<div class="container">
    <div class="jumbotron">
        <h1><?php
 
//session_start();
$firstname="";
$lastname="";
if(isset($_SESSION["firstname"])){
$firstname=$_SESSION["firstname"];
$lastname=$_SESSION["lastname"];
$data = $_SESSION["data"];
}

?>
<h1><i><?php echo  "Welcome"." ".$firstname." ".$lastname;?></i></h1></h1><br>
                <h1>
                 DROPLETS WATERMANAGEMENT SYSTEM: 
                </h1>
    </div>
 
</div>
<div class="container">
 
                
    <div class="row  d-flex justify-content-center"  >
    <div class="col-lg-12">
    
       <h1 class="text-warning text-center">Customer infomation</h1>
          <br>
       <table class=" table table-striped table-hover table-bordered">
       	
       	<tr class="bg-dark text-white text-center">
       	<th>Id</th>
          <th>Firstname</th>
          <th>Middle name</th>
          <th>Lastnane</th>
          <th>email</th>
          <th>phonenumber</th>
       		<th></th>
       	 

       	</tr>

<?php

     include('includes/connection.php');
    
    
          
          $q = "  SELECT * FROM `tbl_account` WHERE firstname=$firstname AND lastname=$lastname";

         $query = mysqli_query($connection,$q);

         while($res = mysqli_fetch_array( $query)){

?>

       	<tr class="text-center">
       	
          <td><?php echo $res['id'];  ?></td>
          <td><?php echo $res['firstname'];  ?></td>
          <td><?php echo $res['middlename'];  ?></td>
          <td><?php echo $res['lastname'];  ?></td>
          <td><?php echo $res['email'];  ?></td>
          <td><?php echo $res['phonenumber'];  ?></td>
  
       		<td>   <a href="delete.php?id=<?php echo $res['id']; ?>" class=" " role="button">Payed</a> </td>
       		 
       	<?php
          }


       	?>
       </tr>
       </table>
     </div>


