<?php
   require 'connection.php';
   $id = $_GET['id'] ; 
   $sql = "DELETE FROM utilisateur WHERE userId='$id'";
   $query=mysqli_query($con,$sql);
   if (isset($query)){
     header("location:index.php");
    }
?>