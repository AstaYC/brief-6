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
                    $sql = "SELECT * FROM squad WHERE squad_id = '$id'";
                    $q = mysqli_query($con,$sql);
                    $rows = mysqli_fetch_assoc($q);
                    $squad_name = $rows['squad_name'];
                    $projectId = $rows['projectId'];

                }
             ?>
		    
			<form method="POST" action = "page.php?<?php echo "id=hahowaja" ?>">
			    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			
			    <div class="modal-header">						
					<h4 class="modal-title">Edit SQUAD</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>SQUAD name</label>
						<input type="text" name="squad_name" class="form-control" value="<?php if (isset($_GET['id'])){echo $squad_name;} ?>" required>
					</div>
					<div class="form-group">
						<label>project Id</label>
						<input type="number"  name="projectId" class="form-control" value="<?php if (isset($_GET['id'])){echo $projectId;} ?>" required>
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
