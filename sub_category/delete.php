<?php
   require 'connection.php';
   $id = $_GET['id'] ; 
   $sql = "DELETE FROM sub_category WHERE sub_category_id='$id'";
   $query=mysqli_query($con,$sql);
   if (isset($query)){
     header("location:index.php");
    }
?>