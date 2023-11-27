<?php
   require 'connection.php';
   $id = $_GET['id'] ; 
   $sql = "DELETE FROM category WHERE category_id='$id'";
   $query=mysqli_query($con,$sql);
   if (isset($query)){
     header("location:index.php");
    }
?>