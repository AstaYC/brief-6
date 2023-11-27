<?php
   require 'connection.php';
   $id = $_GET['id'] ; 
   $sql = "DELETE FROM squad WHERE squad_id='$id'";
   $query=mysqli_query($con,$sql);
   if (isset($query)){
     header("location:index.php");
    }
?>