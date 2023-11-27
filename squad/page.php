<?php
  require 'connection.php' ;
  if (isset($_GET['id'])) {
    
    // Update existing record
    
    $squad_name = $_POST['squad_name'];
    $projectId = $_POST['projectId'];

    $id = $_POST['id'];

    $sql = "UPDATE squad SET squad_name = '$squad_name', projectId = '$projectId' WHERE squad_id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:index.php");
        exit;
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
  }

  else{
  
  $squad_name = $_POST['squad_name'];
  $projectId = $_POST['projectId'];

  require 'connection.php' ;
  $requete = "INSERT INTO squad (`squad_name` , `projectId`) VALUES 
              ('$squad_name' , '$projectId')";
  $query = mysqli_query($con,$requete);
    
    if (isset($query)){
      header("location:index.php");
    }
  
  } 
  ?> 