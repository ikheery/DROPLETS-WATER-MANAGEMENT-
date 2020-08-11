 
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
$mnumber = "";
$amopaid = "";
$amoreq = 30000;


if(isset($_COOKIE["username"])){
  $password=$_COOKIE["password"];
  $username=$_COOKIE["username"];
}
if(isset($_POST["login"])){
  $username=$_POST["username"];
  $password=md5($_POST["password"]);
  
  $query_login="SELECT * FROM tbl_account WHERE username='$username' AND password='$password'";
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
   header('location:index.php?page=dash');
  }
    else{
        ?>  
        <script type="text/javascript">
         alert("Incorrect Username Or Password");
        </script>
        <?php

}
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DROPLETS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/vendors/bootstrap-v4.1.3/css/bootstrap.css">
   <link href="demo/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
  <script src="demo/themes/1/js-image-slider.js" type="text/javascript"></script>
  <link href="demo/generic.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <script type="text/javascript" src="assets/js/java.js"></script>
</head>
<body style="background: url(assets/images/images/.jpg) no-repeat;
  background-size: cover; height: 940px" >

<div class="container">

  <img class="col-md-12" src="assets/banner/bana.jpg" width="1110">
  <div class="img">
          <center><ul>
                    <li><a href="index.php?page=home" >Home</a></li>
                    <li><a href="index.php?page=home">About us</a>
                    <ul>
                    <li><a href="index.php?page=Our-history">Our history</a></li>
                    <li><a href="index.php?page=Management">Management</a></li>
                    
                   </ul>
                   </li>
                   <li><a href="index.php?page=home">Our Services</a>
                  <ul>
                  <li><a href="index.php?page=Water_connection">Water Connection</a></li>
                  <li><a href="index.php?page=Sewage">Sewage Services</a></li>
                  </ul>
                  </li>
                   <li><a href="index.php?page=home">Payments</a>
                  <ul>
                  <li><a href="index.php?page=Pay-mpesa">How to Pay</a></li>
                  
                </ul>
                    </li>
               <li><a href="index.php?page=Contact">Contact us</a></li>
                
                 </ul>
            </center>
          </div>
 
      </div>
   
   

 






