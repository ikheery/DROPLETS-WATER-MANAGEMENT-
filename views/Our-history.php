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
        <h1>Welcome to Droplets water management</h1>
    </div>
    
</div>
<div class="container" style="background-color: white; width: 1200px;">
<h1 style="color: blue"></h1>
 
 
    <div class="row">
    
  <div class="col-md-4" style="letter-spacing:3px;font-family: Comic Sans MS;">
  
<em> The Droplets water management system was the idea that
 arised due to scarcity of water in different places 
 around Tanzania, poor sewage management that led to enviromental pollution
  and made the enviroment uncomfortable to reside.
  <br /><br />
  Due to the problems listed above, the citizens of Tanzania with the help of the government created a system that manages the 
  supply of water and the maintainance of sewage water so as to reduce the problems facing the citizens of Dar Es salaam.
 
  </em>
  </div>
  <div class="col-md-4" style="letter-spacing:3px;font-family: Comic Sans MS;">
  <em>
Which is why our mission is and has always been pursuing the ensurance of reliable provission of affodarable, 
 and sustainable water and sanitation servicers to all residents of Dar Es Salaam.
<br /><br /><br />
And our vision to be a model water and sanitation services company in Tanzania. 
<br />
Which is why our slogan is "Quality water for All Always</em>
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
    </div>


