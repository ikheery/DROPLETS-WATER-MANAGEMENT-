 <?php
include('includes/connection.php');
    if (isset($_POST['register'])) {
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $street=$_POST['street'];
    $hnumber=$_POST['hnumber'];
    $username=$_POST['username'];
    $phonenumber=$_POST['phonenumber'];
    $passwordmd5=md5($_POST['password']);
                
       $q ="INSERT INTO `tbl_account`(`firstname`,`middlename`,`lastname`,`email`,`street`, `hnumber`,  `username`, `phonenumber`,`password`) VALUES ( '$firstname','$middlename','$lastname','$email','$street','$hnumber','$username','$phonenumber','$passwordmd5') ";

      $query = mysqli_query($connection,$q);
         if($query){
        ?>  
    <script type="text/javascript">
     alert("Registration Successful");
    </script>
    <?php
    }
    else{
        ?>  
        <script type="text/javascript">
         alert("Registration Fail");
        </script>
        <?php
    }

   } 

?>

 
 <div class="container">
    <div class="jumbotron">
        <h1>welcome In registation form</h1>
    </div>
</div>




<div class="container" >
    <div class="row d-flex justify-content-center" >
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header">Registration Form</div>
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
                                    <input type="text" class="form-control" name="hnumber" id="hnumber" placeholder="enter a your house number" required>
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
                         <button type="submit" name="register"   class="btn btn-primary">Register</button>
                        </div>
                    </form>
                    <hr>
                    <p>I have an Account? <a href="index.php?page=login">login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
     
  
 
