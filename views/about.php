 if (isset($_POST['register'])) {
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $street=$_POST['street'];
    $hnumber=$_POST['hnumber'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phonenumber=$_POST['phonenumber'];

                $passwordmd5=md5($password);
                
       $q ="INSERT INTO `tbl_account`(`firstname`,`middlename`,`lastname`,`email`,`street`, `hnumber`,  `username`, `password`,`phonenumber`) VALUES ( '$firstname','$middlename','$lastname','$email','$street','$hnumber','$username','$passwordmd5','$phonenumber') ";

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