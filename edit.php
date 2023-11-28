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
                    $sql = "SELECT * FROM utilisateur WHERE userId = '$id'";
                    $q = mysqli_query($con,$sql);
                    $rows = mysqli_fetch_assoc($q);
                    $nom = $rows['username'];
                    $email = $rows['useremail'];
                    $squadId = $rows['squadId'];
                    $role = $rows['role'];
                }
             ?>
		    
			<form method="POST" action = "page.php?<?php echo "id=hahowaja" ?>">
			    <input type="hidden" name ="id" value="<?php echo $_GET['id']; ?>">
			
			    <div class="modal-header">						
					<h4 class="modal-title">Edit UTILISATEUR</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="username" class="form-control" value="<?php if (isset($_GET['id'])){echo $nom;} ?>" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email"  name ="useremail"class="form-control" value="<?php if (isset($_GET['id'])){echo $email;} ?>" required>
					</div>
					<div class="form-group">
						<label>Squad ID</label>
                        <input type="number" name="squadId" class="form-control" value="<?php if (isset($_GET['id'])){echo $squadId;} ?>" required>
					</div>
					<div class="form-group">
						<label>le role</label>
						<input type="text" name="role" class="form-control" value="<?php if (isset($_GET['id'])){echo $role;} ?>" required>
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
