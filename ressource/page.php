<?php
  require 'connection.php' ;
  if (isset($_GET['id'])) {
    
    // Update existing record
    
    $ressource_name = $_POST['ressource_name'];
    $sub_categoryID = $_POST['sub_categoryID'];

    $id = $_POST['id'];

    $sql = "UPDATE ressource SET ressource_name = '$ressource_name', sub_categoryID = '$sub_categoryID' WHERE ressource_id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:index.php");
        exit;
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
  }

  else{
  
    $ressource_name = $_POST['ressource_name'];
    $sub_categoryID = $_POST['sub_categoryID'];

  require 'connection.php' ;
  $requete = "INSERT INTO ressource (`ressource_name` , `sub_categoryID`) VALUES 
              ('$ressource_name' , '$sub_categoryID')";
  $query = mysqli_query($con,$requete);
    
    if (isset($query)){
      header("location:index.php");
    }
  
  } 
  ?> 