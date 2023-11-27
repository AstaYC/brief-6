<?php
  require 'connection.php' ;
  if (isset($_GET['id'])) {
    
    $project_name = $_POST['project_name'];
    $project_description = $_POST['project_description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $ressourceId = $_POST['ressourceId'];
    $id = $_POST['id'];

    $sql = "UPDATE project SET project_name = '$project_name', project_description = '$project_description', `start_date` = '$start_date', `end_date` = '$end_date' , ressourceId = '$ressourceId' WHERE project_id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:index.php");
        exit;
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
  }

  else{
  
   $project_name = $_POST['project_name'];
   $project_description = $_POST['project_description'];
   $start_date = $_POST['start_date'];
   $end_date = $_POST['end_date'];
   $ressourceId = $_POST['ressourceId'];
  
   require 'connection.php' ;
  
  $requete = "INSERT INTO project (`project_name` , `project_description` , `start_date` , `end_date` , `ressourceId`) VALUES 
              ('$project_name' , '$project_description' , '$start_date' , '$end_date' , '$ressourceId')";
  $query = mysqli_query($con,$requete);
    
  if (isset($query)) {
    header("location:index.php");
} 
  
  } 
  ?> 