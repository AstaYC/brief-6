<?php
  require 'connection.php' ;
  if (isset($_GET['id'])) {
    
    // Update existing record
    
    $category_name = $_POST['category_name'];

    $id = $_POST['id'];

    $sql = "UPDATE category SET category_name = '$ressource_name' WHERE category_id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:index.php");
        exit;
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
  }

  else{
  
    $category_name = $_POST['category_name'];

  require 'connection.php' ;
  $requete = "INSERT INTO category (`category_name`) VALUES 
              ('$category_name')";
  $query = mysqli_query($con,$requete);
    
    if (isset($query)){
      header("location:index.php");
    }
  
  } 
  ?> 