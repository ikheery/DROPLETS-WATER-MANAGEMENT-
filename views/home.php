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
       <h1 style="color: pink;"><?php
             
           //  $username="";
          ///if (isset($_SESSION["username"])) {
           //        echo("<br>"); 
          //         $username=$_SESSION["username"];
          // echo "login As"." ".$username;}?> </h1>
        
        <h1>Droplets Water Management system and supply</h1> 
        <a type="button" class="btn btn-primary" href="index.php?page=log">Login</a>

<br>
  <div id="row" style="margin-top:0.8em;margin-bottom:-0.1em">
    <div style="float:left">Droplets water management system was the idea that
 arised due to scarcity of water in different places 
 around Tanzania, poor sewage management that led to enviromental pollution
  and made the enviroment uncomfortable to reside.</div><br>
<br>
   
     <div style="float:right">Due to the problems listed above, the citizens of Tanzania with the help of the government created a system that manages the 
  supply of water and the maintainance of sewage water so as to reduce the problems facing the citizens of Dar Es salaam.</div>


    </div>

         </div>
 
       <br><br>
   
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
                        <input type="tel" id="phonenumber" class="form-control" name="phonenumber" placeholder="0687323648"
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

        <div class="col-md-4 order-md-1">
        
    
      <h1><b>Mission</b></h1>
      <p>We pursue this mission by ensuring provission of quality, affodarable, reliable, portable and sustainable water and sanitation servicers to all residents of Tanzania.</p><br>
       
    
      <h3><b>Vision</b></h3>
      <p>To be a model water and sanitation services company in Tanzania</p>
    
    
      <h3><b>Our Slogan</b></h3>        
      <p>"Get Quality water for All Always"</p>
     
    </div>
  
  <div class="col-md-4 order-md-1">
      <img src="assets/images/save.gif" width="360" height="330">
     
    </div>
        </div>
<div class="col-md-4 order-md-1">
      
     
    </div>
    </div> 

    </div>
</div>









