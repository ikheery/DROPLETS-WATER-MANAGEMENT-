<?php
include('includes/connection.php');
 include 'index.php?page=delete';
   $id= $_GET['id'];

   $q ="DELETE FROM `tbl_account` WHERE id = $id ";

   mysqli_query($connection, $q);
 header("Location:index.php?page=adimine");
  
?>
