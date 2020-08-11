   <?php
include('includes/connection.php');
    
    if (isset($_POST['send'])) {
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $comment=$_POST['comment'];
    
        $q = "INSERT INTO `tbl_comments`( `username`, `email`, `phonenumber`, `comment`) VALUES ( '$username','$email','$phonenumber','$comment')"; 

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

<div class="container">
    <div class="jumbotron">
        <h1 style="color: blue">Welcome to Droplets water Management Contact Service</h1>
    </div>
    
</div>
  
<div class="container">
  <div class="row">
    <div class="col-md-8" >

<p>For all equiries,feedback or complaints</p>
<p>Contact us using the contacts provided below or fill in the form</p>
<p>Address: P.O.BOX </p>
<p>Droplets Water Management System</p>
 

<p>Mobile:0757660790</p>
<p>Email:ikheery@gmail.com</p>
    
 
</div>
<div class="col-md-4" >
<img src="assets/images/water.jpg" width="350" height="300">
    </div>
 
    </div>
</div>
<br><br>




