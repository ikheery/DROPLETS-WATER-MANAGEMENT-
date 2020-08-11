  <?php
include('includes/connection.php');
    
    if (isset($_POST['send'])) {
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $comment=$_POST['comment'];
    
        $q = "INSERT INTO `tbl_comments`(`username`,`email`, `phonenumber`,`comment`,`reply` ) VALUES ( '$username','$email','$phonenumber','$comment','')"; 

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



<br><br>
<div class="container">
    <h1>Droplets Water Management System</h1><br>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8" >

 
</div>
<div class="col-md-4">
            <div class="card">
                <div class="card-header">Talk to us</div>
                <div class="card-body">
                    <form action="" method="post" name="loginform" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                    </div>


                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="enter a valid email" required>
                    </div>


                    <div class="form-group">
                        <input type="Number" class="form-control" name="phonenumber" placeholder="enter your phone Number" required>
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
    </div>
</div>
<br><br>


