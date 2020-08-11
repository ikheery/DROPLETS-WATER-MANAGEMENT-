  <?php
include('includes/connection.php');
    
    if (isset($_POST['send'])) {
    
   /* $username=$_POST['username'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];*/
    $reply=$_POST['reply'];
    
        $q ="UPDATE tbl_comments SET reply='$reply'";

      $query = mysqli_query($connection,$q);
         if($query){
        ?>  
    <script type="text/javascript">
     alert("Reply Received");
    </script>
    <?php
    }
    else{
        ?>  
        <script type="text/javascript">
         alert("Reply Fail");
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
                <div class="card-header">Reply To user</div>
                <div class="card-body">
                    <form action="" method="post" name="loginform" role="form">
                    


                    <div class="form-group">
                         <textarea name="reply" placeholder="reply  Here" required></textarea>
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



