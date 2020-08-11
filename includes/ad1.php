<?php
session_start();
include('includes/connection.php');
$firstname="";
$housenumber="";
$email="";
$district="";
$street="";
$middlename="";
$lastname= "";
$username="";
$password="";
$phonenumber="";
$comment="";

if(isset($_COOKIE["username"])){
  $password=$_COOKIE["password"];
  $username=$_COOKIE["username"];
}
if(isset($_POST["adm"])){
  $username=$_POST["username"];
  $password=$_POST["password"];
  
  $query_login="SELECT * FROM tbl_adm WHERE username='$username' AND password='$password'";
  $result_obj=mysqli_query($connection,$query_login);
  if(mysqli_num_rows($result_obj)==1){
  $result_array=mysqli_fetch_array($result_obj);
  $_SESSION["firstname"]=$result_array['firstname'];
  $_SESSION["district"]=$result_array['district'];
  $_SESSION["street"]=$result_array['street'];
  $_SESSION["housenumber"]=$result_array['housenumber'];
  $_SESSION["middlename"]=$result_array['middlename'];
  $_SESSION["phonenumber"]=$result_array['phonenumber'];
  $_SESSION["lastname"]=$result_array['lastname'];
  $_SESSION["username"]=$result_array['username'];
  $_SESSION["email"]=$result_array['email'];
  $_SESSION["comment"]=$result_array['comment'];
  $_SESSION["data"]=$result_array['data'];
   header('location:adimine.php');
  }
    else{
        ?>  
        <script type="text/javascript">
         alert("Incorrect Username Or Password");
        </script>
        <?php

}
}