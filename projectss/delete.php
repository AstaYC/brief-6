<?php
   require 'connection.php';
   $id = $_GET['id'] ; 
   $sql = "DELETE FROM project WHERE project_id='$id'";
   $query=mysqli_query($con,$sql);
   if (isset($query)){
     header("location:index.php");
    }
?>