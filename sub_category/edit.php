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
                    $sql = "SELECT * FROM sub_category WHERE sub_category_id = '$id'";
                    $q = mysqli_query($con,$sql);
                    $rows = mysqli_fetch_assoc($q);
                    $sub_category_name = $rows['sub_category_name'];
                    $CategoryID = $rows['CategoryID'];

                }
             ?>
		    
			<form method="POST" action = "page.php?<?php echo "id=hahowaja" ?>">
			    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			
			    <div class="modal-header">						
					<h4 class="modal-title">Edit SUB CATEGORY</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>sub category name</label>
						<input type="text" name="sub_category_name" class="form-control" value="<?php if (isset($_GET['id'])){echo $sub_category_name;} ?>" required>
					</div>
					<div class="form-group">
						<label>Category Id</label>
						<input type="number" name="CategoryID" class="form-control" value="<?php if (isset($_GET['id'])){echo $CategoryID;} ?>" required>
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
