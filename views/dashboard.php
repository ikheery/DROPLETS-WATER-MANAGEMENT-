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
                 DROPLETS WATER MANAGEMENT SYSTEM: 
                </h1>
	</div>
	
</div>

  
</div>

    <div class="container"  >
       <div class="row">

           <div class="col-md-4 order-md-2 mb-4">
                         <div class="card">
                <div class="card-header">Talk to us</div>
                   <div class="card-body">
                    <form action=" " method="post" name="loginform" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                    </div>


                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="enter a valid email" required>
                    </div>


                    <div class="form-group">
                        <input type="tel" id="phonenumber" class="form-control" name="phonenumber" placeholder="0757463345"
                pattern="[0-9]{4}[0-9]{3}[0-9]{3}"  required />
                <span class="validity"></span>
                    </div>



                    <div class="form-group">
                         <textarea name="comment" placeholder="Comment Here" required></textarea>
                    </div>
 
                    <div class="form-group">
                        <button type="submit" name="send" class="btn btn-primary btn-block">Send</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <img src="assets/images/tap4.PNG"> 
    </div>
           <div class="col-md-4">

<a href="index.php?page=chat"><button type="button" class="btn btn-primary btn-lg btn-block">Replys</button></a><br>

             <a href="index.php?page=pay1"><button type="button" class="btn btn-primary btn-lg btn-block">PAY WITH DROPLETS</button></a><br>
            
             <a href="dowamas/display.php"><button type="button" class="btn btn-primary btn-lg btn-block">CUSTORMER INFORMATION</button></a><br>
             <a href="index.php?page=home.php"><button type="button" class="btn btn-primary btn-lg">log out</button></a>



         
    </div>
</div> 
          
        </div>
      </div>
      </div>
    

 
    </div>




