<?php
  require 'connection.php' ;
  if (isset($_GET['id'])) {
    
    // Update existing record
    
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $squadId = $_POST['squadId'];
    $role = $_POST['role'];
    $id = $_POST['id'];
    
    $sql = "UPDATE utilisateur SET username = '$username', useremail = '$useremail', squadId = '$squadId', `role` = '$role' WHERE userId = '$id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        header("location:index.php");
        exit;
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
  }

  else{
  
  $username = $_POST['username'];
  $useremail = $_POST['useremail'];
  $squadId = $_POST['squadId'];
  $role = $_POST['role'];
  require 'connection.php' ;
  $requete = "INSERT INTO utilisateur (`username` , `useremail` , `squadId` , `role`) VALUES 
              ('$username' , '$useremail' , '$squadId' , '$role')";
  $query = mysqli_query($con,$requete);
    
    if (isset($query)){
      header("location:index.php");
    }
  
  } 
  ?> 