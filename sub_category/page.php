<?php
  require 'connection.php' ;
  if (isset($_GET['id'])) {
    
    // Update existing record
    
    $sub_category_name = $_POST['sub_category_name'];
    $CategoryID = $_POST['CategoryID'];

    $id = $_POST['id'];

    $sql = "UPDATE sub_category SET sub_category_name = '$sub_category_name', CategoryID = '$CategoryID' WHERE sub_category_id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:index.php");
        exit;
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
  }

  else{
  
    $sub_category_name = $_POST['sub_category_name'];
    $CategoryID = $_POST['CategoryID'];

  require 'connection.php' ;
  $requete = "INSERT INTO sub_category (`sub_category_name` , `CategoryID`) VALUES 
              ('$sub_category_name' , '$CategoryID')";
  $query = mysqli_query($con,$requete);
    
    if (isset($query)){
      header("location:index.php");
    }
  
  } 
  ?> 