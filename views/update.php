<?php
include('includes/connection.php');
    if (isset($_POST['updat'])) {
      $id = $_GET['id'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $street=$_POST['street'];
    $hnumber=$_POST['hnumber'];
    $username=$_POST['username'];
    $phonenumber=$_POST['phonenumber'];
    $passwordmd5=md5($_POST['password']);
                
       $q ="UPDATE tbl_account SET firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',street='$street',hnumber='$hnumber', username='$username', password='$passwordmd5', phonenumber='$phonenumber' WHERE id='$id'";

      $query = mysqli_query($connection,$q);
      header('location:index.php?page=display');
         if($query){
        ?>  
    <script type="text/javascript">
      header('location:index.php?page=display');
    </script>
    <?php
    }
    else{
        ?>  
        <script type="text/javascript">
         alert("UPDATE Fail");
        </script>
        <?php
    }

   } 

?>




<div class="container">
    <div class="jumbotron">
        <h1>UPDATE INFORMATION</h1>
    
    </div>
    <br><br>
</div>


<div class="container">
    <div class="row  d-flex justify-content-center"  >
    <div class="col-lg-12">
    
       <h1 class="text-warning text-center">   CHECK YOUR INFOMATION CLEAR </h1>
          <br>
       
             <br><br><br> 
       <div class="container" >
    <div class="row  d-flex justify-content-center"  >
        <div class="col-md-8">
            <div class="card" >
                 
                <div class="card-body" >
                   <form action="" method="post" role="form" onsubmit="return formvalidate();">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="middlename">Middle Name</label>
                                    <input type="text" class="form-control" name="middlename" id="middlename">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname">
                                </div>
                            </div>
                        </div>
                         
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="enter a valid E-mail" required>
                                </div>
                            </div>                       
                        <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="street">street</label>
                                    <input type="text" class="form-control" name="street" id="street" placeholder="enter a your street" required>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hnumber">house number</label>
                                    <input type="number" class="form-control" name="hnumber" id="hnumber" placeholder="enter a your house number" required>
                                </div>
                        </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" required>
                                </div>
                            </div>
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title="Must contain at least one number and one uppercase and lowercase letter, and at less than 7 or equeal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cpassword">Re-Enter Password</label>
                                    <input type="password" class="form-control" name="re_password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title="Must contain at least one number and one uppercase and lowercase letter, and at less than 7 or equeal">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phonenumber">Phone Number</label>
                                    <input type="tel" id="phonenumber" class="form-control" name="phonenumber" placeholder="0687323648"
                                pattern="[0-9]{4}[0-9]{3}[0-9]{3}"  required />
                                <span class="validity"></span>
                                </div>
                           
                        </div>
                        </div>
                        <div class="form-group">
                           <button type="submit" name="updat"   class="btn btn-primary">UPDATE</button> 
                        </div>
                    </form>
                    <hr>
          
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<br><br> 
     </div>
   </div>

    </div>