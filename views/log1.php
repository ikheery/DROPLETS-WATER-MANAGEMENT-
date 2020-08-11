<?php
include('includes/connection.php');
 $username=$_POST['username'];
  $password=md5($_POST['password']);
  
  if( $username & &$password){
  	   

        $query="SELECT * FROM tbl_account "
        $numrows=mysql_num_rows($query);
         header('location:index.php?page=dash');
  }
   else{
    echo "Incorrect Username Or Password";
  }
?>