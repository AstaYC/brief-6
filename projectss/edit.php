<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editing</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="modal-dialog">
		<div class="modal-content">		
            
				 
		    <?php
                require 'connection.php';
                
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM project WHERE project_id = '$id'";
                    $q = mysqli_query($con,$sql);
                    $rows = mysqli_fetch_assoc($q);
                    $project_name = $rows['project_name'];
                    $project_description = $rows['project_description'];
                    $start_date = $rows['start_date'];
                    $end_date = $rows['end_date'];
                    $ressourceId = $rows['ressourceId'];
                }
             ?>
		    
			<form method="POST" action = "page.php?<?php echo "id=hahowaja" ?>">
			    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			
			    <div class="modal-header">						
					<h4 class="modal-title">Edit PROJECT</h4>
					<button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>project name</label>
						<input type="text" name="project_name" class="form-control" value="<?php if (isset($_GET['id'])){echo $project_name;} ?>" required>
					</div>
					<div class="form-group">
						<label>project description</label>
						<input type="text" name="project_description" class="form-control" value="<?php if (isset($_GET['id'])){echo $project_description;} ?>" required>
					</div>
					<div class="form-group">
						<label>start date</label>
                        <input type="text"  name="start_date" class="form-control" value="<?php if (isset($_GET['id'])){echo $start_date;} ?>" required>
					</div>
					<div class="form-group">
						<label>end date</label>
						<input type="text" name="end_date" class="form-control" value="<?php if (isset($_GET['id'])){echo $end_date;} ?>" required>
					</div>
                    <div class="form-group">
						<label>ressource id</label>
						<input type="number" name="ressourceId" class="form-control" value="<?php if (isset($_GET['id'])){echo $ressourceId;} ?>" required>
					</div>						
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>

</body>
</html>
