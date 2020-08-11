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
		<h1>welcome</h1>
	</div>
	 
</div>
<div>
</div>


  <div class="container">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
                         <div class="card">
                <div class="card-header">Talk to us</div>
                   <div class="card-body">
                    <form action="models/login_process.php" method="post" name="loginform" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Enter Username">
                    </div>


                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="enter a valid email">
                    </div>


                     <div class="form-group">
                        <input type="tel" id="phonenumber" class="form-control" name="phonenumber" placeholder="0687323648"
                pattern="[0-9]{4}[0-9]{3}[0-9]{3}"  required />
                <span class="validity"></span>
                    </div>



                    <div class="form-group">
                         <textarea placeholder="Comment Here"></textarea>
                    </div>
 
                    <div class="form-group">
                        <button type="submit" name="send" class="btn btn-primary btn-block">Send</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 order-md-1" style="padding-top: 0px; margin-top: 0px;">
         
           <img src="assets/images/images/images.jpg" alt=" " / width="700px" height="350px" >
        </div>
      </div>